<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="UTF-8">
        <title>Contrôle ton habitat à distance!</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/stylepositionvolets.css">
        <link rel="stylesheet" type="text/css" href="../css/header.css">
        <link rel="stylesheet" type="text/css" href="../css/footer.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="header_V.1.js"></script>
    </head>
    <?php include("../includes/header.php"); ?>
    <body>
       
        <h1>Vous souhaitez gérer la position des volets...</h1>
                    
            

        <form method="post" action="GestionPositionVolets.php">
            <select name="choix_piece">
                <?php ReadRoom(); ?>
            </select>
        <br><br>
        <h2> Vous souhaitez que les volets soient..</h2>
        <br>
        <select name="choix_position_volets">
            <option value="ouverts">ouverts</option>
            <option value="fermés">fermés</option>
        </select>
        <br><br>
        <input type="submit" value="Valider" /> 
        </form>
        <br><br>
        <?php DisplayMessage(); ?>      
      
    </body>
    <?php include("../includes/footer.php"); ?>



 <?php 
function ReadRoom(){
    
    if(isset($_SESSION['idHouse']))
    {
        include("../includes/DBconnexion.php");
        $id= $_SESSION['idHouse'];
        $req=$db -> query("SELECT name FROM rooms WHERE idHouse = $id");
        while( $data = $req -> fetch() )
        {
            echo "<option value=".$data['name'].">".$data['name']."</option>";
        }
        $req->closeCursor();
    }
}
?>

<?php 
function DisplayMessage(){
    if (isset($_POST['choix_position_volets']) AND isset($_POST['choix_piece'])) {
        if ($_POST['choix_position_volets'] == "fermés") {
            echo "Les volets ". $_POST['choix_piece']." sont ".$_POST['choix_position_volets']."! "."<i class='fas fa-lock'></i>";
        }
        else if ($_POST['choix_position_volets'] == "ouverts") {
            echo "Les volets ". $_POST['choix_piece']." sont ".$_POST['choix_position_volets']."! "."<i class='fas fa-lock-open'></i>";
        }
        
    }
}
?>

</html>


