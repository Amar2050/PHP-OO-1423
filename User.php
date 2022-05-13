<?php
session_start();

var_dump($_SESSION);
class User {

    public $name; // Michel // ZAk // Samy // Laurent // 
    public $age; // 45 65 85 4 48 33 55 
    public $avatar;

    function choixAvatar($choice){
        $avatars = ["😎","😴","🤯","🤬"];
        return $this->avatar = $avatars[$choice];
    }

    function tchater($message){
        echo "<p> - $this->avatar | $this->name : $message </p>";
    }

    function vieillir($nbrAnnees){
    
        if(($nbrAnnees + $this->age)>105) {
            echo " Wow ! à ". ($this->age + $nbrAnnees) ." ans, désolé mais il est temps de passer ton tour et de lacher l'affaire l'ami ".$this->name." !<br>";
        }else{
            echo " ça va ! à ". ($this->age + $nbrAnnees) ." ans, tu as encore du temps devant toi ".$this->name." !<br>";
        }

    }

    
}


// -------- Creation de data 

$michel = new User();
$michel->name = "Michoux";
$michel->age = 77;
$michel->choixAvatar(1);

// echo $michel->avatar;


$michel->tchater("il est pas si difficile quand c'est la correction !");

$brahim = new User();
$brahim->name = "Brahim";
$brahim->age = 34;
$brahim->choixAvatar(0);

$brahim->tchater("c'est ça qui est enervant !");

$zak = new User();
$zak->name = "Zak";
$zak->age = 34;
$zak->choixAvatar(2);

$zak->tchater("On est pas là pour enfiler des perles !");

$zak->vieillir(25);



function calcul($nb, $nb2){

    return $nb + $nb2;
    echo "otot";
}


  $resultat = calcul(15,5);


//  echo "toti;";