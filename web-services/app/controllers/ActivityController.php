<?php

class ActivityController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//34.022983, -118.295556
		//34.022912, -118.295470
		$a = new Activity;
		return json_encode($a->findActityByLocation(34.022912, -118.295470));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// CREATE TABLE `users` (
//   `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
//   `email` varchar(255) DEFAULT NULL,
//   `first_name` varchar(255) DEFAULT NULL,
//   `last_name` varchar(255) DEFAULT NULL,
//   `password` varchar(255) DEFAULT NULL,
//   `detail` varchar(1000) DEFAULT NULL,
//   `rating` int(11) DEFAULT NULL,
//   PRIMARY KEY (`id`)
// ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
		$user = new User;
		$user->email = Input::get("email");
		$user->firstName = Input::get("first_name");
		$user->lastName = Input::get("last_name");
		$user->password = Input::get("password");
		$user->detail = Input::get("detial");
		$user->save();
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$name = Input::get('name');
		$locationLong = Input::get('locationLong');
		$locationLat = Input::get('locationLat');
		$description = Input::get('description');
		$categoryId = Input::get('categoryId');
		
		$activity = new Activity;
		$activity->name = $name;
		$activity->locationLong = $locationLong;
		$activity->locationLat = $locationLat;
		$activity->description = $description;
		$activity->categoryId = $categoryId;
		$activity->save();
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
	
	public function getFriendsActivities($userId)
	{
		
	}
	
	public function joinActivity($activityId, $userId)
	{
		
	}
	
	public function getEnrolledActivities($userId)
	{
		
	}
	
	public function getCreatedActivities($userId)
	{
		
	}


}
