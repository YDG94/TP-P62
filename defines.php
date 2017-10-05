<?php

// Constante pour les catégories
define('BIKE_CAT_NAME', 'bike_cat_name');
define('BIKE_CAT_IMG', 'bike_cat_img');
define('BIKE_CAT_ALT', 'bike_cat_alt');
define('BIKE_CAT_URL', 'bike_cat_url');

// Constante pour les motos
define('BIKE_NAME', 'bike_name');
define('BIKE_IMG', 'bike_img');
define('BIKE_ALT', 'bike_img');
define('BIKE_DESC', 'bike_desc');
define('BIKE_PRICE', 'bike_price');
define('BIKE_CAT', 'bike_cat');
define('BIKE_URL', 'bike_url');

// TABLEAU DES MOTOS
$motos=array(

    // Cruiser
    1=>array (
        BIKE_NAME=>'Indian Scout Bobber (2018)',
        BIKE_IMG=>'images/cruiser/bobber.jpg',
        BIKE_ALT=>'Photo Moto Bobber',
        BIKE_PRICE=>'14 499 $CAD',
        BIKE_DESC=>'',
        BIKE_CAT=>40,
    ),
    array (
        BIKE_NAME=>'Royal Enfield Continental GT 535 (2013)',
        BIKE_IMG=>'images/cruiser/gt_535.jpg',
        BIKE_ALT=>'Photo Moto GT 535',
        BIKE_PRICE=>'9221.74 $CAD',
        BIKE_DESC=>'',
        BIKE_CAT=>40,
    ),
    array (
        BIKE_NAME=>'Harley-Davidson Softail Slim (2017)',
        BIKE_IMG=>'images/cruiser/softail.jpg',
        BIKE_ALT=>'Photo Moto Softail Slim',
        BIKE_PRICE=>'18 199 $CAD',
        BIKE_DESC=>'',
        BIKE_CAT=>40,
    ),
    array (
        BIKE_NAME=>'Harley-Davidson Softail Slim S (2017)',
        BIKE_IMG=>'images/cruiser/softail_s.jpg',
        BIKE_ALT=>'Photo Moto Softail Slim S',
        BIKE_PRICE=>'22 999 $CAD',
        BIKE_DESC=>'',
        BIKE_CAT=>40,
    ),
    array (
        BIKE_NAME=>'Triumph Thunderbird (2018)',
        BIKE_IMG=>'images/cruiser/thunderbird.jpg',
        BIKE_ALT=>'Photo Moto Thunderbird',
        BIKE_PRICE=>'16 800 $CAD',
        BIKE_DESC=>'',
        BIKE_CAT=>40,
    ),

    // Sport
    array (
        BIKE_NAME=>'Aprilia RSV4 RF (2017)',
        BIKE_IMG=>'images/sport/rsv4_rf.jpg',
        BIKE_ALT=>'Photo Moto RSV4 RF',
        BIKE_PRICE=>'23 995 $CAD',
        BIKE_DESC=>'',
        BIKE_CAT=>50,
    ),
    array (
        BIKE_NAME=>'Suzuki Hayabusa (2017)',
        BIKE_IMG=>'images/sport/hayabusa.jpg',
        BIKE_ALT=>'Photo Moto Hayabusa',
        BIKE_PRICE=>'15 399 $CAD',
        BIKE_DESC=>'',
        BIKE_CAT=>50,
    ),
    array (
        BIKE_NAME=>'Triumph Daytona 675R (2017)',
        BIKE_IMG=>'images/sport/daytona.jpg',
        BIKE_ALT=>'Photo Moto Daytona 675R',
        BIKE_PRICE=>'15 000 $CAD',
        BIKE_DESC=>'',
        BIKE_CAT=>50,
    ),
    array (
        BIKE_NAME=>'Ducati Panigale 1299R Final Edition (2018)',
        BIKE_IMG=>'images/sport/panigale.jpg',
        BIKE_ALT=>'Photo Moto Panigale 1299R',
        BIKE_PRICE=>'47 995 $CAD',
        BIKE_DESC=>'',
        BIKE_CAT=>50,
    ),
    array (
        BIKE_NAME=>'Kawasaki Ninja H2R (2018)',
        BIKE_IMG=>'images/sport/ninja_h2r.jpg',
        BIKE_ALT=>'Photo Moto Ninja H2R',
        BIKE_PRICE=>'61 200 $CAD',
        BIKE_DESC=>'',
        BIKE_CAT=>50,
    ),

    // Offroad
    array (
        BIKE_NAME=>'Kawasaki KX250 F (2018)',
        BIKE_IMG=>'images/offroad/kx_250.jpg',
        BIKE_ALT=>'Photo Moto KX250 F',
        BIKE_PRICE=>'8 999 $CAD',
        BIKE_DESC=>'',
        BIKE_CAT=>60,
    ),
    array (
        BIKE_NAME=>'Suzuki DR-Z125 L (2017)',
        BIKE_IMG=>'images/offroad/dr_z125.jpg',
        BIKE_ALT=>'Photo Moto DR-Z125 L',
        BIKE_PRICE=>'3 499 $CAD',
        BIKE_DESC=>'',
        BIKE_CAT=>60,
    ),
    array (
        BIKE_NAME=>'Yamaha Y Z450 FX (2018)',
        BIKE_IMG=>'images/offroad/y_z450.jpg',
        BIKE_ALT=>'Photo Moto Y Z450 FX',
        BIKE_PRICE=>'10 049 $CAD',
        BIKE_DESC=>'',
        BIKE_CAT=>60,
    ),
    array (
        BIKE_NAME=>'KTM 450 SX-F (2018)',
        BIKE_IMG=>'images/offroad/450_sx.jpg',
        BIKE_ALT=>'Photo Moto 450 SX-F',
        BIKE_PRICE=>'11 199 $CAD',
        BIKE_DESC=>'',
        BIKE_CAT=>60,
    ),
    array (
        BIKE_NAME=>'Honda CRF 450R (2018)',
        BIKE_IMG=>'images/offroad/crf_450.jpg',
        BIKE_ALT=>'Photo Moto CRF 450R',
        BIKE_PRICE=>'10 299 $CAD',
        BIKE_DESC=>'',
        BIKE_CAT=>60,
    ),
);


// TABLEAU DES CATÉGORIES
$categories = array(

    // Cruiser
    40 => array(
        BIKE_CAT_NAME => 'Cruiser',
        BIKE_CAT_IMG => 'images/categorie/cruiser.jpg',
        BIKE_CAT_URL=>'cruiser.php',
        BIKE_CAT_ALT=>'Photo catégorie Cruiser',
    ),

    // Sport
    50 => array(
        BIKE_CAT_NAME => 'Sport',
        BIKE_CAT_IMG => 'images/categorie/sport.jpg',
        BIKE_CAT_URL=>'sport.php',
        BIKE_CAT_ALT=>'Photo catégorie Sport',
    ),

    // Offroad
    60 => array(
        BIKE_CAT_NAME => 'Offroad',
        BIKE_CAT_IMG => 'images/categorie/offroad.jpg',
        BIKE_CAT_URL=>'offroad.php',
        BIKE_CAT_ALT=>'Photo catégorie Offroad'
    ),
);
?>
