<?php
$title = 'Sport | Tork Motorcycle';
require_once('views/header.php');
require_once('defines.php');

//var_dump($_GET);
$cat_id = '';
if (array_key_exists('cat_id', $_GET) && array_key_exists($_GET['cat_id'], $categories)) {
    $cat_id = $_GET['cat_id'];
} else {
    header('Location:index.php');
    exit;
}
?>

    <main id="sport">
        <!--Catégorie Sport-->
        <ul>
            <?php foreach ($motos as $id => $bike) {
                if ($cat_id == $bike[BIKE_CAT]) { ?>
                    <li>
                        <a href="<?= $bike[BIKE_URL] ?>?prod_id=<?= $id ?>">
                            <h3><?= $bike[BIKE_NAME] ?></h3>
                            <img src="<?= $bike[BIKE_IMG] ?>" alt="<?= $bike[BIKE_ALT] ?>"/>
                            <h4><?= $bike[BIKE_PRICE] ?></h4>
                            <p><?= $bike[BIKE_DESC] ?></p>
                        </a>
                    </li>

                <?php }
            } ?>
        </ul>
    </main>

<?php
require_once('views/footer.php');
?>