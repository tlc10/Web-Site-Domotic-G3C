<!DOCTYPE html>
<html>

	<head>
		<meta charset="uft-8">
		<link rel="stylesheet" type="text/css" href="../css/style_ft_login.css">
		<link rel="stylesheet" type="text/css" href="../css/login.css">
		<link rel="stylesheet" type="text/css" href="../css/header.css">
		<link rel="stylesheet" type="text/css" href="../css/footer.css">
		<link rel="stylesheet" type="text/css" href="../css/mon_profil.css">
		<script type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="../scripts/header.js"></script>
		<title>Mon profil</title>
	</head>

	<?php include "../includes/header.php"; ?>

	<h1 class="title">Mon Profil</h1>

	<?php
		if (isset($_SESSION['userId'])) {
			$nom = $_SESSION['userUid'];
			$mail = $_SESSION['emailUsers'];
			$firstName = $_SESSION['firstName'];
			$lastName = $_SESSION['lastName'];

				echo '<p class="sous_titre">Nom d\'utilisateur: '.$nom.'<br>
											Votre mail actuel: '.$mail.'<br>
											Nom: '.$firstName.'<br>
											Prénom: '.$lastName.'<br></p>';

				echo'<p class="sous_titre"><br> 
											Souhaitez-vous modifier votre nom d\'utilisateur?</p>


					<form action="../includes/change_username.php" method="post" class="cpassword">
					<input type="text" name="nusername" placeholder="Nouveau nom d\'utilisateur">
					<button class="change_username_button" type="submit"  name="change_username">Modifier mon nom d\'utilisateur</button>
					</form>';

				echo '<p class="sous_titre"><br> 
											Souhaitez-vous modifier votre mot de passe?</p>

				<form action="../includes/change_password.php" method="post" class="cpassword">
				<input type="password" name="opwd" placeholder="Ancien Mot de Passe">
				<input type="password" name="npwd" placeholder="Nouveau Mot de Passe">
				<button class="change_password_button" type="submit"  name="change_password">Modifier mon Mot de Passe</button>
				</form>';

				echo'<p class="sous_titre"><br> 
											Souhaitez-vous modifier le mail associé à votre compte?</p>


					<form action="../includes/change_mail.php" method="post" class="cpassword">
					<input type="text" name="nmail" placeholder="Nouveau mail associé">
					<button class="change_mail_button" type="submit"  name="change_mail">Modifier mon adresse mail</button>
					</form>';

				echo'<p class="sous_titre"><br> 
											Souhaitez-vous modifier le nom et le prénom associés à votre compte?</p>


					<form action="../includes/change_names.php" method="post" class="cpassword">
					<input type="text" name="nprenom" placeholder="Nouveau prénom">
					<input type="text" name="nnom" placeholder="Nouveau nom">
					<button class="change_names_button" type="submit"  name="change_names">Modifier mon nom et prénom</button>
					</form>';
				}
		else {
				echo '<p class="sous_titre">Vous etes deconnecté</p>';
			}
	?>
	<?php include "../includes/footer.php"; ?>
</html>