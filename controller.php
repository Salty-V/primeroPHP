<!-- Le controleur : Personne qui organise la fête, prépare la liste des invités, ajuste les détails (ex : noms des participants, l'âge, place de parking attribuée, etc) -->

<?php 

require_once('../config/config.php');

$orders = [
    [
        "id" => 1,
        "customer" => "Maurice",
        "amount" => 200,
        "products" => [
            "Aspirateur",
            "Tomate"
        ],
        "date" => "22-05-24"
    ],
    [
        "id" => 2,
        "customer" => "Jacques",
        "amount" => 120,
        "products" => [
            "Machine à café",
            "Petit Marseillais"
        ],
        "date" => "13-05-24"
    ],
    [
        "id" => 3,
        "customer" => "Herbert",
        "amount" => 110,
        "products" => [
            "Endives",
            "Saumon"
        ],
        "date" => "27-06-24"
    ],
    [
        "id" => 4,
        "customer" => "Flavien",
        "amount" => 330,
        "products" => [
            "Melon",
            "Pommes"
        ],
        "date" => "13-06-24"
    ],
    [
        "id" => 5,
        "customer" => "Harry",
        "amount" => 333,
        "products" => [
            "Courgette",
            "Tome de savoie"
        ],
        "date" => "14-06-24"
    ],
    [
        "id" => 6,
        "customer" => "Opale",
        "amount" => 153,
        "products" => [
            "Prise anti-moustiques",
            "Framboises"
        ],
        "date" => "09-06-24"
    ],
    [
        "id" => 7,
        "customer" => "Georges",
        "amount" => 93,
        "products" => [
            "Artichaut",
            "Pois chiches"
        ],
        "date" => "18-06-24"
    ],
    [
        "id" => 8,
        "customer" => "Freud",
        "amount" => 73,
        "products" => [
            "Champignons",
            "Cordons bleus"
        ],
        "date" => "02-07-24"
    ],
];


// Première fonction pour reformater la date
function adaptDateFormat($date) {
    $dateTime = DateTime::createWithFormat('dd-mm-yy', $date);
    return $dateTime->format('yy/mm/dd');
}

// Deuxième partie de la fonction pour permettre de reformater la date de caque commande (maybe présentes et à venir?)

foreach ($orders as &$order) {
    $order['date'] = adaptDateFormat($order['date']);
}

// Inclure la vue pour afficher les commandes 

// /!/ ATTENTION : vérifier que le chemin est correct car pas prise en compte de l'architecture dossier avec un propre fichier views
include 'view.php';
?>


<!-- Les différentes étapes pour arriver à ce résultat : 

    1. Définir les commandes : dans le fichier 'controller.php', les commandes sont définies sous forme de tableau php 
    2.1 Formater la date : Création d'une fonction appellée "adaptDateFormat" pour basculer d'un format 'dd-mm-yy' à un format "yy/mm/dd"
    2.2 Reformater les dates des commandes  : grâce à 'foreach' on parcourt chaque commande et on lui applique la fonction qu'on vient de créer pour changer le format initial de la date 
    3. Inclure la vue : Inclure le fichier "view.php" pour afficher les commandes
    4. Afficher les commandes : On créé un tableau en html dans le fichier "view.php" auquel on ajoute du php pour parcourir chaque commande et afficher les infos associées -->