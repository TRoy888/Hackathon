<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//return User::find(1)->users;
		// return User::find(1)->joinedActivities;
		//return User::find(1)->createdActivities;
		// $u = new User;
		// $u->id = 1;
		// $a = new Activity;
		// return $a->findAcivityByFriend($u);
		// return Category::find(1)->activities;
		// return Activity::find(1)->category;
		// return Activity::find(1)->joiners;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new User;
		$user->email = Input::get("email");
		$user->first_name = Input::get("first_name");
		$user->last_name = Input::get("last_name");
		$user->first_name = Input::get("first_name");
		$user->last_name = Input::get("last_name");
		$user->password = Hash::make(Input::get("password"));
		$user->detail = Input::get("detial");
		$user->rating = 1;
		$user->picture = Input::get("picture");
		$user->save();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
