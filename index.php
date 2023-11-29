<?php
require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Serie.php';

$film_1 = new Movie('Una notte al museo', 'en', 6.8, 784500000 , 108);
$film_2 = new Movie('Titanic', 'en', 7.9, 2187000000, 195);
$film_3 = new Movie('Interstellar', 'en', 8.5, 773800000, 169);
$film_4 = new Movie('La vita è bella', 'it', 3.6, 31231984 , 124);
$film_5 = new Movie('The lone ranger', 'en', 2.1, 435600000 , 149);
$serie_1 = new Serie('La casa di carta', 'es', 6.3, 5);
$serie_2 = new Serie('One piece', 'en', 7.5, 2);
$serie_3 = new Serie('Elite', 'es', 8.9, 7);
$serie_4 = new Serie('Breaking bad', 'en', 9.7, 5);
$serie_5 = new Serie('Suburra - la serie', 'it', 9.4, 3);

$productions = [
  #films & series
  $film_1,
  $film_2,
  $film_3,
  $film_4,
  $film_5,
  $serie_1,
  $serie_2,
  $serie_3,
  $serie_4,
  $serie_5
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