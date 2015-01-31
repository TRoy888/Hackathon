<?php
// include(app_path().'/models/DistantCalculator.php');
class Activity extends Eloquent{

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = array('password', 'remember_token', 'pivot');

  public function findActityByLocation($locationLat, $locationLong){
    //distance(34.0229,-118.285,34.022983,-118.295556,"M");
    //10/69 latitude.
    //10/69.172
    $latDif = 10/69;
    $lonDif = 10/69.172;
    return DB::table('activities')->whereBetween('location_long', array($locationLong-$lonDif, $locationLat-$latDif))->get();
  }
  public function findAcivityByFriend($user){
    $friends = User::find($user->id)->friends;
    $activities = array();
    foreach ($friends as &$friend) {
      foreach ($friend->joinedActivities as &$activity){
        if(!array_key_exists ( $activity->id , $activities))
          $activities[$activity->id] = $activity;
      }
    }
    return $activities;
    // return User::find($user->id)->friends[1]->joinedActivities;
  }
  public function findUserActivity($user){
    return User::find($user->id)->joinedActivities;
  }
}
