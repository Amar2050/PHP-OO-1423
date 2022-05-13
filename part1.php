<?php

  class User {

    private $firstname;  
    private $lastname;
    private $email;
    private $password;
    private $age;
   
    public function __construct($firstname,$lastname,$email,$password){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
    }

     function direHello(){
        echo "<p> $this->firstname </p>";
    }

    public function hello($pass){
        if ($pass == 1234 )
        $this->direHello();
        else
        echo "Accès refusé laborantin X";
    }

    public function getFirstName(){

        return $this->firstname;
        
    }

    public function setFirstName($firstname){
    
        $this->firstname = $firstname;

        return $this;

    }

    public function getLastname()
    {
        return $this->lastname;
    }

 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {

        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }
}


// ------ ENCAPSULATION - CAPSULE -- NIVEAU VISIBILITÉE - GETTER SETTER 

// NIVEAU VISIBILITÉE -->   PUBLIC PRIVATE PROTECTED 
// PUBLIC -->               OPEN BAR ACCECESSIBLE de partout  
// PRIVATE -->              UTILISABLE QUE DANS LA CLASS 
// PROTECTED -->            UTILISABLE QUE DANS LA CLASS 

// PRIVATE --> UNLOCK par le PUBLIC ---> GETTER SETTER 


// $michel = new User("Michél","Dupont","michoux@gmail.com","password");


// // echo $michel->firstname = "OKKKK";

// // $michel->hello(1584);

// echo mb_strlen($michel->getFirstName());

// $michel->setFirstName("Michelax");

// var_dump($michel);

//------------------------- HERITAGE ------------

//  class Mere {  // CLASS MERE EFFECTIVE
//     public $name="Maman";

//     public function direNom(){
//         echo "<p> $this->name</p>";
//     }

// }

// $mom = new Mere();

// $mom->direNom();

// $mom->name=12;

 abstract class Mere { 
    private $name="Maman";

    public function direNom(){
        echo "<p> $this->name</p>";
    }

}

class Fille extends Mere{
    public $name ="Fille";

    public function direNomMere(){
        $this->direNom();
    }
}

$fille = new Fille();

echo $fille->name; // 
$fille->direNomMere();
// var_dump($fille);


// $nugget1= new Chicken();
// unset($nugget);
// $nugget2= new Chicken();

// $test = "ceci est un treruc";

// var_dump($test);

// unset($test);
// session_start();
// $_SESSION // session ... 25min  // panier // formulaire // escape game // transporter des variables d'une page a une autre TANT QUE la session_start()




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