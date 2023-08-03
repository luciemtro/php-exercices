




<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau</title>
</head>
<body>
  <nav role="navigation">
    <a href="/index.php">Retour au menu</a>
  </nav>
  <main>
    <h2>Je constate que :</h2>
    <ul>
        <li>Tout s'execute dans l'ordre.</li>
    </ul>

    <h2>J'ai crée mon tableau my family</h2>
    <p>
    <?php 
        $my_family = ["Françisco", "Ingrid", "Allan", "Loane"];
    ?>
    </p>

    <h3>Pour afficher un tableau : </h3>
    <ul>
        <li>En ligne : print_r(ton tableau)</li>
            <?php 
            print_r($my_family);
            ?>
        <li>
            En tableau :
            echo 'balise pre ouvrante' <br>
            print_r <br>
            echo 'balise pre fermante'
            <?php
                // Ecrit en tableau grâce à <pre>
                echo '<pre>';
                print_r($my_family);
                echo '</pre>';
            ?>
        </li>
        <li>
            Pour plus de détails on utilise var_dump, on remarque le type de valeur, son nombre de charactères
            <?php 
            var_dump($my_family);
            ?>
        </li>
    </ul>

    <p>
        J'appelle l'index 1 :
        echo $my_family[1] : <br>
        <?php 
        echo $my_family[1]; 
        ?>
    </p>
    <h2>La méthode array_push</h2>
    <p>
        J'utilise array push pour ajouter ma grand mère : array_push($my_family, "Marie-line"); 
        <?php 
        array_push($my_family, "Marie-line"); 
        echo '<pre>';
        print_r($my_family);
        echo '</pre>';
        ?>
    </p>
    <h2>La méthode courte: </h2>
    <p>
        $countries[] = 'Mon arrière grand mère'
        <?php 
        $my_family[] = "Marie Madelaine";
        echo '<pre>';
        print_r($my_family);
        echo '</pre>';
        ?>
    </p>
    <p>
        <h2>Les clés associatives</h2>
        Jeanne est 
        <?php
            $person['function'] = 'Junior Web Developer';
            echo $person['function'];
        ?>.
    </p>
    <p>
        Après quelques années, Jeanne est 
        <?php
            $person['function'] = 'Senior Web Developer';
            echo $person['function'];
        ?>.
    </p>
    <h2>Tableaux associatifs</h2>
    <p>

    </p>

  </main>
</body>
</html>

