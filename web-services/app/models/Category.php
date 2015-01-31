<?php
class Category extends Eloquent{
  public function activities(){
    return $this->hasMany('Activity');
  }
}
