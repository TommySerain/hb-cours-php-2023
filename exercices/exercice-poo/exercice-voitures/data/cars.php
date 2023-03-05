<!--
    - Réalisez une classe Car qui aura les attributs suivants :
    - name, engine, year, km
    - Réalisez un tableau de Car que vous déposerez dans un fichier PHP, puis un moteur de recherche pour chercher les voitures (par année ou par kilométrage)
    - Pour l'année dans le moteur de recherche, générez une liste "select" en fonction des années qui se trouvent dans le tableau de voitures
-->

<?php

require_once "Car.php";

$cars=[
new Car('r19', 'Diesel', '1992', '225000'),
new Car('Fiesta', 'Diesel', '2011', '17000'),
new Car('Mondeo', 'Essence', '2006', '80000'),
new Car('twnigo', 'Essence', '1989', '30000'),
new Car('F40', 'Essence', '1992', '15000'),
new Car('Samuel', 'Essence', '1989', '171427'),
new Car('Joshua', 'Essence', '1963', '200745'),
new Car('Jerry', 'Essence', '1994', '240834'),
new Car('Lelia', 'Essence', '1991', '189578'),
new Car('Clyde', 'Essence', '2011', '157663'),
new Car('Leon', 'Essence', '1978', '159070'),
new Car('Harriett', 'Essence', '1960', '104895'),
new Car('Isabelle', 'Essence', '2012', '208348'),
new Car('Eva', 'Essence', '1986', '172567'),
new Car('Mason', 'Essence', '1967', '229623'),
new Car('Agnes', 'Essence', '2020', '299077'),
new Car('Scott', 'Essence', '2012', '160033'),
new Car('Micheal', 'Essence', '1972', '142122'),
new Car('Lina', 'Essence', '2014', '121656'),
new Car('Victoria', 'Essence', '2012', '214619'),
];


$arrayYear=[];

foreach($cars as $car){
    $arrayYear[]=($car->getYear());
}



function getUniqueValueArray ($a){
    return array_unique($a);
}

