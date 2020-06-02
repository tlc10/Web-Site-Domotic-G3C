<?php

session_start();

// Connexion à la base de données
include("../includes/DBconnexion.php");

if(isset($_SESSION['userId']))
{
	$userId = $_SESSION['userId'];
	$idHouse = $_SESSION['idHouse'];
	$name = $_POST['nameRoom'];
	$sensorNb = $_POST['sensorNbRoom'];
	$type = $_POST['typeRoom'];
	
	$req = $db->prepare('INSERT INTO rooms (idHouse, type, name, sensorNb) VALUES(:idHouse, :type, :name, :sensorNb)');

	$req->execute(array(
		'idHouse' => $idHouse,
		'type' => $type,
		'name' => $name,
		'sensorNb' => $sensorNb
		));
}

header('Location: ../php/client_rooms.php?idHouse='. $idHouse);
?>