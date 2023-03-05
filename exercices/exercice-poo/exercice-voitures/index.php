<!--
    - Réalisez une classe Car qui aura les attributs suivants :
    - name, engine, year, km
    - Réalisez un tableau de Car que vous déposerez dans un fichier PHP, puis un moteur de recherche pour chercher les voitures (par année ou par kilométrage)
    - Pour l'année dans le moteur de recherche, générez une liste "select" en fonction des années qui se trouvent dans le tableau de voitures
-->

<?php

require_once "./data/cars.php";
// var_dump($cars);

require_once "layout/header.php";
sort($arrayYear);
?>

    <h1 class="text-center">Moteur de recherche Voitures</h1>
    <form action="result.php" method="GET" class="col-8 mx-auto d-flex flex-column">
    <input type="number" value="<?php echo $_GET['km'] ?? ''; ?>" class="form-control mb-5" placeholder="nombre de Kilomètre maximum" name="Km" aria-label="Km" aria-describedby="basic-addon1">
    <div>
        <select class="form-control mb-5" name="Year" id="">
            <?php foreach (getUniqueValueArray($arrayYear) as $uniqueYears){ ?>
            <option value="<?php echo $uniqueYears ;?>"> <?php echo $uniqueYears ;?>
            </option>
            <?php 
        }; ?>
        </select>
    </div>
    <input class="btn btn-warning" type="submit" value="Rehcercher">
    </form>

<?php
    // footer
require_once "layout/footer.php";

