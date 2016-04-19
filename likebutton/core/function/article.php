<?php

include('core/database/connection.php');

function getArticles() {
    $link = mysqli_connect("localhost", "dbuser", '123', "likebutton");
    //$articles=array();
    $Query = "SELECT `article_id`,`article_title`,`article_likes` FROM article";
    $Result = mysqli_query($link, $Query);
    //$Row=mysqli_fetch_array($Result);    
    while ($Row = mysqli_fetch_assoc($Result)) {
        $articles[] = array(
            'article_id' => $Row['article_id'],
            'article_title' => $Row['article_title'],
            'article_likes' => $Row['article_likes']
        );
        
    }
    //echo "<pre>".print_r($articles);
    return $articles;
}

?>