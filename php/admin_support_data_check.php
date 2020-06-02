<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Accueil Domus</title>
		<link rel="stylesheet" type="text/css" href="../css/messagerie.css">
		<link rel="stylesheet" href="../css/header_admin.css">
		<link rel="stylesheet" href="../css/footer.css">
		<script type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="../scripts/accueil.js"></script>
		<script src="../scripts/header_admin.js"></script>

	</head>
	<?php include("../includes/header_admin.php"); ?>
	<body>
		<h2> Tous les messages non lu </h2>
		<div class="message">
			<p class="email">Email</p>
			<p class="texte">Message</p>
			<p class="read">Marqué comme lu</p>
		</div>
		<?php
		include("../includes/DBconnexion.php");
		$messages= $db->query("SELECT * FROM assistance WHERE isRead='false'");
		while($message=$messages->fetch()){
			$idMessage=$message['idMessage'];
			echo '<div class="message"><h3 class="email">'.$message['emailUsers'].'</h3><p class="texte">'.$message['message'].'</p></br>'.'<a href="../includes/afficherMessage.php?idMessage='.$idMessage.'"\' class="read"><input type="checkbox" name="choix" /></a></br></div>';
		}	
		?>
		<h2>Les messages lus</h2>
		<div class="message">
			<p class="email">Email</p>
			<p class="texte">Message</p>
			<p class="read">Supprimer</p>
		</div>
		<?php
		include("../includes/DBconnexion.php");
		$messages= $db->query("SELECT * FROM assistance LIMIT 0,20");
		while($message=$messages->fetch()){
			$idMessage=$message['idMessage'];
			echo '<div class="message"><h3 class="email">'.$message['emailUsers'].'</h3><p class="texte">'.$message['message'].'</p></br>'.'<a href="../includes/supprimerMessage.php?idMessage='.$idMessage.'"\' class="read"><input type="checkbox" name="choix" /></a></br></div>';
		}	
		?>
	</body>
	<?php include("../includes/footer.php"); ?>
</html>