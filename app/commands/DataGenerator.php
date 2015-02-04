<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class DataGenerator extends Command {

	public $words = array('Internet Explorer','FireFox','Safari','Chrome','Opera','Konqueror','Lynx');

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'data:generate';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Generate Data in DB.';

	/**
	 * Create a new command instance.
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$poll = new Poll();
		$poll->question = $this->_generateQuestion();

		$answers = array();

        foreach($this->words as $word)
        {
            $data = new Answer();
            $data->answer = $word;
            $data->votes = 0;
            $answers[] = $data;
        }


		$poll->save();
		$poll->answers()->saveMany($answers);
	}

	private function _generateQuestion()
	{
		$question = 'What is your favorite browser';
		
		return $question.'?';
	}

	private function _generateAnswer()
	{
		$answer = '';
		$max = count($this->words);
		$answer .= $this->words[rand(0,$max)];

		return $answer;
	}
}
