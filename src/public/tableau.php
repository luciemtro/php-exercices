<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau</title>
</head>
<body>
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
  <nav role="navigation">
    <a href="/index.php">Retour au menu</a>
  </nav>
  <main>
    <h2>Je constate que :</h2>
    <ul>
        <li>Tout s'execute dans l'ordre.</li>
        <li>Dans un chaine de caractère se trouvant dans echo, on échappe les $</li>
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
    <h3>Je créer un tableau me concernant : </h3>
    <p>
        <?php
            $me = array(
                "firtsname" => "Lucie",
                "lastname" => "Monteiro",
                "age" => 29,
                "taille" => 1.57
            );
            echo '<pre>';
            print_r($me);
            echo '</pre>';
        ?>
    </p>

    <h2>Tableaux multidimensionnels</h2>
    <h3>Mon tableau $me</h3>
    <p>
        J'ajoute un nouveau tableau plat favoris
        <?php
            $me = array(
                "firtsname" => "Lucie",
                "lastname" => "Monteiro",
                "age" => 29,
                "taille" => 1.57,
                "football" => false,
                "plat_favoris" => array("raclette", "filet américain", "pizza", "risotto") 
            );
        ?>
        Ensuite on ajoute un nouveau tableau dans mon tableau $me avec la methode short : $me["hobbies"] = ...

        <?php
            $me["hobbies"] = ["code", "jeu", "puzzle"];
            echo '<pre>';
            print_r($me);
            echo '</pre>';
        ?>
    </p>

    <h3>Tableau de mon père $papa</h3>
    <p>
    <?php
            $papa = array(
                "firtsname" => "Françisco",
                "lastname" => "Monteiro",
                "age" => 55,
                "taille" => 1.68,
                "football" => false,
                "plat_favoris" => array("couscous", "chili", "pâte", "riz pilaf"), // Vérifiez qu'il y a une virgule ici
            );           
            $papa["hobbies"] = ["guitare", "cuisine"];
            echo '<pre>';
            print_r($papa);
            echo '</pre>';
        ?>
    </p>

    <h3>Affectation du tableau $papa à mon tableau $me avec la KEY pere</h3>
    <p>
        $me["pere"] = $papa;
        <?php
            $me["pere"] = $papa;
            echo '<pre>';
            print_r($me);
            echo '</pre>';
        ?>
    </p>

    <h3>Nombre de hobbies dans le tableau $me, on utilise count</h3>
    <p>
        <?php
            $nombreHobbiesMe = count($me['hobbies']);
            echo "Nombre de hobbies dans le tableau \$me : " . $nombreHobbiesMe;
        ?>
    </p>

    <h3>Nombre de hobbies dans le tableau $papa</h3>
    <p>
        <?php
        $nombreHobbiesPapa = count($me['pere']['hobbies']);
        echo "Nombre de hobbies dans le tableau \$papa : " . $nombreHobbiesPapa;
        ?>
    </p>

    <h3>Total du nombres d'hobbis des deux</h3>
    <p>
        <?php
           $nombreHobbiesTotal = count($me['hobbies']) + count($papa['hobbies']);
           echo "Nombre total de hobbies : " . $nombreHobbiesTotal;
           ?>
    </p>

    <h3>Ajout new hobbie : $me["hobbies"][] = "taxidermy";</h3>
    <p>
        <?php
            $me["hobbies"][] = "taxidermy";
            echo '<pre>';
            print_r($me);
            echo '</pre>';
        ?>
    </p>

    <h3>Je remplace mon nom : $me["lastname"] = "durand";</h3>
    <p>
        <?php
            $me["lastname"] = "durand";
            echo '<pre>';
            print_r($me);
            echo '</pre>';
        ?>
    </p>

    <h3>Création tableau de $soulmate</h3>
    <p>
        <?php
            $soulmate = array(
                "firtsname" => "Jean",
                "lastname" => "dubas",
                "age" => 35,
                "taille" => 1.80,
                "football" => false,
                "plat_favoris" => array("blanquette", "bolognaise", "burger", "choucroute"), 
            );
            $soulmate["hobbies"] = ["flute", "cuisine", "bowling", "puzzle"];
            echo '<pre>';
            print_r($soulmate);
            echo '</pre>';

            $result = array_intersect($me['hobbies'], $soulmate['hobbies']);
            echo '<pre>';
            echo "Les hobbies en communs de soulmate & me <pre>";
            print_r($result);
            echo '<pre>';

            $fusion = array_merge($me["hobbies"], $soulmate["hobbies"]);
            echo '<pre>';
            echo "Les hobbies en communs de soulmate & me fusionner dans un new tableau <pre>";
            print_r($fusion);
            echo '<pre>';
        ?>
    </p>

    <h2>PLUS D'EXERCICES :</h2>
    <h3>Création de tableau $web_development</h3>
        <?php
          $web_development = array(
            "backend" => array(),
            "frontend" => array()
          );

        $web_development["frontend"][] = "xhtml"; 
        $web_development["backend"][] = "Ruby on rails"; 
        $web_development["frontend"][] = "css"; 
        $web_development["frontend"][] = "flash"; 
        $web_development["frontend"][] = "javascript"; 
        $web_development["frontend"][0] = "html";
        unset($web_development["frontend"][2]);

        echo '<pre>';
        print_r($web_development);
        echo '<pre>';
        ?>
        
  </main>
</body>
</html>

