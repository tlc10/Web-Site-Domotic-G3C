<?php
// Connexion à la base de données
/*try
{
	$bdd = new PDO('mysql:host=localhost;dbname=domus;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
if(isset($_POST['recherche'])){
	$clients=$_POST["recherche"];
}
$req== $bdd->query("SELECT uidUsers FROM users");
while($client=$req->fetch()){
	echo $client
};*/
// Connexion à la base de données
include("../includes/DBconnexion.php");

if(isset($_GET['recherche']))
{
	$clients=$_GET['recherche'];
	$query=$db->prepare("SELECT * FROM users WHERE uidUsers=:client");
	$query->bindValue(':client',$clients,PDO::PARAM_STR);
	$query->execute();
	while($client=$query->fetch()){
	$_SESSION['succes']="Voici tous les noms";
	header('Location: ../php/client_profil_view.php.php');

}}/*
$req= $bdd->query("SELECT * FROM users WHERE uidUsers=$clients");
while($client=$req->fetch()){
	echo $client['uidUsers'];
};*/

?>