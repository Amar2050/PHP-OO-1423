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


// $ballonFoot = new stdClass();
// $ballonFoot->type = "Football";

// var_dump($ballonFoot);


// ------------- SYNTAXE OBJECT OPERATOR -----------

// $ballonFoot = new stdClass(); // j'instancie un objet a partir de la class STDCLASS

// $ballonFoot->type="Football"; // je lui assigne un attribut "type" qui prend la valeur "Football"
// $ballonFoot->marque="Nike"; // je lui assigne une propriété "marque" qui prend la valeur "Nike"
// $ballonFoot->taille= 5;     
// $ballonFoot->status="crevé";


// // echo $ballonFoot; génére une erreur normal objet =! string

// // var_dump($ballonFoot); on a bien nos props !

// echo " - Hey le ballon de $ballonFoot->type , $ballonFoot->marque est $ballonFoot->status Ismaël ! 
//         <br>
//        - C'est un taille $ballonFoot->taille c'est ça Issac ?";