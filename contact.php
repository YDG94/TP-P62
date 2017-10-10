<?php
$title = 'Contact | Tork Motorcycle';
require_once('views/header.php');
//var_dump($_SERVER['REQUEST_METHOD']);
//var_dump($_POST);

// Les types de donneés reccueillies
define('K_IS_VALID', 'k_is_valid');
define('K_VALUE', 'k_value');
define('K_FORMAT', 'k_format');
define('K_ERR_MSG', 'k_err_msg');

// Les noms des champs du formulaire
define('NOM', 'nom');
define('PRENOM', 'prenom');
define('COURRIEL', 'courriel');
define('MSG', 'msg');

// Des classes et attributs qui servent souvent
define('CLASS_INVALID', ' invalid');

$vld = array(
    NOM => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => '/\w{2,}/',
        K_ERR_MSG => 'Le nom doit comporter au moins deux lettres.',
    ),
    PRENOM => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => '/\w{2,}/',
        K_ERR_MSG => 'Le prénom doit comporter au moins deux lettres.',
    ),
    COURRIEL => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => '/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/',
        K_ERR_MSG => 'L\'adresse mail que vous avez entrez n\'est pas valide.',
    ),
    MSG => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => '/\w{10,}/',
        K_ERR_MSG => 'Le commentaire doit contenir au moins 10 caractères.',
    ),
);

/**
 * Indique qu'on est en POST et que les données POST présentes (celles qui doivent l'être)
 */
//var_dump($_POST);
$en_reception =
    'POST' === $_SERVER['REQUEST_METHOD'] // on est en POST
    && array_key_exists(NOM, $_POST)
    && array_key_exists(PRENOM, $_POST)
    && array_key_exists(COURRIEL, $_POST)
    && array_key_exists(MSG, $_POST);
//var_dump('$en_reception:', $en_reception);

/**
 * Renvoie true si un champ donnée est invalide (en réception)
 * Renvoie false si on est pas en réception (GET) ou si le champ est valide
 * @param $fieldname : le nom du champ comme par exemple FN_NOM
 * @return bool : vrai si le champ est invalide (en réception seulement)
 */
function invalid($fieldname)
{
    global $vld;
    global $en_reception;
    return $en_reception && !$vld[$fieldname][K_IS_VALID];
}

/**
 * Validation des données de formulaire qui est faite si on est en réception
 */
if ($en_reception) {
//   Validation du champ NOM
    if (array_key_exists(NOM, $_POST)) {
        $vld[NOM][K_VALUE] = filter_input(INPUT_POST, NOM, FILTER_SANITIZE_STRING);
        // filter_input renvoie false si le champ n'est pas valide
        $vld[NOM][K_IS_VALID] = (false !== $vld[NOM][K_VALUE])
            && (1 === preg_match($vld[NOM][K_FORMAT], $vld[NOM][K_VALUE]));
    }

    //   Validation du champ PRENOM
    if (array_key_exists(PRENOM, $_POST)) {
        $vld[PRENOM][K_VALUE] = filter_input(INPUT_POST, PRENOM, FILTER_SANITIZE_STRING);
        // filter_input renvoie false si le champ n'est pas valide
        $vld[PRENOM][K_IS_VALID] = (false !== $vld[PRENOM][K_VALUE])
            && (1 === preg_match($vld[PRENOM][K_FORMAT], $vld[PRENOM][K_VALUE]));
    }

    //   Validation du champ PRENOM
    if (array_key_exists(PRENOM, $_POST)) {
        $vld[PRENOM][K_VALUE] = filter_input(INPUT_POST, PRENOM, FILTER_SANITIZE_STRING);
        // filter_input renvoie false si le champ n'est pas valide
        $vld[PRENOM][K_IS_VALID] = (false !== $vld[PRENOM][K_VALUE])
            && (1 === preg_match($vld[PRENOM][K_FORMAT], $vld[PRENOM][K_VALUE]));
    }

    //   Validation du champ COURRIEL
    if (array_key_exists(COURRIEL, $_POST)) {
        $vld[COURRIEL][K_VALUE] = filter_input(INPUT_POST, COURRIEL, FILTER_SANITIZE_STRING);
        // filter_input renvoie false si le champ n'est pas valide
        $vld[COURRIEL][K_IS_VALID] = (false !== $vld[COURRIEL][K_VALUE])
            && (1 === preg_match($vld[COURRIEL][K_FORMAT], $vld[COURRIEL][K_VALUE]));
    }

    //  Validation du champ MSG
    if (array_key_exists(MSG, $_POST)) {
        $vld[MSG][K_VALUE] = filter_input(INPUT_POST, MSG, FILTER_SANITIZE_STRING);
        $vld[MSG][K_IS_VALID] = (false !== $vld[MSG][K_VALUE])
            && (strlen($vld[MSG][K_VALUE]) >= 10);
    }

// Validité totale du questionnaire : On passe en revue les valeurs 'is_valid' de tous les champs
    $formulaire_valide = true;
    foreach ($vld as $field) {
        if (!$field[K_IS_VALID]) {
            $formulaire_valide = false;
            break;
        }
    }

// Si le questionnaire est valide, on affiche un résumé (ou une redirection vers une autre page)
    if ($formulaire_valide) {
        header('Location:index.php');
    }
}


