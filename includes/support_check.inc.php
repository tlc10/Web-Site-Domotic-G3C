<?php
include("../includes/DBconnexion.php");

$idMessage=$_GET['idMessage'];
$req = $db->prepare("UPDATE assistance SET isRead='true' WHERE idMessage=:idMessage");
$req->execute(array(
	'idMessage' => $idMessage,
));
header('Location: ../php/admin_support_data_check.php');
?>