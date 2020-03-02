<?php
require_once "app/bootstrap.php";
$title = "Просмотр информации";
$post = $newPost->getPostID($_GET['id']);
if(!$post){
    header("Location: /");
    exit;
}
require_once "app/views/showPost.view.php";