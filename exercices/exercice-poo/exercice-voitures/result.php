<?php

require_once "layout/header.php";
require_once "data/cars.php";

$searchYear = intval($_GET['Year']);
$searchKm = $_GET['Km'];

// contain
?>
<a class="text-center d-block" href="index.php?km=<?php echo $searchKm ?>">retour à la recherche</a>
<h1 class="text-center">Résultat de la recherche</h1>

<div class="container">
    <div class="row d-flex justify-content-center">
<?php

foreach($cars as $car){
    if($car->getYear()===$searchYear && $car->getKm()<=$searchKm){
        ?><div class="bg-warning p-5 m-5 col-4 border border-2 border-rounded"><?php
            echo $car->getName() . "<br>";
            echo $car->getEngine() . "<br>";
        ?>
        </div>
        <?php
    }
};
?>
</div>
</div>
<?php
// footer
require_once "layout/footer.php";