<?php

// CLASS ET OBJETS



// function printArray($arg){
//     echo '<pre';
//     print_r($arg);
//     echo "</pre>";
// }

// Conversion d'un tableau en objet


// $tab['couleur'] = "bleu";
// $tab['type'] = "plume";
// $tab['prix'] = 5;

// var_dump($tab);
// //--- CONVERSION !

// $stylo = (object) $tab;
// $stylo2 = (object) $tab;




// // printArray($tab);


// var_dump($stylo);
// var_dump($stylo2);


// ---------------- INSTANCIATION ------------


// $b1 = new stdClass();
// $b1->type = "Football";

// var_dump($b1);


// ------------- SYNTAXE OBJECT OPERATOR -----------

// $b1 = new stdClass(); // j'instancie un objet a partir de la class STDCLASS

// $b1->type="Football"; // je lui assigne un attribut "type" qui prend la valeur "Football"
// $b1->marque="Nike"; // je lui assigne une propriété "marque" qui prend la valeur "Nike"
// $b1->taille= 5;     
// $b1->status="crevé";


// // echo $b1; génére une erreur normal objet =! string

// // var_dump($b1); on a bien nos props !

// echo " - Hey le ballon de $b1->type , $b1->marque est $b1->status Ismaël ! 
//         <br>
//        - C'est un taille $b1->taille c'est ça Issac ?";


//------------ Fonctions OBJETS


// property_exists($obj , "maProps"); method_exists($obj , "maMethod") renvoie true ou false;


// var_dump( property_exists($b1, "prix") );


// MINI EXO avec property_exists() 

// GOUDE  aka Les Goudes ! ou as Viking

// if (!property_exists($b1,'prix')) {

//     $b1->prix=5;
//     echo "Le ballon coute $b1->prix";

// }

// ------------ PHP OO activated ----------------


// var_dump( get_declared_classes() ); quelques class en OO ....

// ---------------- Notre 1er CLASS


// class Ballon {
    
//     public $marque;
//     public $sport;

//     function lancer(){
//         echo "Vous avez lancé le ballon ! <br>";
//     }

// }

// // On instancie 2 types de ballons


// //----------Ballon de Foot -----------
// $b1= new Ballon(); // Instanciation
// $b1->marque = "Nike"; // on assigne à la props une valeur...
// $b1->sport = "football";
// // $b1->prix = 12; // ça marche ok intéret à voir 
//                   //  plus tard

// // var_dump($b1); // 
// //----------Ballon de Rugby -----------
// $ballonRugby= new Ballon(); // Instanciation
// // $ballonRugby->marque = "Gilbert TM";
// // $ballonRugby->sport = "rugby";
// // var_dump($ballonRugby);
// // ------- ACTION sur les objets

// echo "Sport: $b1->sport  <br> Marque: $b1->marque";
// echo "<br>";
// $b1->lancer();


// echo "<br><br><hr>";

// echo "Sport: $ballonRugby->sport  <br> Marque: $ballonRugby->marque";
// echo "<br>";
// $ballonRugby->lancer();


// // -------------- V2 Ballon parametre à une méthode !


// class Ballon {
    
//     public $marque;
//     public $sport;

//     // on peut mettre null pour eviter le bug de sans param
//     // ou on peut déclarer une distance mini
//    
//     function lancer($distance){
//         echo "Vous avez lancé le ballon à  $distance métres  ! <br>";
//     }

// }

// // On instancie 2 types de ballons


// //----------Ballon de Foot -----------
// $b1= new Ballon(); // Instanciation
// $b1->marque = "Nike"; // on assigne à la props une valeur...
// $b1->sport = "football";
// //----------Ballon de Rugby -----------
// $ballonRugby= new Ballon(); // Instanciation
// $ballonRugby->marque = "Gilbert TM";
// $ballonRugby->sport = "rugby";
// // ------- ACTION sur les objets

// echo "Sport: $b1->sport  <br> Marque: $b1->marque";
// echo "<br>";
// $b1->lancer(20);


// echo "<br><br><hr>";

// echo "Sport: $ballonRugby->sport  <br> Marque: $ballonRugby->marque";
// echo "<br>";
// $ballonRugby->lancer(70);



