<?php
require_once "app/bootstrap.php";

if((!isset($_GET['id']) || empty($_GET['id'])) && (!isset($_GET['title']) || empty($_GET['title']))){
    exit;
}
$post=$newPost->getPostID($_GET['id']);
$fileName=$_FILES['photo']['name'];
$fileTmpName=$_FILES['photo']['tmp_name'];
$fileType=$_FILES['photo']['type'];
$fileError=$_FILES['photo']['error'];
$fileSize=$_FILES['photo']['size'];

$fileExtension = strtolower(end(explode('.',$fileName)));
$fileName = explode('.',$fileName)[0];

$extensions = ['jpg','jpeg','png'];

if(in_array($fileExtension,$extensions)) {
    if($fileSize<5000000){
        if($fileError === 0){
            if($post->photo!="default.jpg"){
                unlink("uploads/".$post->photo);
            }
            $_POST["photo"]=implode(".",[$fileName,$fileExtension]);
        }
    }else{
        $_POST["photo"] = "default.jpg";
    }
} else{
    $_POST["photo"]=$post->photo;
}
$id = $newPost->updatePost($_POST);
if($_FILES["photo"]["name"]!= null) {
    if($id != null){
        $fileDestination = "upleads/".$_POST["photo"];
        move_uploaded_file($fileTmpName,$fileDestination);
    }header("Location /");
    exit;
}

//if (count($_POST)>0) {
//    $_POST["id"] = $_GET['id'];
//    $id=$newPost->updatePost($_POST);
//    unlink('uploads/'.$post->photo);
//    if($id!=null){
//        $fileDestination = "uploads/".$_POST['photo'];
//        move_uploaded_file($fileTmpName,$fileDestination);
//    }
//    header("Location: /");
//    exit;
//}

require_once "app/views/updatePost.view.php";
