<?php
$title = 'Tork | Motorcycle';
require_once('views/header.php');

?>


<!--DÉBUT MAIN -->
<main id="index">

    <!--    Slider des produits vedettes-->
    <!-- Carrousel Accueil -->
    <section id="slideshow-index">

        <!-- Conteneur du slider au complet -->
        <div id="container-slideshow">

            <!-- Hidden input -->
            <input checked type="radio" name="slider" id="slide1">
            <input type="radio" name="slider" id="slide2">
            <input type="radio" name="slider" id="slide3">

            <!-- Slider -->
            <div id="slideshow">

                <!-- Début overflow -->
                <div id="overflow">

                    <!-- Conteneur des figure -->
                    <div class="container-figure">

                        <div class="figure">
                            <img src="images/slider/bobber.jpg" alt="Photo Moto Bobber"/>
                            <p><strong>Le Renouveau d'une Légende, l'Indian Scout Bobber</strong> <br><a
                                        href="ninja_detail.php?prod_id=41">Détail de l'Offre</a></p>
                        </div>

                        <div class="figure">
                            <img src="images/slider/show_room.jpg" alt="Photo Moto Hayabusa"/>
                            <p><strong>Plus Rapide, Plus Puissante, La Nouvelle Suzuki Hayabusa</strong> <br><a
                                        href="ninja_detail.php?prod_id=52">Détail de l'Offre</a></p>
                        </div>

                        <div class="figure">
                            <img src="images/slider/engine.jpg" alt="Photo Pot d'échappement Akrapovic"/>
                            <p><strong>Un Design Épuré pour des Performances Élevées </strong> <br><a href="#">Voir les
                                    Évènements Ducati</a></p>
                        </div>

                    </div>
                    <!-- Fin conteneur figure -->

                </div>
                <!-- End overflow -->

            </div>
            <!-- End Slider -->

            <!-- Pagination -->
            <div id="active">
                <label for="slide1"></label>
                <label for="slide2"></label>
                <label for="slide3"></label>
            </div>

        </div>
        <!-- Fin conteneur slider au complet -->

    </section>
    <!-- End conteneur Slider -->

    <!--    Paragraphe de présentation-->
    <section id="presentation">
        <h2>La liberté n'a pas de prix, alors foncez...</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>
    </section>


</main>
<!--FIN MAIN-->

<?php
require_once('views/footer.php');
?>
