<?php

class Production {
  #Istance variables
  protected $title;
  protected $language;
  protected $rating;

  #Construct method + params
  function __construct(String $_title,String $_lang, $_rating)
  {
    $this->setTitle($_title);
    $this->setLanguage($_lang);
    $this->setRating($_rating);
  }

  #Setter & getter methods
  public function setRating($_rate) {
    
    if(is_numeric($_rate) && $_rate <= 10 && $_rate >= 0) {
      $stars_number = intval($_rate / 2); 
      $this->rating = $stars_number;
    } else {
      $this->rating = 0;
    }
  }
  
  public function setTitle($_title_) {
    if($_title_ !== '' && trim($_title_) !== '') {
      $this->title = $_title_;
    } else {
      $this->title = 'title not found or not valid';
    }
  }
  
  public function setLanguage($_lang_) {
    if(
      $_lang_ !== '' && 
      strlen($_lang_) === 2 &&
      trim($_lang_) !== ''
      ) {
        $this->language = $_lang_;
      } else {
        $this->language = 'lang not found or not valid';
      }
    }
    
  public function getRating() {
    return $this->rating;
  }
  
  public function getTitle() {
    return $this->title;
  }
  
  public function getLanguage() {
    return $this->language;
  }

  #star function
  public function spawnStars() {
    $stars = '';
    for($i = 0; $i < $this->getRating(); $i++) {
      $stars .= '<span class="star">&#9733;</span>';
    }
    for($i = 0; $i < (5 - $this->getRating()); $i++) {
      $stars .= '<span class="star">&#9734;</span>';
    }
    return $stars;
  }
}