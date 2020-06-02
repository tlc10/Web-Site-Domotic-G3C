<?php
// Connexion à la base de données
session_start();
include("../includes/DBconnexion.php");

$idRoom=$_SESSION['idRoom'];
$type=$_POST['type'];
$donnee = $_POST['donnee'];
$req = $db->prepare('INSERT INTO sensor (idRoom,type,donnee) VALUES(:idRoom,:type,:donnee)');

$req->execute(array(
	'idRoom' => $idRoom,
	'type' => $type,
	'donnee' => $donnee,
));
header('Location: ../php/client_sensors.php?idRoom='.$idRoom);
?>