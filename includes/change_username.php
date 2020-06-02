<?php 

session_start();

include("../includes/DBconnexion.php");

$newUsername = $_POST['nusername'];
$userId = $_SESSION['userId'];

$_SESSION['userUid'] = $newUsername;

$query=$db->prepare("UPDATE users SET uidUsers=:nusr WHERE idUsers=:id");
$query->bindValue(':nusr',$newUsername,PDO::PARAM_STR);
$query->bindValue(':id',$userId,PDO::PARAM_INT);
$query->execute();
header("Location: ../php/client_profil_view.php");
exit();
?>