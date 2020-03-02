<?php
require_once "app/bootstrap.php";
if(!isset($_GET['id']) || empty($_GET['id'])){
    exit;
}
$post=$newPost->getPostID($_GET['id']);

if (count($_POST)>0) {
    $_POST["id"] = $_GET['id'];
    if(file_exists('uploads/'.$post->photo)){
        if($post->photo!='default.jpg'){
            unlink('uploads/'.$post->photo);
        }
        $newPost->deletePost($_GET['id']);
    }
    header("Location /");
    exit;
}
require_once "app/views/deletePost.view.php";
