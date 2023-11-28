# OOB - 1

- definire una classe production
- all'interno della classe sono dichiarate le variabili d'istanza:
  - title
  - language
  - rating
- all'interno della classe è definito un costruttore
- all'interno della classe è definito almeno un metodo

- vengono istanziati almeno 2 oggetti
- stampando a schermo i valori delle relative proprietà

### Bonus
-  crea un layout completo per stampare a schermo una lista di movies

<?php for($i = 0; $i < $film->getRating(); $i++) { ?>
  <span class="star" v-for="">&#9733;</span>
<?php } ?>
<?php for($i = 0; $i < (5 - $film->getRating()); $i++) { ?>
  <span class="star" v-for="">&#9734;</span>
<?php } ?>