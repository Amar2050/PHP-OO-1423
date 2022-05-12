<?php
class Verre 
{
    public $nom;
    public $materiaux;
    public $contenu;
    public $poids;
    public $couleur;

    function __construct($nom, $materiaux, $contenu)
    {

        //se déclenche sur l'instanciain de l'objet 
        // echo "<p> Création de l'objet <p>"; 

        $this->nom = $nom;
        $this->materiaux = $materiaux;
        $this->contenu = $contenu;
        echo "<p> Création de l'objet $this->nom<p>"; 
    }

}

$gobelet = new Verre("Gobelet", "Plastique", "Eau");

$gobelet->couleur = "blanc";

var_dump($gobelet);

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