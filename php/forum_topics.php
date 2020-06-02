<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Topics</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/display_topics.css">
    <script type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../scripts/header.js"></script>
</head>
<?php include("../includes/header.php"); ?>
<body>
	<h1>Liste des topics </h1> <br />
	<div class="categorie"> 
		<table>
			<thead> 
				<tr>
					<th>Nom du topic</th>
					<th>Créateur</th>
					<th>Dernier message</th>
				</tr>
			</thead>
			<tbody>
				<?php displayTopics() ?>
			</tbody>
		</table>
	</div>
	<div class="createTopic">
		<?php createATopic() ?>
	</div> 
</body>
<?php include("../includes/footer.php"); ?>
</html>

<?php
    function displayTopics() 
    { 
        include("../includes/DBconnexion.php");

        if(isset($_GET['idCat']))
        {
            $idCat = $_SESSION['idCat'] = $_GET['idCat'];
            $req=$db -> query("SELECT t.idTopics, t.titleTopics, t.idCreatorTopics, t.lastDateTopics, u.uidUsers FROM forum_topics t
            LEFT JOIN users u ON u.idUsers = t.idCreatorTopics
            WHERE t.idCategoryTopics = $idCat
            ORDER by t.lastDateTopics DESC");

            while($data = $req -> fetch())
            {
                $idTopic = $data['idTopics'];
                echo '<tr>
                    <td><a href="forum_topic_view.php?idTopic='.$idTopic.'"\'>'.$data['titleTopics']. '</a> </td>
                    <td>' .$data['uidUsers']. ' </td>
                    <td>' .$data['lastDateTopics']. '</td>
                    </tr>';
            }
            $req->closeCursor();
        }
    }

    function createATopic()
    {
        if(isset($_SESSION['userId']))
        {
            echo '<form action="../includes/topic.inc.php" method="post">
            		<label for="title"> Entrez le titre du topic à ajouter : </label><br />    
                    <textarea name="title" id="title" rows="1" cols="50"></textarea><br />
                    <input type="submit" value="Valider" />
                </form>';
        }
    }
?>
    