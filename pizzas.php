<?php

// 1. On commence par déclarer une nouvelle classe, ici "Pizza"
// 1.2 Et dans cette classe on définit/déclare les propriétés privées associées  
class Pizza {
    private $size;
    private $price;
    private $base;
    private $ingredient1; 
    private $ingredient2;
    private $ingredient3;
    private $status; 
    private $orderedAt;
}

// 2.1 On créé une fonction constructeur qui va nous permettre d'initialiser les propriétés déclarées dans la classe du dessus
// on créer une fonction en public sinon on ne peut pas y accéder, elle sera introuvable, c'est pourquoi on la met en public 
public function __construct($size, $price, $base, $ingredient1, $ingredient2, $ingredient3, $status ="reçue") {
    $this->size = $size; 
    $this->price = $price; 
    $this->base = $base; 
    $this->ingredient1 = $ingredient1;
    $this->ingredient2 = $ingredient2;
    $this->ingredient3 = $ingredient3;
    $this->status = $status;
    $this->orderedAt = new DateTime("NEW"); 
    //2.2 On utilise la classe DateTime pour afficher l'heure ou le client passe la commande, l'utilisation de new permet l'instanciation à chaque fois d'un nouvel objet DateTime dès qu'on créé une nouvelle pizza
    // Nouvelle pizza === nouvelle instance 
} 

//3. Méthode pay() : cette méthode va vérifier si le statut de la commande est "payé" dans ce cas elle passe à "en cours"
public function pay() {
    if ($this->status === "payé") {
        $this->status = "en cours";
    } else {
        echo "Pas de faff pas de pizza "
    }
}

//4. Méthode ship() : cette méthode va vérifier si le statut de la commande est "payé" dans ce cas elle passe à "livrée"
public function ship() {
    if($this->status == "payé") {
        $this->status = "livré";
    }
}

//5. Méthode getStatus() 
public function getStatus() {
    return $this->status;
}

// 6. Constantes et méthode getPriceBySize()

// const SIZE_SMALL = 'S';
// const SIZE_MEDIUM = 'M';
// const SIZE_LARGE = 'L';
// const PRICE_SMALL = 8.00;
// const PRICE_MEDIUM = 10.00;
// const PRICE_LARGE = 12.00;

// public function getPriceBySize()

?>

<?php 
require 'Pizza.php'

// Créer une nouvelle pizza 
$pizzaNueva = new Pizza ("Large", 16, "Tomate", "Champ", "Olives", "Oeufs" )
$pizzaNueva->pay();
$pizzaNueva->ship();

?>