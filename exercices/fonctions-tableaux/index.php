<!-- 
Réaliser une fonction qui insère un élément dans un tableau. On fournira à la fonction le tableau dans lequel insérer l'élément, l'élément en question, et la position (l'index).
Par exemple, si j'ai le tableau [1, 2, 3] et que je veux insérer l'élément 4 à l'index 2, je me retrouverai avec [1, 2, 4, 3].
Bien sûr les index sont toujours positifs. On ne travaillera qu'avec des index numériques.
Si on fournit un index plus grand que la taille du tableau, alors on proposera 2 implémentations différentes : la première renverra une erreur car l'index est en-dehors des limites, la seconde agrandira le tableau avec des éléments vides jusqu'à insérer l'élément voulu.
-->

<?php
require_once __DIR__ ."/layout/header.php";
require_once __DIR__ ."/data/elements.php";

// version erreur si trop grand

// function addElementInArray(array $tableau, int $index, int $value):array
// {
//     if($index>count($tableau)){
//         echo "hors limite";
//         exit;
//     }
//     array_splice($tableau, $index, 0, $value);
//     return $tableau;
// }

// $elements=addElementInArray($elements, 3, 6);
// var_dump($elements);


// version aggrandir le tableau si trop grand



function addElementInArray(array $tableau, int $index,int $value) :array{
    $tableauLength=count($tableau);
    $countNull=$index-$tableauLength;
    if($index<$tableauLength){
        array_splice($tableau, $index, 0, $value);
    return $tableau;
    }

    $nullFilledTableau = array_fill($tableauLength,$countNull,NULL);
    // $tableau+=$nullFilledTableau;
    // $tableau[]=$value;
    // return $tableau;
    return [...$tableau, ...$nullFilledTableau, $value];
};

$elements=addElementInArray($elements, 18, 1);
var_dump($elements);

require_once __DIR__ ."/layout/footer.php";