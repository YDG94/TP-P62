<?php
require_once('views/header.php');
//var_dump($_SERVER['REQUEST_METHOD']);
//var_dump($_POST);

$input_full = array_key_exists('nom', $_POST) && array_key_exists('prenom', $_POST) && array_key_exists('courriel', $_POST);

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
                <textarea id="msg" name="msg" placeholder="Écrivez votre message ici" maxlength="100"></textarea>
                <input type="submit" value="Envoyer">
                <input type="reset" value="Réinitialiser">
            </fieldset>


        </form>
    </main>

<?php
require_once('views/footer.php');
?>