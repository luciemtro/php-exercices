
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conditions</title>
</head>
<body>
  <nav role="navigation">
    <a href="/index.php">Retour au menu</a>
  </nav>
  <main>
    <p>La température est à 12 degrès, je crée une condition, si la température est = ou supérieur à 15 degrès, je porte un tshirt, si elle est inférieur, je porterai un pull.</p>
    <p>Je porte un :     
      <?php
        $temperature = 12;

        if($temperature >= 15){
          $clothes = "T-shirt";
          $should_i_wear_a_scarf = false;
        } else {
          $clothes = "Pull-over";
          $should_i_wear_a_scarf = true;
        }
        echo $clothes;
      ?>.
    </p>
  </main>
</body>
</html>

