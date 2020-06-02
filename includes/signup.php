<!DOCTYPE html>
<html>
<head>
	<meta charset="uft-8">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" type="text/css" href="../css/header.css">
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../css/signup.css">
	<script type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="../script/header.js"></script>
	<title>Se Connecter</title>
</head>
<?php require "header.php"; ?>
<body>
	<main>
		<div class="signup">
			<section class="section-default">
				<h1 class="signup_h1">Sign up</h1>
				<?php
				if (isset($_GET['error'])) {
					if ($_GET['error'] == "emptyfields") {
						echo '<p>Remplir tous les champs!</p>';
					}
					elseif ($_GET['error'] == "invaliduidmail") {
						echo '<p>Username et email invalides!</p>';
					}
					elseif ($_GET['error'] == "invaliduid") {
						echo '<p>Username invalide!</p>';
					}
					elseif ($_GET['error'] == "invalidmail") {
						echo '<p>Email invalide!</p>';
					}
					elseif ($_GET['error'] == "passwordcheck") {
						echo '<p>Mauvais mot de passe!</p>';
					}
					elseif ($_GET['error'] == "usertaken") {
						echo '<p>Username déjà pris!</p>';
					}
					elseif ($_GET['error'] == "invaliphonenb") {
						echo '<p>Numéro de téléphone invalide !</p>';
					}
					elseif ($_GET['error'] == "invalidadress") {
						echo '<p>Adresse invalide !</p>';
					}
					elseif ($_GET['error'] == "invalifirstname") {
						echo '<p>Prénom invalide !</p>';
					}
					elseif ($_GET['error'] == "invalidlastname") {
						echo '<p>Nom invalide !</p>';
					}
					elseif ($_GET['error'] == "invalidoffer") {
						echo '<p> Offre invalide !</p>';
					}
				}
				else if (isset($_GET['signup'])) {
					if ($_GET['signup'] == "success") {
						echo '<p>Vous vous etes enregistré avec succès!</p>';
					}

				}

				?>
				<form class="form_signup" action="../includes/signup.inc.php" method="post">
					<input type="text" name="uid" placeholder="Username">
					<input type="text" name="mail" placeholder="Email">
					<input type="password" name="pwd" placeholder="Password">
					<input type="password" name="pwd-repeat" placeholder="Repeat Password"> 
					<input type="text" name="phoneNb" placeholder="Numéro de téléphone">
					<input type="text" name="adress" placeholder="Adresse">
					<input type="text" name="firstName" placeholder="Prénom">
					<input type="text" name="lastName" placeholder="Nom">
					<input type="text" name="offer" placeholder="Offre">
					<button type="submit" name="signup-submit">Sign Up</button>

				</form>

			</section>
		</div>

	</main>
</body>
<?php require "footer.php"; ?>
</html>