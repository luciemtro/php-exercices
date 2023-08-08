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


/* EXERCICE 7
Copiez votre solution de l'exercice 6

TODO : Créez une propriété statique dans la classe Boisson qui ne peut être accédée qu'à l'intérieur de la classe appelée adresse qui a la valeur "Melkmarkt 9, 2000 Antwerpen".

TODO : Imprimez l'adresse sans créer un nouvel instant de la classe boisson 2 fois de deux manières différentes.

Utilisez la typographie partout !
*/