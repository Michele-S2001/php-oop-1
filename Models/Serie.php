<?php
require_once __DIR__ . '/Production.php';

class Serie extends Production {
  #Istance variables
  protected $seasons;

  #Construct method + params
  public function __construct(String $_title,String $_lang, $_rating,Int $_seasons)
  {
    #construct method from parent element
    parent::__construct($_title, $_lang, $_rating);

    #construct method of movie class
    $this->setSeasons($_seasons);
  }

  #Setter & getter methods
  public function setSeasons($_seasons_) {
    if(
      is_numeric($_seasons_) &&
      $_seasons_ > 0 &&
      $_seasons_ < 50
      ) {
        $this->seasons = $_seasons_;
      } else {
        $this->seasons = 'num of seasons not valid or not found';
      }
  }

  public function getSeasons() {
    return $this->seasons;
  }

  public function getAdditionInfos() {
    return [
      'season' => $this->getSeasons(),
    ];
  }
}