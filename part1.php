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

$b1 = new stdClass(); // j'instancie un objet a partir de la class STDCLASS

$b1->type="Football"; // je lui assigne un attribut "type" qui prend la valeur "Football"
$b1->marque="Nike"; // je lui assigne une propriété "marque" qui prend la valeur "Nike"
$b1->taille= 5;     
$b1->status="crevé";


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
//     function lancer($distance = 7){
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
// $ballonRugby->lancer();


//-------------------- CLASS USER


class User {

    public $nom;
    public $age;

    function tchater($message){
        echo " - " . $message . "<br>";
    }

}




