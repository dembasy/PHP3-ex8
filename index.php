<?php
// definition de la variable start initialiser a 200
  $start = 200;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>ex8</title>
  </head>
  <body>
    <p>
      <?php
      // definition de la boucle avec comme parametre tant que start sera superieur ou egal a 0 executer -->,
      // on affiche la phrase 'enfin'
      // On definit la maniere dont la boucle sera executer donc d'y aller par 12
        while ($start >= 0 ) {
          echo 'Enfin !';
          $start = $start - 12;

        }
       ?>
    </p>
  </body>
</html>
