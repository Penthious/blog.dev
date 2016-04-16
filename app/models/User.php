<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	public static $rules = array(
	'password'      => 'required|min:7|max:15',
	'email'        => 'required|max:100',
	'first_name'   => 'required|min:1|max:15',
	'last_name'   => 'required|min:1|max:15',
	'username'   => 'required|min:5|max:15'
	);
	public static $loggedInRules = array(
	'password'      => 'required|min:7|max:15',
	'email'        => 'required|max:100',
	);

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function posts()
	{
    	return $this->hasMany('Post');
	}
}
