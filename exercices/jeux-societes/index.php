<?php
require_once __DIR__."/classes/GamesDb.php";
require_once __DIR__."/layout/header.php";
$games= new GamesDb;
// var_dump($games);
?>
<section class="container-fluid">
<div class="row">

<?php
foreach ($games->getGames() as $game) {?>
    <div class="col-3 p-0">
        <div class="border border-2 border-danger m-4">
            <img class="imgJeux w-100 m-0" src="<?php echo $game->getPicture() ;?>" alt="">
        </div>
    </div>
<?php }?>

</div>
</section>

<?php
require_once __DIR__."/layout/footer.php";