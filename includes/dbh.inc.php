<?php

$servername = "localhost";
$dbUsername = "root";
$dBPassword = "";
$dBName = "domus";

$conn = mysqli_connect($servername, $dbUsername, $dBPassword, $dBName);

//si la connection à db failed
if(!$conn){
	die("Connection failed: ".mysql_connect_error());
}

?>