<a href="/index.php">Retour au menu</a>

<h1>LOOPS</h1>

<h2>Exercice 1 :</h2>
<p>
    <?php

        $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
        $verb = "code";
        foreach($pronouns as $pronoun){
            echo $pronoun . " ";
            if($pronoun == "He/She"){
               echo $verb . "s";
            }
            else {
                echo $verb;
            }
            echo '<pre>';
        };
    ?>
</p>

<h2>Boucle while 1 à 120</h2>

    <?php
        $numberWhile = 1;
        while ($numberWhile <= 120){
            echo $numberWhile . "<br>";
            $numberWhile ++ ;
        };

    ?>
</p>

<h2>Boucle For 1 à 120</h2>
<p>
    <?php
        for($numberFor = 1 ; $numberFor <= 120 ; $numberFor++){
            echo $numberFor . "<br>";
        }
    ?>
</p>

<h2>Liste startup</h2>
<p>
    <?php
        $names = array(
            "Jérôme",
            "Adeline",
            "Camille",
            "Cedric",
            "Ilias",
            "Jason",
            "Manon",
            "Nathan",
            "Marius",
            "Pauline",
            "Rui",
            "Sam",
            "Steeve",
            "Tim",
            "Youssef",
            "Corentin",
            "Sarah",
            "Clara",
            "Lucie",
            "Abdoulaye",
            "Nicolas",
            "Pietro",
            "Robin"
        );

        foreach($names as $name){
            echo $name . '<br>';
        }
    ?>
</p>
<h2>Tableau avec 10 pays</h2>

<?php
    $ListPays = array(
        "France",
        "Belgique",
        "Espagne",
        "Portugal",
        "Italie",
        "Suisse",
        "Corée",
        "Japon",
        "Norvège",
        "Pologne"
    );
?>

