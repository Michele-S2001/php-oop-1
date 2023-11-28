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

  public function getRating() {
    return $this->rating;
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

// var_dump($films);
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
            <h3 class="film-title"><?= $film->title ?></h3>
            <ul class="film-details">
              <li><?= $film->language ?></li>
              <li><?= $film->rating ?></li>
            </ul>
          </div>
        <?php } ?>
        
      </div>
    </div>

  </div>

</body>
</html>