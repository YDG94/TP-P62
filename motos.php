<?php
$title = 'Motos | Tork Motorcycle';
require_once('views/header.php');
require_once('defines.php');
?>

    <main id="motos">
        <!--   Catalogue des motos  (catégories) -->
        <ul>
            <?php foreach ($categories as $ind => $cat) { ?>
                <li><a href="<?= $cat[BIKE_CAT_URL] ?>?id=<?= $ind?>">
                        <img src="<?= $cat[BIKE_CAT_IMG] ?>" alt="<?= $cat[BIKE_CAT_ALT] ?>"/>
                        <h2><?= $cat[BIKE_CAT_NAME] ?></h2>
                    </a></li>
            <?php } ?>
        </ul>
    </main>

<?php
require_once('views/footer.php');
?>