// ---------------- CLASS USER V0 ----------------

// class User {
//     public $name;
//     public $age;

//     function tchater($message){
//         echo "<p> - $message</p>"; // on a remplacer le echo par return
//     }
// }


// $michel = new User();

// $michel->name = "Michel";
// $michel->age = 49;


// $michel->tchater(" $michel->name : Salut salut !"); // ici un echo car la méthode return


// class Impot{
//     public $CA;
  

//     function calcule($CA){
//         $x = $CA*0.2;
//        echo "vous payerais $x € d'urssaf" ;
//     }
// }
// $impot = new Impot();
// $impot->calcule(1000);
// // $impot->CA = 1000;


// class Charachters {
//     public $type;
//     public $ptLife;
//     public $specialPower;
//     public $specialDommage;

//     function attaquer($attaqueType, $dommage, $life) {
//         echo "l'attaque ". $attaqueType." est lancée et inflige ". $dommage ." dégats!! <br>";
//         $resteLife = $life - $dommage;
//         echo "il reste ". $resteLife  ." points de vie <br>";
//     }

// }

// $gandalf = new Charachters();
// $gandalf->name="Gandalf";
// $gandalf->type="Magicien";
// $gandalf->ptLife=300;
// $gandalf->specialPower="Poudre de perlinpinpin";
// $gandalf->specialDommage= 250;

// $thor = new Charachters();
// $thor->type="Guerrier";
// $thor->name="Thor";
// $thor->ptLife=500;
// $thor->specialPower="Foudre impitoyable";
// $thor->specialDommage= 150;

// echo $gandalf->name. " attaque ". $thor->name ."<br>".$gandalf->attaquer($gandalf->specialPower, $gandalf->specialDommage, $thor->ptLife);


// $macaron=  new user();

// $macaron->name = "la duree";
// $macaron->qualite = "excellent";

// $text = $macaron->tchater("les macarons $macaron->name : sont tres bon");

// echo $macaron->tchater("les macarons $macaron->name, sont tres bons");


// class car {

//     public $marque;
//     public $proprietaire;
//     public $status;

//     function demarer($message){
//         echo " $message ";
//     }

// };

// $a = new car();

// $a->marque = "ford";
// $a->proprietaire= "Sam";

// $a->demarer($a->proprietaire ." a demarer sa " .$a->marque);


// class Personnage {
//     public string $name;
//     public int $hp;
//     public int $mp;
//     public string $classe;

//     function construct($message){
//         echo "<p> Salut ! Tu as bien fait de me choisir ! $message </p>";
//     }
// }

// $legolas = new Personnage();

// $legolas->name ="Legolas";
// $legolas->hp = 20;
// $legolas->mp = 12;
// $legolas->classe = "archer";

// $legolas->construct("Je suis $legolas->name, ton nouveau personnage, j'ai $legolas->hp HP et $legolas->mp MP,<br> je suis un $legolas->classe et donc je suis parfait pour faire des dégats de loin, allons dérouiller des Orcs et des Gobelins ! ");

// $aragorn = new Personnage();

// $aragorn->name = "Aragorn";
// $aragorn->hp = 28;
// $aragorn->mp = 10;
// $aragorn->classe = "guerrier";

// $aragorn->construct("Je suis $aragorn->name, je suis le meilleur $aragorn->classe de la Terre du milieu car je suis le Roi du Gondor (logique.), j'ai $aragorn->hp HP et $aragorn->mp MP donc tu peux compter sur moi pour faire une boucherie !");


// class Parcours {
//     public $temps;
//     public $vitesse;

//     function KmParcouru () {
//         $x = $this->temps*$this->vitesse;
//         echo "<p> - la distance parcourue est de $x </p>";
//     }

// }

// $trajet1 = new Parcours();

// $trajet1->temps = 2;
// $trajet1->vitesse = 50;

// $trajet1->KmParcouru($trajet1->temps,$trajet1->vitesse);

// var_dump($trajet1);



// class Viennoiserie {
//     public $name;   
//     public $chocolat;
    
//     function tQuoi($type) {
//        if($type){
//        echo"T'es une bonne chocolaTINE ! <br>";
//         }else{
//         echo"t'es un pain au chocolat ... beurk...";
//         }
//     }
// }

