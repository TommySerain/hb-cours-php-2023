<!-- 
- Créez une classe User qui contiendra un nom, un prénom, un attribut banned booléen et un âge (valeur entière).Si vous voulez, remplacez l'âge par un attribut birthDate de type DateTime issu de la SPL (https://www.php.net/manual/en/class.datetime).
Vous respecterez le principe d'encapsulation pour les attributs de cette classe.
Le constructeur prendra trois paramètres : un nom et un prénom et un âge (ou une date de naissance). L'attribut banned sera à false par défaut
- Créez dans cette classe une méthode fullName qui renverra le nom complet de l'utilisateur, soit : nom et prénom séparés par un espace
- Créez une autre méthode hasLegalAge renvoyant true uniquement si l'utilisateur est majeur
- Créez, en-dehors de la classe User, une fonction ban qui prendra en paramètre un User et permettra de passer son attribut banned à true
- Toujours en-dehors de la classe User, créez un tableau d'objets User. Itérez sur ce tableau pour afficher les noms complets de chacun de ces utilisateurs avec leur méthode fullName, et indiquez pour chacun d'eux s'ils sont majeurs ou non avec la méthode hasLegalAge

-->




<?php
class User
{
    private string $name;
    private string $firstname;
    private int $age;
    private bool $banned;
    public const LEGAL_AGE_FR = 18;

    // contructor
    public function __construct (string $name, string $firstname, $age){
        $this->name = $name;
        $this->firstname = $firstname;
        $this->age = $age;
        $this->banned = false;
    }


    // encapsulation
    // getter name
    public function getName(): string
    {
        return $this->name;
    }
    // getter firstname
    public function getFirstName(): string
    {
        return $this->firstname;
    }
    // getter age
    public function getAge(): INT
    {
        return $this->age;
    }
    // getter banned
    public function getBanned():bool
    {
        return $this->banned;
    }
    // setter name
    public function setName(string $name): void
    {
        if ($name !== '') {
        $this->name = $name;
        }
    }
    // setter firstname
    public function setFirstName(string $firstname): void
    {
        if ($firstname !== '') {
        $this->firstname = $firstname;
        }
    }
    // setter age
    public function setAge (int $age):void
    {
        if ($age!== "") {
            $this->age = $age;
        }
    }
    // setter banned
    public function setBanned(bool $banned):void
    {
        $this->banned = $banned;
    }
    


    // méthode full name
    public function getFullName(): string{
        return $this->firstname . ' ' . $this->name;
    }

    // méthode age
    public function hasLegalAge(): bool
    {
        return $this->age >= self::LEGAL_AGE_FR; //puisque on met un opérateur de compraison (>=) alors on aura un retour vrai ou faux donc on n'a pas besoin d'écrire un if

        // if ($this->age>= self::LEGAL_AGE_FR){
        //     return true;
        // }
        // return false;
    }
}
// fin classe

    function Ban(User $user): void
    {
        $user->setBanned(true);
    }

    // $user1= new User('Belmondo', 'Jean', 25);
    // $user1->setBanned(true);
    // $user1->setAge(15);

    // echo $user1->getFullName() . "<br>";
    // echo $user1->getAge() . "<br>";
    // echo ban($user1). "<br>";
    // echo $user1->hasLegalAge(). "<br>";

    // $user2 = new User('Tommy', 'Serain', 36);
    // echo $user2->getFullName() . "<br>";
    // echo $user2->getAge() . "<br>";
    // echo ban($user2). "<br>";
    // echo $user2->hasLegalAge(). "<br>";

    $users=[
            new User('Cyclette', 'Bobby', 25),
            new User('Merope', 'Jane', 15),
        ];
// var_dump($users);
foreach($users as $user){
        echo $user->getFullName();
        if($user->hasLegalAge()){
            echo ' est majeur';
        }else{
            echo ' est mineur';
        }
    echo "<br>";
}

