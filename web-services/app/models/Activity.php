<?php
// include(app_path().'/models/DistantCalculator.php');
class Activity extends Eloquent{
  public function findActityByLocation($locationLat, $locationLong){
    //distance(34.0229,-118.285,34.022983,-118.295556,"M");
    //10/69 latitude.
    //10/69.172
    $latDif = 10/69;
    $lonDif = 10/69.172;
    return DB::table('activities')->whereBetween('location_long', array($locationLong-$lonDif, $locationLat-$latDif))->get();
  }
  public function findAcivityByFriend($user){

  }
  public function findUserActivity($user){

  }
}
