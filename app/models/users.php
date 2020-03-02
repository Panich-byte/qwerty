<?php
namespace App\models;

class users
{
    public function __construct()
    {
        $this->pdo = $pdo;
    }
    public function registration($data)
    {
        $stmt = $this->pdo->prepare("insert into practice_post.users(login,password) values (:login, :password)");
        return $stmt->execute([
            "login"=>$data["login"],
            "password" => $data["password"]
        ]) ? 1: -1;
    }

    public function authorization($data)
    {
        $stmt = $this->pdo->prepare("select * from practice_post.users where login= :login and password = :password");
        if($stmt->execute([
            "login" => $data["login"],
            "password" => $data["password"]
        ])) {
            if($stmt!=null) return $stmt->fetch();
            else return null;
        }
        return null;
    }
}