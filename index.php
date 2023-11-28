<?php
class Production {
  public $title;
  public $language;
  public $rating;

  function __construct(String $_title,String $_lang, $_rating)
  {
    $this->setTitle($_title);
    $this->setLanguage($_lang);
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
}

$film1 = new Production('Sully: Miracle On The Hudson', 'en', 8.2);
$film2 = new Production('Interstellar', 'en', 7);
$film3 = new Production('The Great Hack', 'en', 10);
$film4 = new Production('La Vita è Bella', 'it', 8.7);

$films = [
  $film1,
  $film2,
  $film3,
  $film4
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
        
        <?php foreach($films as $film) {?>
          <div class="film-accordion">
            <h3 class="film-title"><?= $film->getTitle() ?></h3>
            <ul class="film-details">
              <li><?= $film->getLanguage() ?></li>
              <li>
                <?php for($i = 0; $i < $film->getRating(); $i++) { ?>
                  <span v-for="">&#9733;</span>
                <?php } ?>
                <?php for($i = 0; $i < (5 - $film->getRating()); $i++) { ?>
                  <span v-for="">&#9734;</span>
                <?php } ?>
              </li>
            </ul>
          </div>
        <?php } ?>

      </div>
    </div>

  </div>

</body>
</html>