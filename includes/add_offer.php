<?php
// Connexion à la base de données
include("../includes/DBconnexion.php");

$title = $_POST['titleAjout'];
$commentaire = $_POST['commentaire'];
$image = $_POST['image'];

$req = $db->prepare('INSERT INTO offer (title,texte,image) VALUES(:title,:commentaire,:image)');

$req->execute(array(
	'title' => $title,
	'commentaire' => $commentaire,
	'image' => $image,
));
header('Location: ../php/admin_modifier_offers.php');
?>