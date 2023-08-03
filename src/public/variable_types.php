<?php
$my_name = "Lucie" ;
$my_age = 28 ;
$my_color_eyes = "kaki brun bizarre" ;
$my_family = array (
  0 => "Françisco",
  1 => "Ingrid", 
  2 => "Allan",
  3 => "Loane",
);
// Pour la faim, j'utiliserai un boolean
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variable Types</title>
</head>
<body>
  <nav role="navigation">
    <a href="/index.php">Retour au menu</a>
  </nav>
  <main>
    <p>
      Salut, mon nom est 
      <?php 
        echo $my_name;
      ?> 
      !
    </p>
    <p>
      J'ai 
      <?php
        echo $my_age;
      ?>
      ans.
    </p>
    <p>
      Mes yeux sont 
      <?php
        echo $my_color_eyes;
      ?>.
    </p>
    <p>
      La première personne de ma famille est 
      <?php
       echo $my_family[0];
      ?>.
    </p>
  </main>
</body>
</html>







