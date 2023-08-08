<a href="../index.php">Retour au menu</a>

<h1>Les classes</h1>

<?php

class Boisson {
    public string $color;
    public float $price;
    public string $temperature;
    
    public function __construct ($color ,$price, $temperature = 'cold') {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    public function getInfo(){
        echo "Cette boisson est " . $this->temperature . ", elle est de couleur " . $this->color . " et coûte " . $this->price . " euros. <br>";
    }
}

$coca = new Boisson("noir", 2.00, "cold");
$coca->getInfo();

/* EXERCICE 1
TODO : Créer une classe boisson.
TODO : Créer les propriétés color (string), price (float) et temperature (string) et prévoir un construct.
TODO : Avoir une valeur par défaut "cold" dans le construct pour la température.

Rappelez-vous que pour l'instant nous utiliserons des propriétés et des méthodes accessibles de partout.
TODO : Créer une fonction getInfo qui retourne "Cette boisson est <température> et <couleur>".
TODO : Instanciez un objet qui représente le cola. Assurez-vous que la couleur est fixée au noir, que le prix est égal à 2 euros et que 
la température est froide. 
imprimez le getInfo à l'écran.
TODO : Imprimez la température à l'écran.

UTILISEZ LA TYPOGRAPHIE PARTOUT !
*/
