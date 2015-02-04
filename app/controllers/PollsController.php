<?php

class PollsController extends BaseController 
{
	public function loadPolls()
	{
		$data['polls'] = Poll::get();

		return View::make('polls',$data);
	}

	public function showPoll($id)
	{	
		$data['poll'] = Poll::find((int) $id);

		return View::make('poll',$data);	
	}
	
	public function saveAnswer($id)
	{	
		$answer = Input::get('answer', null);
        $data = Input::only('name', 'reasons', 'email', 'birthday');



        $poll = Poll::find((int) $id);



		$poll->answers()->where('id', (int) $answer)->increment('votes');
		$poll->users()->create($data);

		return Redirect::route('results', array( 'id' => $id, ));
	}

	public function showResults($id)
	{	
		$data['poll'] = Poll::find((int) $id);

		return View::make('results',$data);	
	}
}
