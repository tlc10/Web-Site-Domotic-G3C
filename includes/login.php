<!DOCTYPE html>
<html>
	<head>
		<meta charset="uft-8">
		<link rel="stylesheet" type="text/css" href="../css/style_ft_login.css">
		<link rel="stylesheet" type="text/css" href="../css/login.css">
		<link rel="stylesheet" type="text/css" href="../css/header.css">
		<script type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="../scripts/header.js"></script>
		<title>Se Connecter</title>
	</head>

	<?php require "header.php"; ?>
	<body>
		<div class="form">
			<?php
				if (isset($_SESSION['userId'])) {
						echo '<form class="form_login" action="logout.inc.php" method="post">
				<button type="submit"  name="logout-submit">Logout</button></form>';
						echo '<p class="login-status">Vous etes connecté!</p>';
				}
				else{
					echo '<form action="login.inc.php" method="post">
				<input type="text" name="mailuid" placeholder="Username/E-mail..">
				<input type="password" name="pwd" placeholder="Password..">
				<button class="login_button" type="submit"  name="login-submit">Login</button>
				</form>
				<a href="signup.php">Sign up</a>';
				}
			?>		
		</div>
	</body>
</html>