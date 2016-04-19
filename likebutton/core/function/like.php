<?php
function article_exists($article_id){
    $con=mysqli_connect("localhost","dbuser",123,"lakshmi");
    $article_id=(int)$article_id;
    return (mysqli_query("$con,SELECT `article_id` FROM `article` WHERE `article_id`='$article_id'")==0)?false:true;
}
function previously_liked($article_id){
    
}
function like_count($article_id){
    
}
function add_like($article_id){
    
}

?>