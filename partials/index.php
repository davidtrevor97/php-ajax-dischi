<?php
  include "database.php";
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
    <?php
    foreach ($database as $album ) { ?>
      <h1><?php echo $album["title"]?></h1>
      <h2><?php echo $album["author"] ?></h2>
      <img src="<?php echo $album["poster"] ?>" alt="">
      <h3><?php echo $album["year"] ?></h3>
      <h3><?php echo $album["genre"] ?></h3>
  <?php  }
      ?>
  </body>
</html>
