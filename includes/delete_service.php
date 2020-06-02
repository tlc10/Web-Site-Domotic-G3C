<?php
// Connexion à la base de données
include("../includes/DBconnexion.php");

if(isset($_POST['title2Suppr'])){
$title2Suppr=$_POST['title2Suppr'];
$sql = "DELETE FROM service WHERE title2=:title2Suppr";
$query = $db->prepare($sql);
$query->bindValue(':title2Suppr',$title2Suppr,PDO::PARAM_STR);
$query->execute();
}
header('Location: ../php/admin_modifier_services.php');
?>