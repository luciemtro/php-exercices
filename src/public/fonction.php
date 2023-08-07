<a href="/index.php">Retour au menu</a>

<h2>Exercice 1</h2>
<h3>Utilisez une fonction qui met en majuscule la première lettre de l'argument fourni.</h3>
<p>
    <?php
        function capitalizeFirstLetter($str) {
            return mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
        }
        
        echo capitalizeFirstLetter("émile");
    ?>
</p>

<h2>Exercice 2</h2>
<h3>Utilisez la fonction native permettant d'afficher l'année en cours.</h3>
<p>
    <?php
    $anneeEnCours = date('Y');
    echo "L'année en cours est : $anneeEnCours";
    ?>
</p>

<h2>Exercice 3</h2>
<h3>Affichez maintenant la date, l'heure, les minutes et les secondes, en utilisant la même fonction, en jouant avec les arguments.</h3>
<p>
    <?php
    function afficherDateHeure()
    {
        $dateHeure = date('Y-m-d H:i:s');
        echo "Date et heure actuelles : $dateHeure";
    }

    afficherDateHeure();
    ?>
</p>

<h2>Exercice 4</h2>
<h3>Créez une fonction "Somme" qui prend 2 nombres et renvoie leur somme.</h3>
<p>
    <?php
    function additon($a, $b)
    {
        return $a + $b;
    }
    $resultat = somme(5, 3); 
    echo $resultat;
    ?>
    </p>

<h2>Exercice 5</h2>
<h3>Améliorez cette fonction afin qu'elle vérifie si l'argument est bien un nombre. Sinon, il devrait afficher :"Error: argument is the not a number."</h3>
<p>
<?php
    function somme($a, $b)
    {
        if (is_numeric($a) && is_numeric($b)) {
            return $a + $b;
        } else {
            return "Erreur.";
        }
    }

    echo somme(5, 3); 
    echo somme(10, 'abc'); 
    ?>

</p>

<h2>Exercice 6</h2>
<h3>Créez une fonction qui prend comme argument une chaîne de caractères et renvoie un acronyme composé des initiales de chaque mot. <br>
Exemple : "In code we trust!"doit renvoyer : ICWT.</h3>
<p>
    <?php
        function creerAcronyme($phrase)
        {
            $mots = explode(' ', $phrase);
            $acronyme = '';

            foreach ($mots as $mot) {
                $acronyme .= strtoupper(substr($mot, 0, 1));
            }

            return $acronyme;
        }

        echo creerAcronyme("In code we trust!"); 
        ?>
</p>

<h2>Exercice 7</h2>
<h3>Créez une fonction qui remplace les lettres "a" et "e" par "æ". Exemple : "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca"doit respectivement retourner "cæcotrophie", "chænichthys","microsphæra", "sphærotheca".</h3>
<p>
    <?php
    function remplacerAE($mot)
    {
        $mot = str_replace(['a', 'e'], 'æ', $mot);
        return $mot;
    }

    echo remplacerAE("caecotrophie"); 
    echo remplacerAE("chaenichthys"); 
    echo remplacerAE("microsphaera"); 
    echo remplacerAE("sphaerotheca"); 
    ?>
</p>

<h2>Exercice 8</h2>
<h3>Créez la fonction inverse, qui remplace "æ" par "ae" dans : cæcotrophie, chænichthys, microsphæra,sphærotheca</h3>
<p>
    <?php
    function remplacerAeInverse($mot)
    {
        $mot = str_replace('æ', 'ae', $mot);
        return $mot;
    }

    echo remplacerAeInverse("cæcotrophie"); 
    echo remplacerAeInverse("chænichthys"); 
    echo remplacerAeInverse("microsphæra"); 
    echo remplacerAeInverse("sphærotheca"); 
    ?>

</p>

<h2>Exercice 9</h2>
<h3>Créer une fonction pour retourner les messages "notice", "warning" et "error" à un utilisateur, qui prend 2 arguments : le "message", et la "classe css" (valeurs : "info", "error", "warning "). Cette fonction nous permettrait d'écrire ceci :</h3>
<p>
    <?php
    function afficherMessage($message, $classeCSS)
    {
        echo "<div class='$classeCSS'>$message</div>";
    }

    afficherMessage("Ceci est une notice.", "info");
    afficherMessage("Attention ! Ceci est un avertissement.", "warning");
    afficherMessage("Erreur ! Il y a eu une erreur.", "error");
    ?>

</p>