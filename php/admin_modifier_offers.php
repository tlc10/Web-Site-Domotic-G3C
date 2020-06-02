<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Accueil Domus</title>
		<link rel="stylesheet" type="text/css" href="../css/accueil_admin.css">
		<link rel="stylesheet" href="../css/header_admin.css">
		<link rel="stylesheet" href="../css/footer.css">
		<link rel="stylesheet" type="text/css" href="../css/modifOffre.css">
		<script type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="../scripts/accueil.js"></script>
		<script src="../scripts/header_admin.js"></script>

	</head>
	<?php include("../includes/header_admin.php"); ?>
	<body>
		<div class="offres">
		<h2>Notre entreprise vous propose ces différentes offres domotiques</h2>
		<?php
		include("../includes/DBconnexion.php");
		$query=$db->query("SELECT * FROM offer");
		while($offer=$query->fetch()){
			if($offer['image']==""){
				echo '<div class="offre"><div class="texte"><h3>'.$offer['title'].'</h3>'.'<p>'.$offer['texte'].'</p></div></div>';
			}
			else{
				echo '<div class="offre"><img src="'.$offer['image'].'"><div class="texte"><h3>'.$offer['title'].'</h3>'.'<p>'.$offer['texte'].'</p></div></div>';
			}
			
		}
		?></div>
		<div class="modif_offre">
    		<div class="ajout_offre">
		<h1>Voulez-vous ajouter une offre ?</h1>
		<form class="ajout" action="../includes/add_offer.php" method="post">
			<input type="text" name="titleAjout" placeholder="Titre"></br>
			<textarea type="text" name="commentaire" id="commentaire" rows="5" cols="40"></textarea></br>
			<input type="text" name="image" placeholder="chemin image"></br>
			<input type="submit" value="Appliquer"></br>
		</form>
		</div>
		<div class="supprimer_offre">
		<h1>Voulez-vous supprimer une offre ?</h1>
		<form class="ajout" action="../includes/delete_offer.php" method="post">
			<input type="text" name="titleSuppr" placeholder="Titre"></br>
			<input type="submit" value="Appliquer"></br>
		</form>
	</div>
</div>
	</body>
	<?php include("../includes/footer.php"); ?>
</html>