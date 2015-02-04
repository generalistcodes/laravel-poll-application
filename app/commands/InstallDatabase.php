<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class InstallDatabase extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'db:install';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Install the Database.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
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
		Schema::create('polls', function($table)
		{	
			$table->engine = 'InnoDB';

		    $table->increments('id');
		    $table->string('question');
		    $table->timestamps();
		    $table->softDeletes();
		});
		Schema::create('answers', function($table)
		{
			$table->engine = 'InnoDB';
			
		    $table->increments('id');
		    $table->string('answer');
		    $table->integer('votes');

		    $table->integer('poll_id')->unsigned();
		    $table->foreign('poll_id')->references('id')->on('polls')->onDelete('cascade');
		});
        Schema::create('users', function($table)
        {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('reasons');
            $table->dateTime("birthday");
            $table->timestamps();
            $table->softDeletes();
            $table->integer('answer_id')->unsigned();
            $table->foreign('answer_id')->references('id')->on('answers')->onDelete('cascade');
        });
	}


}
