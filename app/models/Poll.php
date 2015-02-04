<?php

class Poll extends Eloquent
{
	public function answers()
	{
		return $this->hasMany('Answer', 'poll_id', 'id');
	}
    public function users()
	{
		return $this->hasMany('User', 'answer_id', 'id');
	}
}