<?php

class ActivityController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $lon = Input::get('lon');
		// $lat = Input::get('lat');
		// $a = new Activity;
		// return json_encode($a->findActityByLocation($lat, $lon));
		return View::make('activities.index')->with('activities',Activity::all());
		//34.022983, -118.295556
		//34.022912, -118.295470
		
		// return json_encode($a->findActityByLocation(34.022912, -118.295470));
		
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$userId = Input::get('userId');
		$name = Input::get('name');
		$locationLong = Input::get('locationLong');
		$locationLat = Input::get('locationLat');
		$location = Input::get('location');
		$description = Input::get('description');
		$categoryId = Input::get('categoryId');
		$imageFile = Input::file('image');

		$destinationPath = '/upload/activity-image/';
		$imageName = $imageFile->getClientOriginalName();
		Input::file('image')->move($destinationPath, $imageName);

		$activity = new Activity;
		$activity->activity_name = $name;
		$activity->location_long = $locationLong;
		$activity->location_lat = $locationLat;
		$activity->description = $description;
		$activity->category_id = $categoryId;
		$activity->user_id = $userId;
		$activity->location = $location;
		$activity->picture = $destinationPath . ' ' . $imageName;
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
		$activity = new Activity;
		$activities = $activity->findAcivityByFriend($userId);
		return json_encode($activities);
	}

	public function joinActivity($activityId, $userId)
	{
		$activityUser = new ActivityUser;
		$activityUser->activity_id = $activityId;
		$activityUser->user_id = $userId;
		$activityUser->save();
	}

	public function getEnrolledActivities($userId)
	{
		$activity = new Activity;
		$activities = $activity->findUserActivity($userId);
		return json_encode($activities);
	}

	public function getCreatedActivities($userId)
	{
		$activity = new Activity;
		$activities = $activity->createdActivities($userId);
		return json_encode($activities);
	}


}
