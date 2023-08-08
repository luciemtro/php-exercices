<a href="../index.php">Retour au menu</a>
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
<h1>Extending</h1>

<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . "exercise_1_classes.php";


class Biere extends Boisson {
    public string $name;
    public $pourcentage;

    public function __construct ($color, $price, $temperature, $name,$pourcentage){
        parent:: __construct($color, $price, $temperature);
        $this->name = $name;
        $this->pourcentage = $pourcentage;
    }
    public function getAlcoholPercentage(){
        echo "La boisson " . $this->name . " est a " . $this->pourcentage . "% d'alcool. <br>";
    }
}

$duvel = new Biere("blonde", 3.50, "cold", "Duvel", 8.5);
$duvel->getAlcoholPercentage();
$duvel->getInfo();




/* EXERCICE 2

TODO : Créez la classe bière qui s'étend à partir de la classe Boisson.
TODO : Créer les propriétés nom (string) et pourcentage d'alcool (float).
TODO : Prévoir une construction qui nous permet d'utiliser toutes les propriétés de beverage et qui fixe les valeurs de name et alcoholpercentage.

Rappelez-vous que pour l'instant nous utiliserons des propriétés et des méthodes accessibles de partout.
TODO : Créer une fonction getAlcoholPercentage qui renvoie le pourcentage d'alcool.
TODO : Instanciez un objet qui représente Duvel. Veillez à ce que la couleur soit blonde, le prix égal à 3,5 euros et 
la température automatiquement froide.
TODO : Le nom doit également être Duvel et le pourcentage d'alcool doit être de 8,5%.
TODO : Imprimez le getAlcoholPercentage 2 fois sur l'écran de deux manières différentes, imprimez la couleur sur l'écran et le getInfo.

Veillez à ce que chaque impression se fasse sur une ligne différente.
Essayez d'obtenir cette erreur à l'écran= Fatal error : Uncaught Error : Call to undefined method Beverage::getAlcoholPercentage() 
in /var/www/becode/workshop/exercise2.php on line 64
UTILISEZ LE TYPEHINTING PARTOUT !
*/
?>