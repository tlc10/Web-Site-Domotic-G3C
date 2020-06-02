<?php 

session_start();

include("../includes/DBconnexion.php");

$newFirstName = $_POST['nprenom'];
$newLastName = $_POST['nnom'];
$userId = $_SESSION['userId'];

$_SESSION['firstName'] = $newFirstName;
$_SESSION['lastName'] = $newLastName;

$query=$db->prepare("UPDATE users SET lastNameUsers=:nname, firstNameUsers=:fname WHERE idUsers=:id");
$query->bindValue(':fname',$newFirstName ,PDO::PARAM_STR);
$query->bindValue(':nname',$newLastName ,PDO::PARAM_STR);
$query->bindValue(':id',$userId,PDO::PARAM_INT);
$query->execute();

header("Location: ../php/client_profil_view.php");
exit();

?>