?>

    <main id="contact">

        <!--    Petit formulaire de contact-->
        <form method="post">
            <fieldset>
                <legend><h2>Nous Contacter</h2></legend>

                <!--Champ NOM-->
                <div class="form-group <?= invalid(NOM) ? CLASS_INVALID : '' ?>">
                    <label for="<?= NOM ?>">Nom :</label>
                    <input type="text" id="<?= NOM ?>" name="<?= NOM ?>" placeholder="Nom"
                           value="<?= array_key_exists(NOM, $_POST) ? $_POST[NOM] : '' ?>">
                    <?php if (invalid(NOM)) {
                        echo "<p class='msg_validation'>{$vld[NOM][K_ERR_MSG]}</p>";
                    } ?>
                </div>

                <!--Champ PRENOM-->
                <div class="form-group <?= invalid(PRENOM) ? CLASS_INVALID : '' ?>">
                    <label for="<?= PRENOM ?>">Prénom :</label>
                    <input type="text" id="<?= PRENOM ?>" name="<?= PRENOM ?>" placeholder="Prénom"
                           value="<?= array_key_exists(PRENOM, $_POST) ? $_POST[PRENOM] : '' ?>">

                    <?php if (invalid(PRENOM)) {
                        echo "<p class='msg_validation'>{$vld[PRENOM][K_ERR_MSG]}</p>";
                    } ?>
                </div>

                <!--Champ COURRIEL-->
                <div class="form-group <?= invalid(COURRIEL) ? CLASS_INVALID : '' ?>">
                    <label for="<?= COURRIEL ?>">Email :</label>
                    <input type="email" id="courriel" name="courriel" placeholder="user@yahoo.com"
                           value="<?= array_key_exists(COURRIEL, $_POST) ? $_POST[COURRIEL] : '' ?>">

                    <?php if (invalid(COURRIEL)) {
                        echo "<p class='msg_validation'>{$vld[COURRIEL][K_ERR_MSG]}</p>";
                    } ?>
                </div>

                <!--Champ MSG-->
                <div class="form-group <?= invalid(MSG) ? CLASS_INVALID : '' ?>">
                    <label for="<?= MSG ?>">Nous laisser un commentaire :</label>
                    <textarea id="msg" name="msg" placeholder="Écrivez votre message ici"
                              maxlength="100"><?= array_key_exists(MSG, $_POST) ? $_POST[MSG] : '' ?></textarea>

                    <?php if (invalid(MSG)) {
                        echo "<p class='msg_validation'>{$vld[MSG][K_ERR_MSG]}</p>";
                    } ?>
                </div>
                <div><input type="submit" value="Envoyer"></div>
                <div><input type="reset" value="Réinitialiser"></div>
            </fieldset>
        </form>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.77779911217!2d-73.70751678445517!3d45.554795279102095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc9226b2c0b46e5%3A0x4c215aa3c2ee74ec!2s752+Avenue+L%C3%A9o-Lacombe%2C+Laval%2C+QC!5e0!3m2!1sfr!2sca!4v1507121481341"
                frameborder="0" allowfullscreen></iframe>
    </main>

<?php
require_once('views/footer.php');
?>