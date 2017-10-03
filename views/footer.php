<?php
$foot_nav = array('Nous contacter' => 'contact.php', 'Notre boutique' => '', 'Plan du site' => 'site_map.php', 'Mentions légales' => '');
?>
<!--DÉBUT FOOTER-->
<footer class="row">
    <div class="col-m-4">
        <ul>
            <li><h4>Service Client</h4></li>
            <?php foreach ($foot_nav as $link => $url) {
                echo "<li><a href='$url'>$link</a></li>";
            } ?>
        </ul>
    </div>

    <!-- Adresse -->
    <div itemscope itemtype="http://schema.org/PostalAddress" class="col-m-4">
        <p><span itemprop="streetAddress">752 Avenue Léo-Lacombe<br></span> <span
                    itemprop="addressLocality">Laval</span> <span itemprop="addressRegion">QC</span>, <span
                    itemprop="postalCode">H7N 3Y6</span><br><span
                    itemprop="telephone">&lpar;514&rpar; 878-4530</span><br><span itemprop="email">tork-laval&commat;yahoo.com</span>
        </p>
    </div>

    <!-- Réseaux sociaux -->
    <div id="social" class="col-m-4">
        <a href="https://www.facebook.com" target="_blank"><img src="images/sociaux/facebook-logo.png"
                                                                alt="Logo Facebook" width="65" height="65"/></a>
        <a href="https://www.twitter.com" target="_blank"><img src="images/sociaux/twitter-logo.png" alt="Logo Twitter"
                                                               width="65" height="65"/></a>
        <a href="https://www.pinterest.com" target="_blank"><img src="images/sociaux/pinterest-logo.png"
                                                                 alt="Logo Pinterest" width="65" height="65"/></a>
        <a href="https://www.youtube.com" target="_blank"><img src="images/sociaux/youtube-logo.png" alt="Logo Facebook"
                                                               width="65" height="65"/></a>
    </div>

    <div class="col-m-12">
        <p>Copyright &copy; tork 2017. All rights reserved</p>
        <p>Custom designed by Dimitri and Henoch, ce site a été réalisé dans le cadre d'un projet étudiant</p>
    </div>
    <a href="#top"><span class="fa fa-arrow-circle-up fa-4x fleche"></span></a>
</footer>
<!--FIN ENTÈTE-->
</div>
<script
        src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
        crossorigin="anonymous"></script>
<script src="script/main.js"></script>
</body>
</html>

