<?php
  include "partials/database.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>DISCHI</title>
  </head>
  <body>
    <!-- Stampare a schermo i dischi musicali utilizzando come dati quelli presenti nel file database.php che trovate in allegato.
    In questa milestone stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->
    <div class="selectContainer">
      <div class="app">
        <ul>
      <?php
      foreach ($database as $album ) { ?>

            <li>
              <h4><?php echo $album["title"]?></h4>
              <h5><?php echo $album["author"] ?></h5>
              <img src="<?php echo $album["poster"] ?>" alt="">
              <h6><?php echo $album["year"] ?></h6>
              <h6><?php echo $album["genre"] ?></h6>
            </li>

    <?php  }
        ?>
          </ul>
        </div>
    </div>

  </body>
</html>
