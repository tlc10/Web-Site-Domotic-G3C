
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Accueil Domus</title>
		<link rel="stylesheet" type="text/css" href="../css/accueil.css">
		<link rel="stylesheet" href="../css/header.css">
		<link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/sensor_client.css">
		<script type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="../scripts/accueil.js"></script>
		<script src="../script/header.js"></script>

	</head>
	<body>
    <?php include("../includes/header.php"); ?>
    <div class="house_data">
      <h1> Liste des capteurs </h1><br />
      <div class="MAISON">
      <?php listSensors(); ?>
      </div>
    <div class="modif_sensor">
    <div class="ajout_sensor">
    <h1>Voulez-vous ajouter un capteur?</h1></br>
    <form class="ajout" action="../includes/add_sensor.php" method="post">
      <input type="text" name="type" placeholder="type"></br>
      <input type="number" name="donnee" placeholder="donnee"></br>
      <input type="submit" value="Appliquer"></br>
    </form>
    </div>
    <div class="supprimer_sensor">
    <h1>Voulez-vous supprimer un capteur?</h1></br>
    <form class="ajout" action="../includes/delete_sensor.php" method="post">
      <input type="text" name="type" placeholder="type"></br>
      <input type="submit" value="Appliquer"></br>
    </form>
    </div>
    </div>
    </div>
    <?php include("../includes/footer.php"); ?> </div>
	</body>
</html>

<?php
  function listSensors()
  {
    include("../includes/DBconnexion.php");
    if(isset($_GET['idRoom']))
    {
      $id= $_SESSION['idRoom'] = $_GET['idRoom'];
      $query=$db->query("SELECT * FROM sensor WHERE idRoom=$id ");
      while($sensor=$query->fetch())
      {
        echo '<div class="icon_piece"><img src="../images/sensor.png">'.'</br>'.$sensor['type'].'</div>';
      } 
    }
  }       
?>