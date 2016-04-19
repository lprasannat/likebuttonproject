<?php
session_start();
$_SESSION['user_id']='1';
include('core/database/connection.php');
include('core/function/article.php');
include('core/function/like.php');
?>