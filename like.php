<?php
$title = 'Favoris | Tork Motorcycle';
require_once('views/header.php');
require_once('defines.php');

session_start();
//$_SESSION=array();
var_dump($_SESSION);

// Création du panier s'il n'existe pas
if (!array_key_exists('like', $_SESSION)) {
    $_SESSION['like'] = array();
}

// Création d'une référence
$like =& $_SESSION['like']; //$like fait référence à $_SESSION['like']
var_dump($like); // Contenu du panier
var_dump($_POST);


?>

<main id="like">

</main>

<?php
require_once('views/footer.php');
?>