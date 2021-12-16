<?php
//Файл где вызывается модель
// и передается вид - контроллер
//Controller

include 'create.php';
require 'post.php';
$filename = uploadImage($_FILES['image']);

addPosts($_POST['title'], $_POST['contact'], $filename);

$posts = getPosts();

include "View/indexshow.php";