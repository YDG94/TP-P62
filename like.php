<?php
$title = 'Favoris | Tork Motorcycle';
require_once('views/header.php');
require_once('defines.php');

session_start();
//$_SESSION=array();
//var_dump($_SESSION);

// Création du panier s'il n'existe pas
if (!array_key_exists('like', $_SESSION)) {
    $_SESSION['like'] = array();
}

// Création d'une référence
$like =& $_SESSION['like']; //$like fait référence à $_SESSION['like']
//var_dump($like); // Contenu du panier
//var_dump($_POST); // Données POST de Détail
if (array_key_exists('like', $_POST)) {
    $_POST['like'];
    if (!array_key_exists($_POST['like'], $like)) {
        $like[$_POST['like']] = 1;
    } else {
        unset($like[$_POST['like']]);
    }
}


?>

    <main id="like">
        <h1>Vos Favoris</h1>
        <ul>
            <?php foreach ($like as $id => $dummy) {
                $bike = $motos[$id];
                ?>
                <li>
                    <h3><?= $bike[BIKE_NAME] ?></h3>
                    <img src="<?= $bike[BIKE_IMG] ?>" alt="<?= $bike[BIKE_ALT] ?>"/>
                    <h4><?= $bike[BIKE_PRICE] ?></h4>
                    <a href="form_achat.php"><button>Procéder à l'achat</button></a>

                </li>
            <?php } ?>
        </ul>
    </main>

<?php
require_once('views/footer.php');
?>