
<a href="../index.php">Retour au menu</a>

<h1>Protected</h1>
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


class Boisson {
    protected string $color;
    protected float $price;
    protected string $temperature;

    public function __construct($color, $price, $temperature = 'cold') {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo() {
        return "Couleur : " . $this->color . ", Prix : " . $this->price . ", Température : " . $this->temperature;
    }
}

class Biere extends Boisson {
    protected string $name;
    protected float $pourcentage;

    public function __construct($color, $price, $temperature, $name, $pourcentage) {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->pourcentage = $pourcentage;
    }

    public function beerInfo() {
        return "Bonjour je suis " . $this->name . ", j'ai un pourcentage d'alcool de " . $this->pourcentage . "% et " . parent::getInfo();
    }
}

$duvel = new Biere("claire", 3.50, "cold", "Duvel", 8.5);
echo $duvel->beerInfo();





/* EXERCICE 4
Copiez le code de l'exercice 3 ici et supprimez tout ce qui concerne cola.

TODO : Faites en sorte que toutes les propriétés soient protégées.
TODO : Faites en sorte que toutes les autres impressions 
fonctionnent sans erreur sans changer la classe beverage.
TODO : N'appelez pas les getters dans la classe enfant.

*/
?>