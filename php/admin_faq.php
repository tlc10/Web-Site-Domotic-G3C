<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/reset_FAQ.css"> 
	<link rel="stylesheet" href="../css/FAQ.css"> 
	<link rel="stylesheet" href="../css/header.css"> 
	<link rel="stylesheet" href="../css/footer.css">
	<script type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="../scripts/accueil.js"></script>
	<script src="../scripts/header_admin.js"></script> 
	<title>FAQ</title>
</head>
<?php include("../includes/header_admin.php"); ?>
<body>

	<img src="../images/faq_img.jpg" align="center">
	<section class="cd-faq">
		<div class="cd-faq-items">
			<ul id="basics" class="cd-faq-group">
				<?php readQuestion(); ?>
			</ul>
		</div>
		<section class="textarea">
			<form action="../includes/faq.inc.php" method="post">
				<label for = 'question'> Ajoutez une question </label>
				<br>
				<textarea name="question" id="question" rows="8" cols="45"></textarea>
				<br>
				<br>
				<label for = 'reponse'> Entrez une réponse </label>
				<br>
				<textarea name="reponse" id="reponse" rows="8" cols="45"></textarea>
				<br>
				<br>
				<input type="submit" value="Valider" />
			</form>
		</section>
	</body>
	<!-- <?php include("../includes/footer.php"); ?> !-->
</html>
<?php

	function readQuestion() 
	{
		include("../includes/DBconnexion.php");

		$req=$db -> query("SELECT Question, reponse FROM faq");

		while( $data = $req -> fetch() )
		{
			echo '<li>
			<a class="cd-faq-trigger" href="#0">'. $data['Question']. '</a>
			<div class="cd-faq-content"> 
			<p>'. $data['reponse']. '</p>
			</div> 
			</li>';
		}
		$req->closeCursor();
	}
?>