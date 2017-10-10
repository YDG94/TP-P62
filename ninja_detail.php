<?php
$title = 'Kawasaki Ninja H2R 2018 | Tork Motorcycle';
require_once('views/header.php');
require_once('defines.php');

//var_dump($_GET);
$prod_id = '';
if (array_key_exists('prod_id', $_GET) && array_key_exists($_GET['prod_id'], $motos)) {
    $prod_id = $_GET['prod_id'];
}else {
    header('Location:index.php');
    exit;
}
?>

<main id="ninja">
    <?php foreach ($motos as $id => $bike) {
        if ($prod_id == $id) { ?>
            <h3><?= $bike[BIKE_NAME] ?></h3>
            <img src="<?= $bike[BIKE_IMG] ?>" alt="<?= $bike[BIKE_ALT] ?>"/>
            <h4><?= $bike[BIKE_PRICE] ?></h4>
            <p><?= $bike[BIKE_DESC] ?></p>
            <?php
        }
    } ?>
</main>

<?php
require_once('views/footer.php');
?>
