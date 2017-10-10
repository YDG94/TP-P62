<?php
$title = 'Contact | Tork Motorcycle';
require_once('views/header.php');
//var_dump($_SERVER['REQUEST_METHOD']);
//var_dump($_POST);

$input_full = array_key_exists('nom', $_POST) && array_key_exists('prenom', $_POST) && array_key_exists('courriel', $_POST)&& array_key_exists('msg',$_POST);
?>

    <main id="contact">
        <!--    Petit formulaire de contact-->
        <form method="post">
            <fieldset>
                <legend><h2>Nous Contacter</h2></legend>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" placeholder="Nom"
                       value="<?= $input_full ? $_POST['nom'] : '' ?>">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" placeholder="Prénom"
                       value="<?= $input_full ? $_POST['prenom'] : '' ?>">
                <label for="courriel">Email :</label>
                <input type="email" id="courriel" name="courriel" placeholder="user@yahoo.com"
                       value="<?= $input_full ? $_POST['courriel'] : '' ?>">
                <label for="msg">Nous laisser un commentaire :</label>
                <textarea id="msg" name="msg" placeholder="Écrivez votre message ici" maxlength="100"><?= $input_full ? $_POST['msg'] : '' ?></textarea>
                <input type="submit" value="Envoyer">
                <input type="reset" value="Réinitialiser">
            </fieldset>
        </form>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.77779911217!2d-73.70751678445517!3d45.554795279102095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc9226b2c0b46e5%3A0x4c215aa3c2ee74ec!2s752+Avenue+L%C3%A9o-Lacombe%2C+Laval%2C+QC!5e0!3m2!1sfr!2sca!4v1507121481341"
                frameborder="0" allowfullscreen></iframe>
    </main>

<?php
require_once('views/footer.php');
?>