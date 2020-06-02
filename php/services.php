<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Domotique G3C</title>
<link rel="stylesheet" type="text/css" href="../css/header.css">
<link rel="stylesheet" type="text/css" href="../css/footer.css">
<link rel="stylesheet" type="text/css" href="../css/services.css">
<script type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../scripts/header.js"></script>
</head>

<?php include("../includes/header.php"); ?>

<body>
<!--Environnement-->
<section  id="environnement">
    <h2>ENVIRONNEMENT</h2>
    <div class="services">
      <?php
      include("../includes/DBconnexion.php");

      $query=$db->query("SELECT * FROM service WHERE title1='environnement'");
      while($service=$query->fetch()){
        echo '<div class="service"><h3>'.$service['title2'].'</h3>'.'<p>'.$service['texte'].'</p></div>';
      }
      ?>
    </div>
</section>
<section  id="securite">
    <h2>SECURITE</h2>
    <div class="services">
      <?php
      include("../includes/DBconnexion.php");

      $query=$db->query("SELECT * FROM service WHERE title1='securite'");
      while($service=$query->fetch()){
        echo '<div class="service"><h3>'.$service['title2'].'</h3>'.'<p>'.$service['texte'].'</p></div>';
      }
      ?>
    </div>
</section>
<section  id="confort">
    <h2>CONFORT</h2>
    <div class="services">
      <?php
      include("../includes/DBconnexion.php");

      $query=$db->query("SELECT * FROM service WHERE title1='confort'");
      while($service=$query->fetch()){
        echo '<div class="service"><h3>'.$service['title2'].'</h3>'.'<p>'.$service['texte'].'</p></div>';
      }
      ?>
    </div>
</section>
<?php include("../includes/footer.php"); ?>
</body>
</html>