<?php
class Production {
  #Istance variables
  public $title;
  public $language;
  public $rating;

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
      $this->title = 'Titolo non valido o non trovato';
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
        $this->language = 'Lingua non valida o non trovata';
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
  
$prod_1 = new Production('Sully: Miracle On The Hudson', 'en', 8.2);
$prod_2 = new Production('Interstellar', 'en', 7);
$prod_3 = new Production('The Great Hack', 'en', 10);
$prod_4 = new Production('La Vita è Bella', 'it', 8.7);
  
$productions = [
  $prod_1,
  $prod_2,
  $prod_3,
  $prod_4
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Film - Productions</title>
  <link rel="stylesheet" href="./css/style.css">      
</head>
<body>
  
  <div id="app">

    <h1 class="main-title">Films - Productions</h1>
    <div class="container">
      <div class="films-grid">
        
        <?php foreach($productions as $prod) {?>
          <div class="film-accordion">
            <h3 class="film-title"><?= $prod->getTitle() ?></h3>
            <ul class="film-details">
              <li><?= $prod->getLanguage() ?></li>
              <li><?= $prod->spawnStars() ?></li>
            </ul>
          </div>
        <?php } ?>

      </div>
    </div>

  </div>

</body>
</html>