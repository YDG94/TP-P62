<?php
/**
 * Created by PhpStorm.
 * User: henoch
 * Date: 10/9/2017
 * Time: 1:32 PM
 */
var_dump($_POST);
require_once ('defines.php');
/*fonction pour envoyer le mail*/


/*gestions de mon tableau d'erreur*/
$errors= array();
//je met les instructions sur une ligne (le if en particulier)pour eviter que les codes soient tres longs.

if (!array_key_exists('nomCard', $_POST)|| ($_POST['nomCard']=='')){$errors['nomCard']= 'Nous sommes désolés, vous n\'avez pas inscrit le nom de votre carte';} else{unset($errors['nomCard']);}
if (!array_key_exists('numCard', $_POST)|| ($_POST['numCard']=='')){$errors['numCard']= 'Nous sommes désolés, vous n\'avez pas inscrit le numero de votre carte';}
if (!array_key_exists('annee1', $_POST)|| ($_POST['annee1']=='')){$errors['annee1']= 'Nous sommes désolés, vous n\'avez pas inscrit la date d\'expirationd de votre carte';}
if (!array_key_exists('code', $_POST)|| ($_POST['code']=='')){$errors['code']= 'Veuillez fournir les 3 codes de sécurité';}
if (!array_key_exists('nom', $_POST)|| ($_POST['nom']=='')){$errors['nom']= 'Veuillez renseigner votre nom';}
if (!array_key_exists('adresse1', $_POST)|| ($_POST['adresse1']=='')){$errors['adresse1']= 'Veuillez renseigner votre addresse: celle-ci est tres importante pour le shipping de votre motobyke';}
if (!array_key_exists('adresse2', $_POST)|| ($_POST['adresse2']=='')){$errors['adresse2']= 'Veuillez renseigner une deuxieme addresse';}
if (!array_key_exists('courriel', $_POST)|| ($_POST['courriel']=='')){$errors['courriel']= 'Nous sommes désolés, vous n\'avez pas inscrit votre mail ou votre email est invalide';}
if (!array_key_exists('num', $_POST)|| ($_POST['num']=='')){$errors['num']= 'Veillez inscrire votre numero';}
if (!array_key_exists('message', $_POST)|| ($_POST['message']=='')){$errors['message']= 'Ecrire au moins un commentaire';}
if (!array_key_exists('item', $_POST) || ($_POST['item']===-1)){$errors['item']= 'Confirmer votre item';}
if (!array_key_exists('casa', $_POST)|| !isset($_POST['casa'])){$errors['casa']= 'Etes- vous satisfait de nos prix?';}
if (!array_key_exists('monsieur', $_POST)|| !isset($_POST['monsieur'])){$errors['monsieur']= 'Quel est votre genre?';}





if (!empty($errors)){
    header('location: form_achat.php'); //apres la redirection, je me dois d'afficher les erreurs s'il y en a


    session_start();
    $_SESSION['errors']= $errors;
    $_SESSION['input']= $_POST;

}
else{
    header('location: result.php');
}

