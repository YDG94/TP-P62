<?php
$title = 'Détail | Tork Motorcycle';
require_once('views/header.php');
require_once('defines.php');

//var_dump($_GET);
$prod_id = '';
$bike = null;
if (array_key_exists('prod_id', $_GET) && array_key_exists($_GET['prod_id'], $motos)) {
    $prod_id = $_GET['prod_id'];
    $bike=$motos[$prod_id];
} else {
    header('Location:index.php');
    exit;
}


?>

<main id="ninja">
            <form action="like.php" method="post">
                <button type="submit" name="like" value="<?= $prod_id?>">Ajouter aux Favoris</button>
            </form>

            <h3><?= $bike[BIKE_NAME] ?></h3>
            <img src="<?= $bike[BIKE_IMG] ?>" alt="<?= $bike[BIKE_ALT] ?>"/>
            <h4><?= $bike[BIKE_PRICE] ?></h4>
            <p><?= $bike[BIKE_DESC] ?></p>


    <a href="form_achat.php">
        <button>Procéder à l'achat</button>
    </a>
</main>

<?php
require_once('views/footer.php');
?>
