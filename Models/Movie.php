<?php
require_once __DIR__ . '/Production.php';

class Movie extends Production {
  #Istance variables
  protected $profit;
  protected $duration;
  
  #Construct method + params
  function __construct(String $_title,String $_lang, $_rating, $_profit,Int $_duration) {

    #construct method from parent element
    parent::__construct($_title, $_lang, $_rating);

    #construct method of movie class
    $this->setProfit($_profit);
    $this->setDuration($_duration);
  }

  #Setter & getter methods
  public function setProfit($_profit_) {
    if(is_numeric($_profit_) && $_profit_ > 0) {
      $this->profit = number_format($_profit_, 2, ',', '.') . ' €';
    } else {
      $this->profit = 'profit not found or not valid';
    }
  }

  public function getProfit() {
    return $this->profit;
  }

  public function setDuration($_duration_) {
    if(
      is_numeric($_duration_) &&
      $_duration_ > 0 &&
      $_duration_ <= 300
      ) {
      $this->duration = $_duration_ . ' min';
    } else {
      $this->duration = 'duration not found or not valid';
    }
  }

  public function getDuration() {
    return $this->duration;
  }

  public function getAdditionInfos() {
    return [
      'duration' => $this->duration
    ];
  }
}