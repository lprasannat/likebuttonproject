<?php
include('core/init.php');

?>
<html>
    <head>
        <title>Article</title>
        <link href='css/style.css' rel='stylesheet'>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/like.js"></script>
    </head>
    <body>
        <?php
        if(article_exists(1)===true){
            echo "exist";
        }
        $articles=getArticles();
        //echo count($articles);
        if(count($articles)==0){
            echo "there are no articles";
        }
        else{
            echo "<ul>";
            foreach($articles as $article)
            {              
                //print_r($article);
                echo "<li><p>", $article['article_title'],"</li><p><a  class='like' href='#' onclick=like_add(",$article['article_id'],")>Like</a><span id='article_",$article['article_id'],"_like'>",$article['article_likes'],"</span>likes</p></p>";
            }
            echo "</ul>";
        }
        ?>
    </body>
</html>