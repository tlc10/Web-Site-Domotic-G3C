<?php

session_start();

// Connexion à la base de données
include("../includes/DBconnexion.php");

	$title = htmlspecialchars($_POST['title']); 
	$date = htmlspecialchars($_POST['date']); 
	$catId = $_SESSION['idCat'];

		$req = $db->prepare('DELETE FROM forum_topics WHERE titleTopics = :name AND lastDateTopics = :lastDate');
		$req->execute(array(
			'name' => $title,
			'lastDate' => $date
		));

header('Location: ../php/admin_forum_topics.php?idCat='.$catId);
?>