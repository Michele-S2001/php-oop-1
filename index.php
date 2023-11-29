<?php
require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Movie.php';

$film_1 = new Movie('una notte al museo', 'en', 6.8, 2345000.53 , 180);

$productions = [
  #films & series
  $film_1
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