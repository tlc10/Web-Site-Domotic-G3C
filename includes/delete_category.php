<?php

session_start();

// Connexion à la base de données
include("../includes/DBconnexion.php");

	$name = htmlspecialchars($_POST['name']); 

		$req = $db->prepare('DELETE FROM forum_categories WHERE nameCategories = :name');
		$req->execute(array(
			'name' => $name));

header('Location: ../php/admin_forum_categories.php');
?>