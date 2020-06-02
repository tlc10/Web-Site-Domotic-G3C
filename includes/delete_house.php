<?php
// Connexion à la base de données
include("../includes/DBconnexion.php");

if(isset($_POST['houseName'])){
$houseName=$_POST['houseName'];
$sql = "DELETE FROM houses WHERE nameHouses=:houseName";
$query = $db->prepare($sql);
$query->bindValue(':houseName',$houseName,PDO::PARAM_STR);
$query->execute();
}
header('Location: ../php/client_houses.php');
?>