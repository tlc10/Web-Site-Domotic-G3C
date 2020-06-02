<?php

session_start();

// Connexion à la base de données
include("../includes/DBconnexion.php");
	
	$name = htmlspecialchars($_POST['name']); 
	$desc = htmlspecialchars($_POST['desc']); 
	$order = htmlspecialchars($_POST['order']);

if(preg_match("#(*UTF8)[[:alnum:]]#", $name) && preg_match("#(*UTF8)[[:alnum:]]#", $desc) && preg_match("/^[0-9]*$/", $order))
{
	$req = $db->prepare('INSERT INTO forum_categories (nameCategories, descCategories, orderCategories) VALUES(:name, :descr, :order)');

	$req->execute(array(
		'name' => $name,
		'descr' => $desc,
		'order' => $order
	));

	header('Location: ../php/admin_forum_categories.php');
}	
else
header('Location: ../php/admin_forum_categories.php?error="invalidCategory"');
?>