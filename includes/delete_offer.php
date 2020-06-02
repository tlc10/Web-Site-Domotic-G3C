<?php
// Connexion à la base de données
include("../includes/DBconnexion.php");

if(isset($_POST['titleSuppr'])){
$titleSuppr=$_POST['titleSuppr'];
$sql = "DELETE FROM offer WHERE title=:titleSuppr";
$query = $db->prepare($sql);
$query->bindValue(':titleSuppr',$titleSuppr,PDO::PARAM_STR);
$query->execute();
}
header('Location: ../php/admin_modifier_offers.php');
?>