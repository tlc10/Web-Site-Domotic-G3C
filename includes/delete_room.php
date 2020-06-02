<?php
session_start();
// Connexion à la base de données
include("../includes/DBconnexion.php");

if(isset($_POST['nameRoom'])){
$nameRoom=$_POST['nameRoom'];
$id=$_SESSION['idHouse'];
$sql = "DELETE FROM rooms WHERE name=:nameRoom AND idHouse=$id";
$query = $db->prepare($sql);
$query->bindValue(':nameRoom',$nameRoom,PDO::PARAM_STR);
$query->execute();
}
header('Location: ../php/client_rooms.php?idHouse='. $id);
?>