// $chocolatine = new Viennoiserie();
// $chocolatine->name="chocolatine";
// $chocolatine->chocolat=true;

// $pain = new Viennoiserie();
// $pain->name="pain";
// $pain->chocolat=false;

// $chocolatine->tQuoi($chocolatine->chocolat);
// $pain->tQuoi($pain->chocolat);

//  this POO 
// class Facture {

//     public $taux = 45;
//     public $client;
//     public $montant;


//     function afficherTaux(){
//         echo " <p>Taux: " . $this->taux ."%  </p>";
//     }

//     function afficherClient(){
//         echo "Client: $this->client  <br>";
//     }

//     function truc(){

//     }

//     function detailsObjet(){
//         var_dump($this); 
//     }

// } // ---> 

// NIVEAU 1 --------> MANIPULER L'objet depuis l'intérieur de la class
// NIVEAU 2 --------> $this EST l'objet !


// NIVEAU 4 ---> 


// PROFIL PSY !!!  PROBLEM SOLVING ! 


// Lvl 2    | 

// LVL 12   | 



// // -------------- WebForce3
// $fev= new Facture(); // Moule Facture
// $fev->client = "WebForce3";
// $fev->taux = 24;
// $fev->montant = 2500;
// $fev->afficherClient();
// $fev->afficherTaux();
// $fev->detailsObjet();

// var_dump($fev);

// // var_dump($fev);
// echo "<hr>";

// // ----------- Soros
// $mai = new Facture();
// $mai->client = "George Soros";
// $mai->montant = 450000;
// $mai->afficherTaux();
// $mai->afficherClient();
// $mai->detailsObjet();

// // -------------- STAND By ---
// class Immobilier {

//     public $nom;
//     public $prix;
//     public $surface;

//     function calculPrix(){
//         $this->prix * $this->surface;
//     }


// }

// $bien1 = new Immobilier();

// // PDO 
// $apparts = $db->fetchAll();

// $bien->prix($apparts[0]['prix']);


// class Car {

//     public $name;
//     public $marque;

//     function infoCarName(){
//         echo $this->name . "<br>" . $this->marque;
//     }

//     function truc(){
//         $this->infoCarName();
//     }

// }

// $voiture1 = new Car();
// $voiture1->name = "2CV";
// $voiture1->marque = "Citroën";

// $voiture2 = new Car();
// $voiture2->name = "Golf 7 R32";
// $voiture2->marque = "VW";

// $voiture3 = new Car();
// $voiture3->name = "6.3 AMG";
// $voiture3->marque = "Mercedes";

// // echo $voiture1->name . "<br>" . $voiture1->marque;

// $voiture2->truc();

// var_dump($voiture1);

// var_dump($voiture2);

// var_dump($voiture3);



class Produit {

    public $name;
    public $brut;
    public $tvaNormal = 1.20;
    public $tvaNormalSuisse = 1.07;
    public $tvaIntermédiaire  = 1.10;
    public $tvaReduit = 1.05;

    function prixTTCNormal($pays){
        if ($pays == "fr") {
            return $this->brut  * $this->tvaNormal ;
        }else if($pays == "ch") {
            return $this->brut  * $this->tvaNormalSuisse ;
        }else {
            echo "Désolé...demande à ta grand mère !";
        }
    }

    function prixTTCIntermediaireFr(){
        return $this->brut  * $this->tvaIntermédiaire ;
    }


    /**
     * Résumer du produit
     *
     * @param string "fr" ou "ch"
     * @return string
     */
    function resume($pays){
        echo "Nom du produit: " . $this->name ."<br>";
        if ($pays == "fr") {
           echo " <br> Prix français: ". $this->prixTTCNormal($pays) ."&euro; <br>";
           echo "Prix français intermédiaire: " . $this->prixTTCIntermediaireFr() ." € <br>";
        } else {
            echo "<br> Prix suisse: ".  $this->prixTTCNormal("ch") . "&euro;";
        }

        
        
    }



}

$product = new Produit();

$product->name = "Samsung G9 Odyssey";
$product->brut = 1000;

$prixTTCFR = $product->prixTTCNormal("fr");

// var_dump($prixTTCFR);

$product->resume("fr");



