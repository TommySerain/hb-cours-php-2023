<!-- 
    Réalisez une page qui charge tous les groupes du fichier "bands.txt" dans des objets adaptés à leur format.
    Si vous le souhaitez, chargez également la liste des styles dans des objets appropriés, puis associez un style à un groupe.
Enfin, sur la page, affichez l'ensemble des groupes chargés.
-->

<?php
require_once __DIR__."/layout/header.php";
require_once __DIR__."/classes/BandsDb.php";
require_once __DIR__."/classes/Band.php";

$band=new Band(1);
// var_dump($band->getId());
// var_dump ($band);


// var_dump($band->setId(2));

// var_dump($band);


require_once __DIR__."/layout/footer.php";