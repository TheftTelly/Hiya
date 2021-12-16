<?php
function uploadImage($image)
{
   $extension = pathinfo($image['name'], PATHINFO_EXTENSION);
   $filename = uniqid() . "." .$extension;
   move_uploaded_file($image['tmp_name'], "uploads/" .$filename);
   return $filename;
}
function addPosts($title, $content, $filename)
{
    $pdo = new PDO("mysql: host = localhost; dbname=mvc32", "root", "root");
    $sql = "INSERT INTO posts (title, content, image) VALUE (:title, :content, :image)";

    $statement = $pdo->prepare($sql);
    $statement->bindParam(":title", $_POST['title']);
    $statement->bindParam(":content", $_POST['content']);
    $statement->bindParam(":image", $filename);
    $statement->execute();
}
 function getPosts(){
$pdo= new PDO("mysql:host = localhost;dbname=mvc32", "root", "root");
$statement=$pdo->prepare("SELECT * FROM posts");
$statement -> execute();
$posts =$statement->fetchAll(PDO::FETCH_ASSOC);
return $posts; //возвращение переменной
}
