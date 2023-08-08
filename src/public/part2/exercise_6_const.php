<a href="../index.php">Retour au menu</a>
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
<h1>Static</h1>

<?php

class Boisson {
    private string $color;
    private float $price;
    private string $temperature;
    const BARNAME = 'Het Vervolg'; 
    private static string $address = "Melkmarkt 9, 2000 Antwerpen"; 

    public function __construct($color, $price, $temperature = 'cold') {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo() {
        echo "Cette boisson est " . $this->temperature . ", elle est de couleur " . $this->color . " et coûte " . $this->price . " euros. <br>";
    }

    public function getBarname() {
        return self::BARNAME; 
    }

    public static function getAddress() { 
        return self::$address;
    }
}

class Biere extends Boisson {
    private string $name;
    private $pourcentage;

    public function __construct($color, $price, $temperature, $name, $pourcentage) {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->pourcentage = $pourcentage;
    }

    public function getAlcoholPercentage() {
        echo "La boisson " . $this->name . " est à " . $this->pourcentage . "% d'alcool. <br>";
    }

    public function getBarname() {
        return parent::getBarname(); 
    }
}

$duvel = new Biere("blonde", 3.50, "cold", "Duvel", 8.5);
$duvel->getAlcoholPercentage();
$duvel->getInfo();

echo Boisson::BARNAME . "<br>"; 
echo $duvel->getBarname() . "<br>";

// Affichage de l'adresse statique
echo Boisson::getAddress() . "<br>";
echo Biere::getAddress() . "<br>";




/* EXERCICE 6
Copiez les classes de l'exercice 2.

TODO : Changez les propriétés en private.

TODO : Créez une const barname avec la valeur 'Het Vervolg'.
TODO : Imprimez la constante à l'écran.
TODO : Créez une fonction dans beverage et utilisez la constante.
TODO : Faites de même dans la classe bière.
TODO : Imprimez la sortie de ces fonctions à l'écran.
TODO : Assurez-vous que chaque impression est sur une nouvelle ligne.

Utilisez la typographie partout !
*/