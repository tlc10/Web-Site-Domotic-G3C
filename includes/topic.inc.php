<?php

session_start();

// Connexion à la base de données
include("../includes/DBconnexion.php");

if(isset($_SESSION['userId']) && isset($_SESSION['idCat']))
{
	$userId = $_SESSION['userId'];
	$catId = $_SESSION['idCat'];
	$title = htmlspecialchars($_POST['title']);

	if((preg_match("#(*UTF8)[[:alnum:]]#", $title)))
	{
		$dateCreate = date("Y-m-d H:i:s");

		$req = $db->prepare('INSERT INTO forum_topics (idCategoryTopics, titleTopics, idCreatorTopics, lastDateTopics) VALUES(:catId, :title, :userId, :datePost)');

		$req->execute(array(
			'catId' => $catId,
			'title' => $title,
			'userId' => $userId,
			'datePost' => $dateCreate
		));
		if($userId = 1)
			header('Location: ../php/admin_forum_topics.php?idCat='.$catId);
		else
			header('Location: ../php/forum_topics.php?idCat='.$catId);
	}
	else
	{
		if($userId = 1)
			header('Location: ../php/admin_forum_topics.php?idCat='.$catId.'&error="invalidtitle"');
		else
			header('Location: ../php/forum_topics.php?idCat='.$catId.'&error="invalidtitle"');
	}			
}
else
	{
		if($userId = 1)
			header('Location: ../php/admin_forum_topics.php?idCat='.$catId.'&error="invalidloginortopic"');
		else
			header('Location: ../php/forum_topics.php?idCat='.$catId.'&error="invalidloginortopic"');
	}

?>