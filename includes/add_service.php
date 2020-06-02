<?php
// Connexion à la base de données
include("../includes/DBconnexion.php");

$title1 = $_POST['title1Ajout'];
$title2 = $_POST['title2Ajout'];
$commentaire = $_POST['commentaire'];

$req = $db->prepare('INSERT INTO service (title1,title2,texte) VALUES(:title1,:title2,:commentaire)');

$req->execute(array(
	'title1' => $title1,
	'title2' => $title2,
	'commentaire' => $commentaire,
));
header('Location: ../php/admin_modifier_services.php');
?>