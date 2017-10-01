<?php
$nav = array('Accueil' => 'index.php', 'Motos' => 'motos.php', 'Nous Contacter' => 'contact.php', 'Evènements' => 'event.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tork</title>
    <meta name="author" content="Dimitri Guillaume and Henoch Ndaya">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="keywords" content="">
    <meta name="robots" content="noindex,nofollow">
    <meta property="og:url" content=""/>
    <meta property="og:title" content="Tork"/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content=""/>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://use.fontawesome.com/639c474b7d.js"></script>
</head>
<body>
<div id="wrapper">
    <!--DÉBUT HEADER-->
    <header>
        <h1>Tork</h1>
        <div><img src="images/banner.jpg" alt="Bannière du site Tork"/></div>

        <!-- Barre de navigation -->
        <div id="mobile-nav">

            <!-- Menu hamburger -->
            <div class="menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- Fin menu hamburger -->

            <nav class="responsive-menu">
            <ul>
                <?php foreach ($nav as $link => $url) { ?>
                    <li><a href="<?= $url ?>"><?= $link ?></a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <!--FIN HEADER-->
