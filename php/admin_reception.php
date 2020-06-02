<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Accueil Domus</title>
		<link rel="stylesheet" type="text/css" href="../css/accueil_admin.css">
		<link rel="stylesheet" href="../css/header_admin.css">
		<link rel="stylesheet" href="../css/footer.css">
		<script type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="../scripts/accueil.js"></script>
		<script src="../scripts/header_admin.js"></script>
	</head>
	<?php include("../includes/header_admin.php"); ?>
	<body>
		<div class="container">
			<div class="block1"><a href="../php/admin_support_data_check.php">Message du support client</a></div>
			<div class="block2"><a href="../php/admin_forum_categories.php">Forum</a></div>
			<div class="block5"><a href="../php/admin_faq.php">FAQ</a></div>
		</div>
		<div class="container2">
			<div class="block3"><a href="../php/admin_modifier.php">Modifier Page</a></div>
			<div class="block4"><a href="../php/admin_client_data_display.php">Clients</a></div>
		</div>
	</body>
	<?php include("../includes/footer.php"); ?>
</html>