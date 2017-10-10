<?php

// Constante pour les catégories
define('BIKE_CAT_NAME', 'bike_cat_name');
define('BIKE_CAT_IMG', 'bike_cat_img');
define('BIKE_CAT_ALT', 'bike_cat_alt');
define('BIKE_CAT_URL', 'bike_cat_url');

// Constante pour les motos
define('BIKE_NAME', 'bike_name');
define('BIKE_IMG', 'bike_img');
define('BIKE_ALT', 'bike_alt');
define('BIKE_DESC', 'bike_desc');
define('BIKE_PRICE', 'bike_price');
define('BIKE_CAT', 'bike_cat');
define('BIKE_URL', 'bike_url');

// TABLEAU DES MOTOS
$motos = array(

    // Cruiser
    41 => array(
        BIKE_NAME => 'Indian Scout Bobber (2018)',
        BIKE_IMG => 'images/cruiser/bobber.jpg',
        BIKE_ALT => 'Photo Moto Bobber',
        BIKE_PRICE => '14 499 $CAD',
        BIKE_DESC => '<span>La Légende est de retour !</span><br>À l\'instar de sa célébrissime devancière, la toute nouvelle Indian Scout est un custom typiquement américain, innovant et d\'une stupéfiante beauté. Elle inaugure le tout premier moteur à refroidissement liquide de la marque : un bicylindre en V de 1133 cm3 (69 pouces3) efficace et fiable, qui délivre au doigt et à l\'oeil une puissance impressionnante. Un déclinaison comtemporaine de la Scout de légende, qui associe tradition du style et modernité de la mécanique.',
        BIKE_URL => 'ninja_detail.php',
        BIKE_CAT => 40,
    ),
    42 => array(
        BIKE_NAME => 'Royal Enfield Continental GT 535 (2013)',
        BIKE_IMG => 'images/cruiser/gt_535.jpg',
        BIKE_ALT => 'Photo Moto GT 535',
        BIKE_PRICE => '9221.74 $CAD',
        BIKE_DESC => 'La mode est au néo retro, mais avec cette Continental GT, Royl Enfield rejoint tout simplement l\'ère de la moto moderne. Laissant la case purement rétro aux autres modèles de sa gamme, les Bullet, Classic et Electra, la Continental GT 535 est une vision toute particulière de la moto simple et facile à l\'indienne. Motorisée par un très agréable monocylindre à refroidissement par air et boîte 5 vitesses, qui prend 36 cm3 et un peu de couple en plus, elle met en avant sa mécanique et son esthétique, tout en proposant un style Café Racer cher aux anglaises des années 70, avec selle monoplace, réservoir allongé, guidon bracelet avec rétroviseurs en bout de guidon.',
        BIKE_URL => 'ninja_detail.php',
        BIKE_CAT => 40,
    ),
    43 => array(
        BIKE_NAME => 'Harley-Davidson Softail Slim (2017)',
        BIKE_IMG => 'images/cruiser/softail.jpg',
        BIKE_ALT => 'Photo Moto Softail Slim',
        BIKE_PRICE => '18 199 $CAD',
        BIKE_DESC => '<span>Le bon vieux temps revient aujourd\'hui</span><br>Un mélange parfait intégrant une touche classique, un style bobber à l\'état pur et toute la puissance du moteur High Output Twin Cam 103B à haut rendement. Un bolide moderne doté d\'une inimitable attitude robuste, style vieille école.<br>Le Softail Slim, c\'est la vieille école transformée pour vivre une nouvelle époque. Le guidon Hollywood, la roue arrière mince, la console "Cats Eye" et les marchepieds rappellent la naissance des motos Custom. Ces éléments empruints de nostalgie se marient avec des technologies de pointe, telles que le moteur High Output Twin Cam 103, une suspension dissimulée et de remarquables freins avec ABS. Tout à été pensé pour faire du Softail Slim une machine classique moderne',
        BIKE_URL => 'ninja_detail.php',
        BIKE_CAT => 40,
    ),
    44 => array(
        BIKE_NAME => 'Harley-Davidson Softail Slim S (2017)',
        BIKE_IMG => 'images/cruiser/softail_s.jpg',
        BIKE_ALT => 'Photo Moto Softail Slim S',
        BIKE_PRICE => '22 999 $CAD',
        BIKE_DESC => '<span>Le Muscle américain</span><br>Dans la rue, pour le respect, rien ne vaut la puissance. Lorsque nous avons développé le Softail Slim S, nous l\'avons équipé du plus puissant moteur disponible sur un cruiser.<br>Le style Bobber du Softail Slim passe au niveau suivant avec le moteur Screamin Eagle Air-Cooled Twin Cam 110B, le triple té de fourche et son réhausseur noirs, le cerclage de phare noir brillant, les caches-fourreaux, les tubes de fourche, les échappements Shotgun superposés avec silencieux biseautés, et les graphismes à thème militaire en option. Le Softail Slim S. Puissance moderne. Ligne traditionnelle.',
        BIKE_URL => 'ninja_detail.php',
        BIKE_CAT => 40,
    ),
    45 => array(
        BIKE_NAME => 'Triumph Thunderbird Storm (2018)',
        BIKE_IMG => 'images/cruiser/thunderbird.jpg',
        BIKE_ALT => 'Photo Moto Thunderbird',
        BIKE_PRICE => '16 800 $CAD',
        BIKE_DESC => 'La Thunderbird Storm abandonne le chrome et dévoile sa face la plus sombre, armée de son moteur imposant de 1700 cm3.<br>Conçue à partir de la Thunderbird, la Storm se démarque de sa grande soeur par son aspect plus trapu, sombre et minimaliste, et son couple ahurissant, qui ne manqueront pas de laisser leur empruinte sur la route.<br>Nous avons réussi à ajouter 102 cm3 à son moteur emblématique bicylindre parallèle. Remarquablement maniable et couvrant une puissance effroyable, cette tornade noire n\'hésite pas à secouer le monde tranquille des cruisers.',
        BIKE_URL => 'ninja_detail.php',
        BIKE_CAT => 40,
    ),

    // Sport
    51 => array(
        BIKE_NAME => 'Aprilia RSV4 RF (2017)',
        BIKE_IMG => 'images/sport/rsv4_rf.jpg',
        BIKE_ALT => 'Photo Moto RSV4 RF',
        BIKE_PRICE => '23 995 $CAD',
        BIKE_DESC => 'L\'Aprilia RSV4 continue d\'évoluer pour rester la meilleure superbike jamais produite à ce jour. Résultat d\'un projet extraordinaire, né de l\'expérience et du succès d\'Aprilia dans le monde de la compétition. Une seconde au tour de gagnée comparée aux versions précédentes grâce aux nouvelles suspensions Öhlins, aux nouveaux freins et au nouveau package d\'assistance au pilotage APRC qui comprend le C-ABS et le DOWNSHIFTER. Le chassis sept fois champion du Monde de Superbike est maintenant combiné à un moteur de 201 CV Euro 4.',
        BIKE_URL => 'ninja_detail.php',
        BIKE_CAT => 50,
    ),
    52 => array(
        BIKE_NAME => 'Suzuki Hayabusa GSX 1300R (2017)',
        BIKE_IMG => 'images/sport/hayabusa.jpg',
        BIKE_ALT => 'Photo Moto Hayabusa',
        BIKE_PRICE => '15 399 $CAD',
        BIKE_DESC => 'La Sportive Ultime. Dans une Esthétique intemporelle.<br>Il y a plus d\'une décennie, Suzuki a développé une machine tellement unique qu\'elle a instantanément attiré un public fidèle dans le monde entier. Comme son homonyme, le faucon pèlerin japonais, l\'Hayabusa est célèbre pour couper à travers l\'air avec une agilité et des performances incroyables.<br>Grâce à d\'innombrables améliorations d\'ingénierie de sa conception originale, l\'esprit de la Hayabusa persiste. En 2014, le modèle a reçu des étriers monoblocs Brembo de haute performance et un système de freins antiblocages ABS. Sa performance incomparable offre des randonnées amusantes et sportives à toutes les vitesses, reflétant son caractère Sport Ultime.',
        BIKE_URL => 'ninja_detail.php',
        BIKE_CAT => 50,
    ),
    53 => array(
        BIKE_NAME => 'Triumph Daytona 675R (2017)',
        BIKE_IMG => 'images/sport/daytona.jpg',
        BIKE_ALT => 'Photo Moto Daytona 675R',
        BIKE_PRICE => '15 000 $CAD',
        BIKE_DESC => 'Nos objectifs étaient clairs : plus de couple, plus de puissance, plus de d\'accélération.<br>Pour cela nous avons d\'abord commencé par revoir le rapport couple/alésage. La course raccourcie du moteur de la Daytona 675R nous a permis d\ajouter 500tr/min au régime maximum pour atteindre ainsi 14 00 tr/min, sans oublier une puissance de 128 ch et un couple de 75 Nm. Le nouveau moteur vous offre donc plus de puissance sur une plus longue durée. Nous avons exprimé tout le potentiel de la moto, pour qu\'à votre tour vous exprimiez le vôtre.',
        BIKE_URL => 'ninja_detail.php',
        BIKE_CAT => 50,
    ),
    54 => array(
        BIKE_NAME => 'Ducati Panigale 1299 R Final Edition (2018)',
        BIKE_IMG => 'images/sport/panigale.jpg',
        BIKE_ALT => 'Photo Moto Panigale 1299 R',
        BIKE_PRICE => '47 995 $CAD',
        BIKE_DESC => '<span>Quand la fin raconte toute l\'Histoire</span><br>C\'est la célébration de l\'héritage des bicylindres Superbikes Ducati. Nous avons combiné le plus perfectionné châssis monocoque en aluminium avec notre moteur Superquadro le plus puissant afin de réaliser la Panigale 1299 R Final Edition. Pour les pilotes passionnés prêts à posséder la plus importante partie de l\'histoire du V-twin Ducati, complétée par une livrée spécifique et un té de fourche numéroté.',
        BIKE_URL => 'ninja_detail.php',
        BIKE_CAT => 50,
    ),
    55 => array(
        BIKE_NAME => 'Kawasaki Ninja H2R (2018)',
        BIKE_IMG => 'images/sport/ninja_h2r.jpg',
        BIKE_ALT => 'Photo Moto Ninja H2R',
        BIKE_PRICE => '61 200 $CAD',
        BIKE_DESC => 'Una machine à part, la Ninja H2 est l\'incarnation de la passion de Kawasaki pour la performance, pour la recherche de l\'excellence technique et le désir de parvenir à la perfection de la conduite sur route. Equipé d\'un compresseur conçu et construit entièrement en interne, la Ninja H2 ravira les connaisseurs avec un festin visuel des détails, en plus d\'une nouvelle norme d\'accélération pour une moto sur route.',
        BIKE_URL => 'ninja_detail.php',
        BIKE_CAT => 50,
    ),

    // Offroad
    61 => array(
        BIKE_NAME => 'Kawasaki KX250F (2018)',
        BIKE_IMG => 'images/offroad/kx_250.jpg',
        BIKE_ALT => 'Photo Moto KX250F',
        BIKE_PRICE => '8 999 $CAD',
        BIKE_DESC => 'La KX250F 2018 impressione par sa vitesse, sa puissance, son sens de l\'innovation et son design actuel. Grâce à son moteur et son châssis allégés ainsi qu\'une multitude d\'innovations notre nouvelle KX est faite pour réduire les temps au tour. La KX250F élève ainsi le MX2 à un autre niveau.',
        BIKE_URL => 'ninja_detail.php',
        BIKE_CAT => 60,
    ),
    62 => array(
        BIKE_NAME => 'Suzuki DR-Z125L (2017)',
        BIKE_IMG => 'images/offroad/dr_z125.jpg',
        BIKE_ALT => 'Photo Moto DR-Z125L',
        BIKE_PRICE => '3 499 $CAD',
        BIKE_DESC => 'Propulsé par un monocylindre quatre temps refroidi par air, simple et éprouvé, la Suzuki DR-Z125L est une parfaite machine d\'initiation au Tout-Terrain grâce à son cadre d\'acier capables de supporter les contraintes de son environnement.<br>Equipée d\'une fourche téléscopique hydraulique à l\'avant et d\'un mono-amortisseur à l\'arrière, la DR-Z125L efface les trous, les ornières et les bosses. Un frein à disque à l\'avant et un tambour à l\'arrière suffisent à arrêter cette machine "poids-plume" (89 kilos tous pleins faits), idéale pour les jeunes pilotes qui veulent découvrir le tout-terrain sur une machine facile et performante.',
        BIKE_URL => 'ninja_detail.php',
        BIKE_CAT => 60,
    ),
    63 => array(
        BIKE_NAME => 'Yamaha YZ450FX (2018)',
        BIKE_IMG => 'images/offroad/y_z450.jpg',
        BIKE_ALT => 'Photo Moto YZ450FX',
        BIKE_PRICE => '10 049 $CAD',
        BIKE_DESC => '<span>Symbiose parfaite</span><br>IL s\'agit de la motocross la plus complète que nous ayons créé. C\'est également la première moto de série à offrir une connexion sans fil et des réglages moteurs personnalisés. La victoire se trouve au bout des doigts.<br>Le nouveau démarreur électrique léger permet de gagner de précieuses secondes lorsque vous êtes sous pression. En outre, le moteur à culasse inversé bénéficie d\'un piston à compression élevé et d\'un boîtier de commande optimisé qui produisent une puissance phénoménale.<br>Le nouveau cadre léger et la suspension améliorée de la YZ450F contribuent à une stabilité et une agilité accrues sur terrain accidentés et dans les virages. Finalement, la nouvelle carrosserie élancée et compacte assure une rigidité absolue et un style sensationnel.',
        BIKE_URL => 'ninja_detail.php',
        BIKE_CAT => 60,
    ),
    64 => array(
        BIKE_NAME => 'KTM 450 SX-F (2018)',
        BIKE_IMG => 'images/offroad/450_sx.jpg',
        BIKE_ALT => 'Photo Moto 450 SX-F',
        BIKE_PRICE => '11 199 $CAD',
        BIKE_DESC => 'Vive comme l\'éclair, la KTM 450 SX-F vous transportera au septième ciel. Grâce à son moteur compact, qui fournit une puissance explosive mais contrôlable, elle constitut l\'arme de prédilection de l\'équipe d\'usine officiel Red Bull KTM Racing et de son champion, Ryan Dungey. Cette moto READY TO RACE fait la loi sur les circuits du championnat de supercross AMA. Son secret ? Une agilité diabolique et une puissance de feu incomparable. La victoire vous tend les bras.',
        BIKE_URL => 'ninja_detail.php',
        BIKE_CAT => 60,
    ),
    65 => array(
        BIKE_NAME => 'Honda CRF450R (2018)',
        BIKE_IMG => 'images/offroad/crf_450.jpg',
        BIKE_ALT => 'Photo Moto CRF450R',
        BIKE_PRICE => '10 299 $CAD',
        BIKE_DESC => '<span>Testée sur le terrain</span><br>Avec un nouveau moteur annonçant 11 % de puissance en plus et une partie-cycle dimensionnée en conséquence, la CRF450R 2018 est plus forte, plus efficace et plus affûtée. Le système Honda EMSB (Engine Mode Select Button) est le système clef qui permet d\'adapter le caractère du moteur à la demande du pilote. Il vous donne la possibilité de choisir entre trois modes, afin de régler la puissance du moteur selon la conduite que vous souhaitez et selon l\'état de la piste. Dès le début de la course, vous sentirez que vous maîtrisez la moto à chaque instant, car la CRF450R offre un niveau élevé de sensation, de stabilité et de traction',
        BIKE_URL => 'ninja_detail.php',
        BIKE_CAT => 60,
    ),
);


// TABLEAU DES CATÉGORIES
$categories = array(

    // Cruiser
    40 => array(
        BIKE_CAT_NAME => 'Cruiser',
        BIKE_CAT_IMG => 'images/categorie/cruiser.jpg',
        BIKE_CAT_URL => 'cruiser.php',
        BIKE_CAT_ALT => 'Photo catégorie Cruiser',
    ),

    // Sport
    50 => array(
        BIKE_CAT_NAME => 'Sport',
        BIKE_CAT_IMG => 'images/categorie/sport.jpg',
        BIKE_CAT_URL => 'sport.php',
        BIKE_CAT_ALT => 'Photo catégorie Sport',
    ),

    // Offroad
    60 => array(
        BIKE_CAT_NAME => 'Offroad',
        BIKE_CAT_IMG => 'images/categorie/offroad.jpg',
        BIKE_CAT_URL => 'offroad.php',
        BIKE_CAT_ALT => 'Photo catégorie Offroad'
    ),
);
?>
