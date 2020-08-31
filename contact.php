
<?php
include_once('mailer.php');

// recup des données + désinfection

if ( isset( $_GET['submit'])) {

    $nom = filter_var($_GET['nom'], FILTER_SANITIZE_STRING);
    $prenom = filter_var($_GET['prenom'], FILTER_SANITIZE_STRING);
    $sexe = filter_var($_GET['gender'], FILTER_SANITIZE_STRING);
    $age = filter_var($_GET['age'], FILTER_SANITIZE_STRING);
    $adresse = filter_var($_GET['mail'], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_GET['message'], FILTER_SANITIZE_STRING);
    $pays = filter_var($_GET['pays'], FILTER_SANITIZE_STRING);
    $sujet = filter_var($_GET['sujet'], FILTER_SANITIZE_STRING);
};

// validation

$errors = array();

if (false === filter_var($adresse, FILTER_VALIDATE_EMAIL)) {
    $errors['mail'] = "Cette adresse est invalide.";
 }

 //  execution
if (count($errors)> 0){
	echo "There are mistakes!";
	print_r($errors);
	exit;
}

sendmail($adresse);

?>
