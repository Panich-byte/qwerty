<?php
session_start();
$_SESSION["msg"]=$_SESSION["msg"]??"Заполните все поля анкеты...";
$_SESSION["alert"]=$_SESSION["alert"]??"alert-warning";
require_once "app/bootstrap.php";
$posts = $newPost->getAllPosts();

require_once "app/views/page3.php";