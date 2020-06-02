
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Accueil Domus</title>
		<link rel="stylesheet" type="text/css" href="../css/clients.css">
		<link rel="stylesheet" href="../css/header_admin.css">
		<link rel="stylesheet" href="../css/footer.css">
		<script type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="../scripts/accueil.js"></script>
		<script src="../scripts/header_admin.js"></script>

	</head>
	<?php include("../includes/header_admin.php"); ?>
	<body>
		<h2>Quel client voulez-vous rechercher ?</h2>
		<form class="client">
			<input type="text" name="recherche" placeholder="Taper un nom à rechercher">
		</form>
		<div class="information">
		<?php readName()?>
		<?php
		function readName(){
			include("../includes/DBconnexion.php");
			if(isset($_GET['recherche'])){
			$clients=$_GET['recherche'];
			$query=$db->prepare("SELECT * FROM users WHERE uidUsers=:client");
			$query->bindValue(':client',$clients,PDO::PARAM_STR);
			$query->execute();
			while($client=$query->fetch()){
				echo '<h4>Pseudo :</h4>'.$client['uidUsers'].'</br>'.'<h4>Numéro de téléphone :</h4>'.$client['phoneNbUsers'].'</br>'.'<h4>Adresse mail :</h4>'.$client['emailUsers'] .'</br>'.'<h4>Adresse :</h4>'.$client['adressUsers'].'</br>'.'<h4>Prénom :</h4>'.$client['firstNameUsers'].'</br>'.'<h4>Nom :</h4>'.$client['lastNameUsers'].'</br>'.'<h4>Numéro offre :</h4>'.$client['offersUsers'];
				}
			}
			else{
				$query=$db->query("SELECT * FROM users");
				while($client=$query->fetch()){
					echo $client['uidUsers'].'</br>';
				}
			}
		}?>
		</div>
	</body>
	<?php include("../includes/footer.php"); ?>
</html>