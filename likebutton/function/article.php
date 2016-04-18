<?php
//include('database/connection.php');
function getArticles(){   
    $articles=array();
    $Query=mysqli_query("SELECT `article_id`,`article_title`,`article_likes` FROM article");
    $Row=mysqli_fetch_assoc($Query);
    while($Row){
        echo $Row['article_title']."<br>";
    }
}
?>