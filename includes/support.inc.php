<?php
// Connexion à la base de données
include("../includes/DBconnexion.php");

$email = $_POST['email'];
$message = $_POST['message'];

$req = $db->prepare("INSERT INTO assistance (emailUsers,message,isRead) VALUES(:email,:message,'false')");

$req->execute(array(
	'email' => $email,
	'message' => $message,
	));

session_start();
if(isset($_POST['message']) && isset($_POST['email']))
{
	$_SESSION['succes']="Message envoyé avec succès";
}
header('Location: ../php/support.php');
?>