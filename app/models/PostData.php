<?php
namespace App\models;

class PostData
{
 protected $pdo;

 public function __construct(PDO $pdo)
 {
     $this->pdo = $pdo;
 }

 public function getAllPosts(){
     $stmt=$this->pdo->prepare("SELECT * FROM posts ORDER BY datePublication");
     if($stmt -> execute()){
         return $stmt->fetchAll();
     };
     return null;
 }

 public function insertPost($data){
     $stmt=$this->pdo->prepare("INSERT INTO posts(title,description,datePublication,photo) 
                                            VALUE(:title, :description, :datePublication,:photo)");
     if($stmt->execute([
         "title"=>$data["title"],
         "description"=>$data["description"],
         "datePublication"=>$data["datePublication"],
         "photo" => $data["photo"]
     ])){
         return $this->pdo->lastInsertID();
     };
     return -1;
 }

 public function deletePost($id){
     $stmt=$this->pdo->prepare("DELETE FROM posts WHERE id = :id");
     if($stmt->execute(["id"=>$id])){
         return 1;
     };
     return -1;
 }

 public function updatePost($data){
     $stmt=$this->pdo->prepare("UPDATE  posts set title=:title,description=:description WHERE id=:id ");
     if($stmt->execute([
         "id"=>$data["id"],
         "title"=>$data["title"],
         "description"=>$data["description"]
     ])){
         return 1;
     };
     return -1;
 }
 public function getPostID($id)
 {
     $stmt=$this->pdo->prepare("SELECT * FROM posts WHERE id=:id");
     if($stmt->execute(["id"=> $id])){
         return $stmt->fetch();
     };
     return null;
 }
}