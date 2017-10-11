<?php
session_start();
if (!array_key_exists('like', $_SESSION)) {
    $_SESSION['like'] = array();
}
$title = 'Cruiser | Tork Motorcycle';
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

    <main id="cruiser">
        <!--Catégorie Cruiser-->
        <ul>
            <?php foreach ($motos as $id => $bike) {
                if ($cat_id == $bike[BIKE_CAT]) { ?>
                    <li>
                        <h2><?= $bike[BIKE_NAME] ?></h2>
                        <a href="<?= $bike[BIKE_URL] ?>?prod_id=<?= $id ?>">
                            <?php if (array_key_exists($id, $_SESSION['like'])) { ?>
                                <img src="images/boutons/like.png" alt="Icone favori"/>
                            <?php } else { ?>
                            <?php } ?>
                            <img src="<?= $bike[BIKE_IMG] ?>" alt="<?= $bike[BIKE_ALT] ?>"/>
                        </a>
                        <h4><?= $bike[BIKE_PRICE] ?></h4>
                        <p><?= $bike[BIKE_DESC] ?></p>
                    </li>

                <?php }
            } ?>
        </ul>
    </main>

<?php
require_once('views/footer.php');
?>