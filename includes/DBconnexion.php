<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=domus', 'root', '', array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
?>
