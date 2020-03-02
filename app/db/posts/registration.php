<?php
require_once "app/bootstrap.php";

if(count($_POST)>0){
    $id= $users->registration($_POST);
    header("Location /");
    exit;
}
require_once "views/users/registration.view.php";
