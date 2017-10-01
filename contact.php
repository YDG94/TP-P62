<?php
require_once('views/header.php');
?>

<main id="contact">
<!--    Petit formulaire de contact-->
    <form method="get">
        <fieldset>
            <legend><h2>Nous Contacter</h2></legend>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" placeholder="Nom">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" placeholder="Prénom">
        <label for="courriel">Email :</label>
        <input type="email" id="courriel" name="courriel" placeholder="user@yahoo.com">
        <label for="msg">Nous laisser un commentaire :</label>
        <textarea id="msg" name="msg" placeholder="Écrivez votre message ici" maxlength="100"></textarea>
        </fieldset>
        <input type="submit" value="Envoyer">

    </form>
</main>

<?php
require_once('views/footer.php');
?>