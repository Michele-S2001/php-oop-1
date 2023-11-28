<?php
class Production {
  public $title;
  public $language;
  public $rating;

  function __construct(String $_title,String $_lang, $_rating)
  {
    $this->title = $_title;
    $this->language = $_lang;
    $this->setRating($_rating);
  }

  public function setRating($_rate) {
    $int_rate = intval($_rate);
    
    if($int_rate !== 0 && $int_rate <= 10) {
      $stars_number = intval($int_rate / 2); 
      $this->rating = $stars_number;
    } else {
      $this->rating = 0;
      var_dump('no valide $rating value');
    }
  }
}

$film1 = new Production('Sully: Miracle On The Hudson', 'en', 8.2);
$film2 = new Production('Interstellar', 'en', 7);

var_dump($film1);
var_dump($film2);