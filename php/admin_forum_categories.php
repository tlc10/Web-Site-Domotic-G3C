<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Forum</title>
    <link rel="stylesheet" type="text/css" href="../css/header_admin.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/categories_display.css">
    <script type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../scripts/header_admin.js"></script>
</head>
<?php include("../includes/header_admin.php"); ?>

<body>      
    <h1>Les catégories du forum </h1> <br />
    <div class="categorie"> 
        <?php displayCategories(); ?>   
    </div>
    <div class="modifier">
        <div class="addCategorie">
            <form action="../includes/add_category.php" method="post">
                <label for="name">Entrez le nom de catégorie à ajouter  </label> : <input type="text" name="name" id="name" /><br />
                <label for="name">Entrez une description </label> : <input type="text" name="desc" id="desc" /><br />
                <label for="areaHouse">Numéro d'ordre </label> : <input type="number" name="order" id="order" /><br />
                <input type="submit" value="Valider" />            
            </form>
        </div>
        <div class="deleteCategorie">
            <form action="../includes/delete_category.php" method="post">
                <label for="name">Entrez le nom de la catégorie à supprimer </label> : <input type="text" name="name" id="name" /><br />
                <input type="submit" value="Valider" />
            </form>
        </div>
    </div> 
</body>
<?php include("../includes/footer.php"); ?>
</html>
<?php

    function displayCategories() 
    { 
        include("../includes/DBconnexion.php");
       
        $req=$db -> query("SELECT idCategories, nameCategories, descCategories, orderCategories FROM forum_categories ORDER by orderCategories");

        while($data = $req -> fetch())
        {
            $idCat = $data['idCategories'];
            echo '<a href="admin_forum_topics.php?idCat='.$idCat.'"\'>'.$data['nameCategories'].' </a> <br /> 
            Numéro d\'ordre : '.$data['orderCategories'].' <br />' .$data['descCategories']. '<br /><br />';
        }
        $req->closeCursor(); 
    }
?>
    