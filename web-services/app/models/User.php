<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

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
	protected $hidden = array('password', 'remember_token', 'pivot');

	public function friends(){
		return $this->belongsToMany('User', 'user_user', 'user_id_1', 'user_id_2');
	}

	public function joinedActivities(){
		return $this->belongsToMany('Activity', 'activity_user', 'user_id', 'activity_id');
	}

	public function createdActivities(){
		return $this->hasMany('Activity');
	}
}
