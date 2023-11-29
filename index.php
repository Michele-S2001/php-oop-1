<?php
require_once __DIR__ . '/Models/Production.php';
  
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