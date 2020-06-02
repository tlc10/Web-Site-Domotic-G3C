<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Forum</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/categories_display.css">
    <script type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../scripts/header.js"></script>
</head>
<?php include("../includes/header.php"); ?>

<body>      
    <h1>Les catégories du forum </h1> <br />
    <div class="categorie"> 
        <?php displayCategories(); ?>   
    </div> 
</body>
<?php include("../includes/footer.php"); ?>
</html>
<?php

    function displayCategories() 
    { 
        include("../includes/DBconnexion.php");
       
        $req=$db -> query("SELECT idCategories, nameCategories, descCategories, orderCategories FROM forum_categories ORDER by orderCategories");

        while($data = $req -> fetch() )
        {
            $idCat = $data['idCategories'];
            echo '<a href="forum_topics.php?idCat='.$idCat.'"\'>'.$data['nameCategories'].' </a><br />';
            echo $data['descCategories']. '<br /><br />';
        }
        $req->closeCursor(); 
    }
?>
    