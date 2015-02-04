<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 *
	 * @var array
	 */
	protected $hidden = array('name', 'email','reasons','birthday','answer_id');
	protected $fillable = array('name', 'email','reasons','birthday','answer_id');

}
