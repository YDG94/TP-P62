<?php
$title = 'Plan du Site | Tork Motorcycle';
require_once('views/header.php');
require_once('defines.php');
?>

<main id="site_map">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="motos.php">Motos</a>
            <ul>
                <li><a href="cruiser.php">Cruiser</a></li>
                <li><a href="sport.php">Sport</a></li>
                <li><a href="offroad.php">Offroad</a></li>
            </ul>
        </li>
        <li><a href="contact.php">Nous Contacter</a></li>
        <li><a href="#">Évènements</a></li>
    </ul>
</main>

<?php
require_once('views/footer.php');
?>