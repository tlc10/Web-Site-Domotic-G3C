<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=domus;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}
$idMessage=$_GET['idMessage'];
$req = $bdd->prepare("DELETE FROM assistance WHERE idMessage=:idMessage");
$req->execute(array(
	'idMessage' => $idMessage,
));
header('Location: ../php/admin_support_data_check.php');
?>