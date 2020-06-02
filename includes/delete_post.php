<?php

session_start();

// Connexion à la base de données
include("../includes/DBconnexion.php");

	$date = htmlspecialchars($_POST['date']); 
	$topicId = $_SESSION['idTopic'];

		$req = $db->prepare('DELETE FROM forum_posts WHERE datePosts = :lastDate');
		$req->execute(array(
			'lastDate' => $date
		));

header('Location: ../php/admin_forum_topic_view.php?idTopic='.$topicId);
?>