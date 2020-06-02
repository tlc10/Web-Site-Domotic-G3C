<!DOCTYPE html>
<!-- Header avec Se Connecter-->
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Assistance</title>
		<link rel="stylesheet" type="text/css" href="../css/header.css">
		<link rel="stylesheet" type="text/css" href="../css/assistancet.css">
		<link rel="stylesheet" type="text/css" href="../css/footer.css">
		<script type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="../scripts/accueil.js"></script>
		<script src="../scripts/header.js"></script>
	</head>
	<?php include("../includes/header.php"); ?>
	<body>
		<div class="assistance">
			<h2>Quel est votre requête ?</h2>
			<ul>
				<li>Avez-vous des questions ?</br> Vous pouvez consulter notre <a href="../php/client_faq.php">FAQ</a> ou jeter un coup d'oeil sur notre <a href="../php/forum_categories.php">forum</a> !</li>
				<li>Vous avez besoin de nous contacter par mail ?</br>
					
					<form method="post" action="../includes/support.inc.php">
						<label for="email"> Email </label>: <input type="email" name="email" id="email" value="
						<?php if(isset($_SESSION['emailUsers'])){echo $_SESSION['emailUsers'];} ?>" required/><br/>

						<p>Votre message<p>
						<textarea type="text" name="message" id="message" rows="20" cols="70"></textarea></br>
						<input type="submit" value="Envoyer"></br>
						
						<?php
						if(isset($_SESSION['succes']))
						{
							echo $_SESSION['succes'];
							$_SESSION['succes']="";

						}?>
					</form>
				</li>
				<li>Vous pouvez aussi nous appeler au 01 .. .. .. ..</br>
					<p>Service Client ouvert du lundi au samedi de 8h à 21h</p>
				</li>
			</ul>
		</div>
	</body>
	<?php include("../includes/footer.php"); ?>
</html>