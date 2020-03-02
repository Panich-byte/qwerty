<?php
session_start();
require_once "app/bootstrap.php";
$_SESSION["msg"]="";
if (count($_POST)>0){
    $showUser=$user->authorization($_POST);
    if($showUser!=null)
    {
        $_SESSION["id"]=$showUser->id_user;
        $_SESSION["user"]=$showUser->login;
        header("Location: /");
        exit;
    }
    else $_SESSION["msg"]="Неправильный логин или пароль";
}

require_once "app/views/users/authorization.view.php";