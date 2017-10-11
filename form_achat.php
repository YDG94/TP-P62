<?php
session_start();


require_once('defines.php');


/*validation de mon form*/

require_once('views/header.php');
?>

<main id="form_achat">
    <!--    Formulaire d'achat-->
    <div id="formNum1">
        <div>
            <h2 class="debut">Méthode de paiement</h2>
            <p class="debut">Tork n'accepte que les cartes bancaires suivantes:</p>
        </div>
        <div>

            <img id="carta" src="images/carte/carte-2.png">

        </div>

        <form id="monForm" action="formulaire2.php" method="post">
            <p class="debut">Veuillez remplir ce formulaire:</p>
            <div class="divForma" id="premier">
                <span class="civil">Civilité: </span>
                <label for="civil" class="civil">Monsieur</label>
                <input type="radio" name="monsieur"  value="Monsieur" id="civil">
                <label for="civil" class="civil">Madame</label>
                <input type="radio" name="monsieur"  value="Madame" id="civil2">

                <?php if (array_key_exists('errors', $_SESSION)&& isset($_SESSION['errors']['monsieur'])) { ?>
                    <div class="alert">
                        <p><?php echo  $_SESSION['errors']['monsieur'] ?>!!!</p>
                    </div>
                <?php } ?>
            </div>
            <div class="divForma" id="divForma1">
                <label for="nomCard">Nom de la carte</label>
                <input type="text" name="nomCard" id="nomCard" value="<?= (isset($_SESSION['input']['nomCard']))?$_SESSION['input']['nomCard']:'' ?>" <?= ((array_key_exists('errors', $_SESSION))&&($_SESSION['input']['nomCard'] === ''))? INVALA: '' ?>/>

                <?php if ((array_key_exists('errors', $_SESSION))&&($_SESSION['input']['nomCard'] === '')){?>
                    <img class="flotteur" src="images/carte/icone.ico">
                    <div class="alert">
                        <p><?= $_SESSION['errors']['nomCard'] ?>!!!</p>
                    </div>
                <?php }?>

                <label for="numCard">Numero de la carte</label>
                <input type="number" name="numCard" id="numCard" value="<?= (isset($_SESSION['input']['numCard']))?$_SESSION['input']['numCard']:'' ?>" <?= ((array_key_exists('errors', $_SESSION))&&($_SESSION['input']['numCard'] === ''))? INVALA: '' ?>/>

                <?php if ((array_key_exists('errors', $_SESSION))&&($_SESSION['input']['numCard'] === '')) { ?>
                    <img class="flotteur" src="images/carte/icone.ico">
                    <div class="alert">
                        <p><?=  $_SESSION['errors']['numCard'] ?>!!!</p>
                    </div>
                <?php } ?>

                <label for="annee1">Date d'expiration</label>
                <input type="date" name="annee1" id="annee1" value="<?= (isset($_SESSION['input']['annee1']))?$_SESSION['input']['annee1']:'' ?>" <?= ((array_key_exists('errors', $_SESSION))&&($_SESSION['input']['annee1'] === ''))? INVALA: '' ?>/>

                <?php if ((array_key_exists('errors', $_SESSION))&&($_SESSION['input']['annee1'] === '')){ ?>
                    <img class="flotteur" src="images/carte/icone.ico">
                    <div class="alert">
                        <p><?php echo  $_SESSION['errors']['annee1'] ?>!!!</p>
                    </div>
                <?php } ?>

                <label for="code">Code de securité :</label>
                <input type="number" id="code" name="code" placeholder="votre code à 3 chiffres" value="<?= (isset($_SESSION['input']['code']))?$_SESSION['input']['code']:'' ?>" <?= ((array_key_exists('errors', $_SESSION))&&($_SESSION['input']['code'] === ''))? INVALA: '' ?>/>

                <?php if ((array_key_exists('errors', $_SESSION))&&($_SESSION['input']['code'] === '')) { ?>
                    <img class="flotteur" src="images/carte/icone.ico">
                    <div class="alert">
                        <p><?=  $_SESSION['errors']['code'] ?>!!!</p>
                    </div>
                <?php } ?>
            </div>

            <div class="divForma" id="divForma2">
                <label for="nom">Nom Complet :</label>
                <input type="text" id="nom" name="nom" placeholder="Nom et prenom" autofocus value="<?= (isset($_SESSION['input']['code']))?$_SESSION['input']['nom']:'' ?>" <?= ((array_key_exists('errors', $_SESSION))&&($_SESSION['input']['nom'] === ''))? INVALA: '' ?>/>

                <?php if ((array_key_exists('errors', $_SESSION))&&($_SESSION['input']['nom'] === '')) { ?>
                    <img class="flotteur" src="images/carte/icone.ico">
                    <div class="alert">
                        <p><?php echo  $_SESSION['errors']['nom'] ?>!!!</p>
                    </div>
                <?php } ?>

                <label for="adresse1">Adresse 1 :</label>
                <input type="text" id="adresse1" name="adresse1" placeholder="Avenue, P.O box, Companie" value="<?= (isset($_SESSION['input']['adresse1']))?$_SESSION['input']['adresse1']:'' ?>" <?= ((array_key_exists('errors', $_SESSION))&&($_SESSION['input']['adresse1'] === ''))? INVALA: '' ?>/>

                <?php if ((array_key_exists('errors', $_SESSION))&&($_SESSION['input']['adresse1'] === ''))  { ?>
                    <img class="flotteur" src="images/carte/icone.ico">
                    <div class="alert">
                        <p><?php echo  $_SESSION['errors']['adresse1'] ?>!!!</p>
                    </div>
                <?php } ?>

                <label for="Adresse2">Adresse 2 :</label>
                <input type="text" id="adresse2" name="adresse2" placeholder="Apartement, Suite, numero" value="<?= (isset($_SESSION['input']['adresse2']))?$_SESSION['input']['adresse2']:'' ?>" <?= ((array_key_exists('errors', $_SESSION))&&($_SESSION['input']['adresse2'] === ''))? INVALA: '' ?>/>

                <?php if ((array_key_exists('errors', $_SESSION))&&($_SESSION['input']['adresse2'] === ''))  { ?>
                    <img class="flotteur" src="images/carte/icone.ico">
                    <div class="alert">
                        <p><?php echo  $_SESSION['errors']['adresse2'] ?>!!!</p>
                    </div>
                <?php } ?>

                <label for="courriel">Email :</label>
                <input type="email" id="courriel" name="courriel" placeholder="user@yahoo.com" value="<?= (isset($_SESSION['input']['courriel']))?$_SESSION['input']['courriel']:''?>" <?= ((array_key_exists('errors', $_SESSION))&&($_SESSION['input']['courriel'] === ''))? INVALA: '' ?>/>

                <?php if ((array_key_exists('errors', $_SESSION)) &&($_SESSION['input']['courriel'] === '')){ ?>
                    <img class="flotteur" src="images/carte/icone.ico">
                    <div class="alert">
                        <p><?php echo  $_SESSION['errors']['courriel'] ?>!!!</p>
                    </div>
                <?php } ?>
            </div>
            <div class="divForma" id="divForma3">

                <label for="num">Numéro Tel :</label>
                <input type="number" id="num" name="num" placeholder="Entrer votre numero" value="<?= (isset($_SESSION['input']['num']))?$_SESSION['input']['num']:''?>" <?= ((array_key_exists('errors', $_SESSION))&&($_SESSION['input']['num'] === ''))? INVALA: '' ?>/>

                <?php if ((array_key_exists('errors', $_SESSION))&&($_SESSION['input']['num'] === '')) { ?>
                    <img class="flotteur" src="images/carte/icone.ico">
                    <div class="alert">
                        <p><?php echo  $_SESSION['errors']['num'] ?>!!!</p>
                    </div>
                <?php } ?>

                <label for="lieu">Confirmer l'item choisi :</label>
                <select name="item" id="lieu">
                    <?php  foreach ($nomItem as $cle=>$valeur){ ?>
                        <option value="<?= $cle ?>" <?= (isset($_SESSION['input']['item'])&& $_SESSION['input']['item']!==-1 )? SELECTED: '' ?>><?= $valeur ?></option>
                    <?php  } ?>
                </select>
                <label for="msg">Nous laisser un commentaire :</label>
                <textarea id="msg" name="message" placeholder="Écrivez votre message ici" maxlength="100" <?= ((array_key_exists('errors', $_SESSION))&&($_SESSION['input']['message'] === ''))? INVALA2: '' ?>><?= (isset($_SESSION['input']['message']))?$_SESSION['input']['message']:''?></textarea>
                <?php if ((array_key_exists('errors', $_SESSION))&&($_SESSION['input']['message'] === '')) { ?>
                    <div class="alert">
                        <p><?php echo  $_SESSION['errors']['message'] ?>!!!</p>
                    </div>
                <?php } ?>


            </div>
            <div class="divForma" id="dernier">
                <span class="civil">Ravis de nos prix: </span>
                <label for="check1" class="civil">OUI</label>
                <input type="checkbox" name="casa"  class="casa" id="check1" checked value="OUI">
                <label for="check2" class="civil">NON</label>
                <input type="checkbox" name="casa"  class="casa" id="check2" value="NON">
                <?php if (array_key_exists('errors', $_SESSION)&& isset($_SESSION['errors']['casa'])) { ?>
                    <div class="alert">
                        <p><?php echo  $_SESSION['errors']['casa'] ?>!!!</p>
                    </div>
                <?php } ?>
            </div>
            <input id='submito' type="submit" value="Envoyer"/>
        </form>

    </div>
</main>

<?php
require_once('views/footer.php');
?>
