<?php
session_start()
?>
<header>
	<div class="container">
		<nav class="ordinateur">
			<a href="../php/index.php"><img src="../images/logo_domus_blanc.png" alt="logo" class="logo"></a>
			<ul>
				<li class="active"><a href="../php/admin_reception.php">Accueil-Administrateur</a></li>
				<li ><?php if(isset($_SESSION['userId'])){
					echo '<a href="../includes/logout.inc.php">Se Déconnecter</a>';
				}else{
					echo '<a href="../includes/login.php">Se Connecter</a>';
				}?></li>
			</ul>
		</nav>
	</div>
</header>