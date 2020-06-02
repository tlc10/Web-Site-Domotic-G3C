<?php 
	session_start();

	//connexion db 
	include("../includes/DBconnexion.php");

	//On change le mail de l'utilisateur. 

	$newMail = $_POST['nmail'];
	$userId = $_SESSION['userId'];

	$_SESSION['emailUsers'] = $newMail;
	

	$query=$db->prepare("UPDATE users SET emailUsers=:mail WHERE idUsers=:id");
	$query->bindValue(':mail',$newMail ,PDO::PARAM_STR);
	$query->bindValue(':id',$userId,PDO::PARAM_INT);
	$query->execute();
	header("Location: ../php/client_profil_view.php");
	exit();

?>