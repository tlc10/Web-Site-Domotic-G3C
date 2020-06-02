<?php
session_start();
// Connexion à la base de données
include("../includes/DBconnexion.php");

if(isset($_POST['type'])){
$type=$_POST['type'];
$idRoom=$_SESSION['idRoom'];
$sql = "DELETE FROM sensor WHERE type=:type AND idRoom=$idRoom ";
$query = $db->prepare($sql);
$query->bindValue(':type',$type,PDO::PARAM_STR);
$query->execute();
}
header('Location: ../php/client_sensors.php?idRoom='.$idRoom);
?>