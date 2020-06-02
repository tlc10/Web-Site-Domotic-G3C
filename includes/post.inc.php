<?php

session_start();

// Connexion à la base de données
include("../includes/DBconnexion.php");

if(isset($_SESSION['userId']) && isset($_SESSION['idTopic']))
{
	$userId = $_SESSION['userId'];
	$topicId = $_SESSION['idTopic'];
	$message = nl2br(htmlspecialchars($_POST['message'])); 
	$dateTime = date("Y-m-d H:i:s");

	if((preg_match("#(*UTF8)[[:alnum:]]#", $message)))
	{
		$req = $db->prepare('INSERT INTO forum_posts (idTopicPosts, idCreatorPosts, textPosts, datePosts) VALUES(:topicId, :userId, :message, :datePost)');

		$req->execute(array(
			'userId' => $userId,
			'topicId' => $topicId,
			'message' => $message,
			'datePost' => $dateTime
		));

		$req = $db->prepare('UPDATE forum_topics SET lastDateTopics=:datePost WHERE idTopics=:topicId');

		$req->execute(array(
			'topicId' => $topicId,
			'datePost' => $dateTime
		));
		if($userId = 1)
			header('Location: ../php/admin_forum_topic_view.php?idTopic='.$topicId);
		else
			header('Location: ../php/forum_topic_view.php?idTopic='.$topicId);
	}
	else
	{
		if($userId = 1)
			header('Location: ../php/admin_forum_topic_view.php?idTopic='.$topicId.'&error="invalidmessage"');
		else
			header('Location: ../php/forum_topic_view.php?idTopic='.$topicId.'&error="invalidmessage"');
	}			
}
else
	{
		if($userId = 1)
			header('Location: ../php/admin_forum_topic_view.php?idTopic='.$topicId.'&error="invalidloginortopic"');
		else
			header('Location: ../php/forum_topic_view.php?idTopic='.$topicId.'&error="invalidloginortopic"');
	}
?>