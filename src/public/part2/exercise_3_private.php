<a href="../index.php">Retour au menu</a>
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
<h1>Private</h1>

<?php

class Beer {
    
    private string $color;
    private float $price;
    private string $temperature;
    private string $name;
    private float $pourcentage;
    
    public function __construct ($color ,$price, $temperature = 'cold', $name, $pourcentage) {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
        $this->name = $name;
        $this->pourcentage = $pourcentage;
    }
    private function beerInfo(){
        return "Bonjour je suis " . $this->name . ", j'ai un pourentage d'alcool de " . $this->pourcentage . "% et j'ai une couleur " . $this->color;
    }

    public function CallBeerInfo(){
        return $this->beerInfo();
    }
}

$duvel = new Beer ("claire", 3.50, "cold", "Duvel", 8.5);
echo $duvel->CallBeerInfo();








/* EXERCICE 3

TODO : Copiez le code de l'exercice 2 ici et supprimez tout ce qui concerne cola.
TODO : Rendez toutes les propriétés privées.
TODO : Faites en sorte que toutes les autres impressions fonctionnent sans erreur.
TODO : Après avoir corrigé les erreurs. Changez la couleur de Duvel en clair au lieu de blond et imprimez également cette nouvelle couleur à l'écran
 après toutes les autres choses déjà imprimées (pour être sûr que la couleur a bien changé).
TODO : Créez une nouvelle méthode privée dans la classe Bière appelée beerInfo qui renvoie 
"Bonjour, je suis Duvel, j'ai un pourcentage d'alcool de 8,5 
et j'ai une couleur claire".

Veillez à utiliser les variables et pas seulement cette ligne de texte.

TODO : Imprimez cette méthode à l'écran sur une nouvelle ligne.

UTILISEZ LA TYPOGRAPHIE PARTOUT !
*/