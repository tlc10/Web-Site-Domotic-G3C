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
	<script src="../scripts/header.js"></script> 
	<title>FAQ</title>
</head>
<?php include("../includes/header.php"); ?>
<body>

	<img src="../images/faq_img.jpg" align="center">
	<section class="cd-faq">
		<div class="cd-faq-items">
			<ul id="basics" class="cd-faq-group">
				<?php readQuestion(); ?>
			</ul>
		</div>
	</section>
	</body>
	<?php include("../includes/footer.php"); ?>
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