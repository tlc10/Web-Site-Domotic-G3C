<?php
// Connexion à la base de données
include("../includes/DBconnexion.php");

if (isset($_POST['question']) && isset($_POST['reponse'])) {
	$question = $_POST['question'];
	$reponse = $_POST['reponse'];

$req = $db->prepare('INSERT INTO faq (question,reponse) VALUES(:question,:reponse)');

$req->execute(array(
	'question' => $question,
	'reponse' => $reponse,
	));
}
header('Location: ../php/admin_faq.php');
?>