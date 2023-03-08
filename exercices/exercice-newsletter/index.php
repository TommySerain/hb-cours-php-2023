<!-- 
Réaliser un petit système de newsletter :
- Une page contenant un formulaire où renseigner son adresse mail
- Dans la cible du formulaire, écrire dans un fichier l'adresse email renseignée. Ouvrir et lire le fichier au préalable pour s'assurer que l'adresse email n'a pas déjà été enregistrée (doublon)
- Une fois cette fonctionnalité réalisée, développer un système qui détecte si l'adresse email est un spam ou non (voir le cours chapitre POO/Constantes de classe

https://ld-web.github.io/hb-php-2023-course/poo#constantes-de-classe)
https://www.php.net/manual/en/function.fopen
https://www.php.net/manual/en/function.fwrite.php
https://www.php.net/manual/en/function.fclose.php
https://www.php.net/manual/en/function.fread.php
https://www.php.net/manual/en/function.file-put-contents.php
https://www.php.net/manual/en/function.readfile.php
-->


<?php



$fp = fopen('data/bdd-mail.txt', 'r+');
$address = [];
$mail = $_POST['mail'];
    fwrite($fp, $mail .PHP_EOL);
    fclose($fp);
    // fclose('data/bdd-mail.txt');



var_dump($mail);
var_dump($_POST);
var_dump($address);

require_once __DIR__."/layout/header.php";
?>
<form action="" method="POST">
<input type="email" name="mail" id="mail">
<input type="submit" value="inscription">
</form>


<?php
require_once __DIR__."/layout/footer.php";