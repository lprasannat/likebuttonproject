<?php
session_start();
$_SESSION['user_id']='1';
include('database/connection.php');
include('function/article.php');
include('function/like.php');
?>