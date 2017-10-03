<?php
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
                            <img src="images/slider/bobber.jpg" alt="Photo Bobber"/>
                            <p><strong>Villa Vue sur Mer aux Bahamas</strong>, <br><a href="">Détail de l'offre</a></p>
                        </div>

                        <div class="figure">
                            <img src="images/slider/ninja_h2r.jpg.jpg" alt="Photo Ninja H2R"/>
                            <p><strong>Villa Belrose en Guadeloupe</strong>, <br><a href="">Détail de l'offre</a></p>
                        </div>

                        <div class="figure">
                            <img src="images/slider/y_z450.jpg.jpg" alt="Photo Y Z450"/>
                            <p><strong>Villa Polimnia à Saint-Barth</strong>, <br><a href="">Détail de l'offre</a></p>
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



</main>
<!--FIN MAIN-->

<?php
require_once('views/footer.php');
?>
