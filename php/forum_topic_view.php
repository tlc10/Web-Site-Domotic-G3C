<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Post</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/topic_view.css">
    <script type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../scripts/header.js"></script>
</head>
<?php include("../includes/header.php"); ?>
<body>
    <?php
    	echo '<div class="topic">';
    	displayPosts();
    	echo '</div>';
    	echo '<div class="write">';
    	writePost();
    	echo '</div>';
        
    ?>    
</body>
<?php include("../includes/footer.php"); ?>
</html>

<?php

    function writePost()
    {
        if(isset($_SESSION['userId']))
        {
            echo '<form action="../includes/post.inc.php" method="post">
                    <label for="message"> Entrez votre message : </label> <br />      
                    <textarea name="message" id="message" rows="24" cols="100"></textarea><br />
                    <input type="submit" value="Valider" />
                </form>'; 
        }
    }
    
    function displayPosts() 
    { 
        include("../includes/DBconnexion.php");

        if(isset($_GET['idTopic']))
        {
            $idTopic = $_SESSION['idTopic'] = $_GET['idTopic']; 

            $req=$db -> query("SELECT p.idCreatorPosts, p.textPosts, p.datePosts, t.titleTopics, u.uidUsers FROM forum_posts p 
            INNER JOIN forum_topics t ON p.idTopicPosts = t.idTopics
            INNER JOIN users u ON u.idUsers = p.idCreatorPosts
            WHERE p.idTopicPosts = $idTopic
            ORDER BY p.datePosts ");

            $justOneTime = true;

            while($data = $req -> fetch())
            {
                if($justOneTime == true)
                {
                    echo '<h1> Nom du topic : ' .$data['titleTopics']. '</h1> <br />';
                    $justOneTime = false;
                }
                   
                echo '<div class="topicView"> 
                        <div class="userName">'.$data['uidUsers']. ' </div> 
                            <div class="post"> 
                            <div class="postMessage">' .$data['textPosts']. '</div>
                        <div class="date">' .$data['datePosts']. '</div>
                        </div> 
                    </div>';
            }
            $req->closeCursor();
        }

         
    }
?>
    