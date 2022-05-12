<?php

class Database {

    public $bdd; // Online une fois new Database();
    public $myGames; // full une fois $this->fetchAll()

    function __construct(){ 
        $this->bdd = new PDO('mysql:host=localhost;dbname=jeux_projet', "root", "");
    }

    function statusBDD(){
        var_dump($this->bdd->getAttribute(PDO::ATTR_CONNECTION_STATUS));
    }

    function fetchAll(){
        $req = $this->bdd->prepare("SELECT * FROM jeux_video ");
        $req->execute();
        $this->myGames = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        
    }

    function read(){ 
        $this->fetchAll(); // pour récupérer les datas quand on veut les lire !
        echo "<ul>";
        foreach($this->myGames as $game){
            echo "<li>" .$game["nom"] . " </li>";
        }
        echo "</ul>";

    }



}

$db = new Database(); // grace à __construct connexion à la bdd

// var_dump($db->myGames); // TEST 1 rien à ce moment normal !

$db->statusBDD(); // comme on est connecté $bdd la props de l'objet $db contient notre Objet PDO et donc la connexion à la BDD 

$db->fetchAll(); // envoi une req avec l'ensemble de data

// var_dump($db->myGames); // TEST 2 maintenant on à charger la props $mygames


echo $db->myGames[5]["nom"]; // Par exemple !

// class Verre 
// {
//     public $nom;
//     public $materiaux;
//     public $contenu;
//     public $poids;
//     public $couleur;

//     function __construct($nom, $materiaux, $contenu)
//     {

//         //se déclenche sur l'instanciain de l'objet 
//         // echo "<p> Création de l'objet <p>"; 

//         $this->nom = $nom;
//         $this->materiaux = $materiaux;
//         $this->contenu = $contenu;
//         echo "<p> Création de l'objet $this->nom<p>"; 
//     }

// }

// $gobelet = new Verre("Gobelet", "Plastique", "Eau");

// $gobelet->couleur = "blanc";

// var_dump($gobelet);

// NIVEAU 1 CONSTRUCT je l'utilise pour construire un objet 
// NIVEAu 2 se déclenche à l'instanciation d'un objet 
// NIVEAU 3 la méthode magique __construct peut avoir ou NON des parametres
// NIVEAU 4 une class peut avoir ou NON un constructeur 


// class Verre 
// {
//     public $nom;
//     public $materiaux;
//     public $contenu;

//     function builder($nom, $materiaux, $contenu)
//     {

//         // se déclenche sur l'instanciain de l'objet 
//         // echo "<p> Création de l'objet <p>"; 

//         $this->nom = $nom;
//         $this->materiaux = $materiaux;
//         $this->contenu = $contenu;
//     }

// }
// $gobelet = new Verre();
// $gobelet->builder("Gobelet", "Plastique", "Eau");

// $mug = new Verre(); 
// $mug->builder("Mug", "Métal", "Slug");

// var_dump($mug);
// var_dump($gobelet);

// $mug->nom ="Mug"; 
// $mug->materiaux ="Métal"; 
// $mug->contenu = "Lait"; 
// echo $gobelet;



// function direHello($prenom){
//     echo "Bonjour ! $prenom";
// }

// direHello();