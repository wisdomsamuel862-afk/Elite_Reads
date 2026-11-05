<?php
session_start();
require_once "../classes/Database.php";
require_once "../classes/Book.php";
require_once "../classes/Category.php";
$database= new Database();
$pdo = $database->connect();
$book = new Book($pdo);
$categories= new Category($pdo);
$title= $_POST['title'];
$author= $_POST['author'];
$description = $_POST['description'];
$category= $_POST['category_id'];
if(isset($_POST['submit'])){
    $file= $_FILES['image_path'];
    $fileName= $_FILES['file']['name'];
}