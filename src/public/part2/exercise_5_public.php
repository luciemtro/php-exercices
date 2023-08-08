<a href="../index.php">Retour au menu</a>

<h1>Public</h1>
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

class Boisson {
    private string $color;
    private float $price;
    private string $temperature;
    
    public function __construct ($color ,$price, $temperature = 'cold') {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    
    public function getInfo(){
        echo "Cette boisson est " . $this->temperature . ", elle est de couleur " . $this->color . " et coûte " . $this->price . " euros. <br>";
    }

    public function changePrice(float $newPrice) {
        $this->price = $newPrice;
    }

    public function displayPrice() {
        echo "Le prix est maintenant de " . $this->price . " euros. <br>";
    }
}

$coca = new Boisson("noir", 2.00, "cold");
$coca->getInfo();

$coca->changePrice(3.5);
$coca->displayPrice();




/* EXERCICE 5
Copiez la classe de l'exercice 1.

TODO : Changez les propriétés en private.

TODO : Corrigez les erreurs sans utiliser les fonctions getter et setter.
TODO : Changez le prix à 3.5 euro et imprimez-le également
 à l'écran sur une nouvelle ligne.
*/