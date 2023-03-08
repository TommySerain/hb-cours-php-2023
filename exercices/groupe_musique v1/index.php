<!-- 
    Réalisez une page qui charge tous les groupes du fichier "bands.txt" dans des objets adaptés à leur format.
    Si vous le souhaitez, chargez également la liste des styles dans des objets appropriés, puis associez un style à un groupe.
Enfin, sur la page, affichez l'ensemble des groupes chargés.
-->

<?php
require_once __DIR__."/layout/header.php";
require_once __DIR__."/classes/Groupe.php";
require_once __DIR__."/classes/GroupesDb.php";

// $fileName= "./bands.txt";
// $groupesFile = fopen($fileName, 'r');
// $read = fread($groupesFile,filesize($fileName));

// fclose($groupesFile);
// $groupesTab = explode(PHP_EOL, $read);

// $tabGroupes=[];
// foreach ($groupesTab as $groupeTab){
//     $tabGroupes []=explode(",",$groupeTab);
// }
$groupes= new GroupesDb();
        // var_dump($groupes);
        foreach ($groupes as $groupe){
            // var_dump($groupe);
        }

        foreach ($groupe as $test){
            $id=$test[0];
            $name=$test[1];
            $date=$test[2];
            $styleId=$test[3];
            
            var_dump($test);
            [$id, $name, $date, $styleId]=$test;
            // var_dump(intval($id));
            var_dump($name);
            var_dump (intval($date));
            // var_dump(intval($styleId));
        }


require_once __DIR__."/layout/footer.php";