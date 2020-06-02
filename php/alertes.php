<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Alertes</title>
		<link rel="stylesheet" type="text/css" href="../css/Alertes.css">
		<link rel="stylesheet" type="text/css" href="../css/header.css">
		<link rel="stylesheet" type="text/css" href="../css/footer.css">
		<script type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="../scripts/header.js"></script>
	</head>
	<?php  include "../includes/header.php"; ?>
	<body>
		<h1>Alertes</h1>
		<div id="conteneur">
			<div id="contenu">
				<h2 id="question">Sélectionnez les domaines pour lesquels vous souhaitez être alerté :</h2>
					<form id="form-resp" action="#" name="" method="post">
						<ul>
							<li>
								<input type="checkbox" name="Présence suspecte" id="Présence suspecte" />
								<label for="Présence suspecte">Présence suspecte</label>
							</li>
							<li>
								<input type="checkbox" name="Consommation élevée" id="Consommation élevée" />
								<label for="Consommation élevée">Consommation élevée</label>
							</li>
							<li>
								<input type="checkbox" name="Fuite de gaz" id="Fuite de gaz" />
								<label for="Fuite de gaz">Fuite de gaz</label>
							</li>
							<li>
								<input type="checkbox" name="Fuite d'eau" id="Fuite d'eau" />
								<label for="Fuite d'eau">Fuite d'eau</label>
							</li>
							<li>
								<input type="checkbox" name="Panne de capteur" id="Panne de capteur" />
								<label for="Panne de capteur">Panne de capteur</label>
							</li>
						</ul>	
					</form>	
			</div>
		</div>
	</body>
	<?php include("../includes/footer.php"); ?>
</html>