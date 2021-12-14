<?php
//connect к бд
$connect = mysqli_connect('localhost', 'root', 'root', 'test');

if (!$connect){
    die('Error connect to DataBase');
}