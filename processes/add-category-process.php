<?php
session_start();
require_once "../classes/Database.php";
require_once "../classes/Category.php";
if($_SERVER["REQUEST_METHOD"]!== "POST"){
    $_SESSION['error']= "Invalid request method";
    header("Location:../admin/add-category.php");
    exit;
}
$database= new Database();
$pdo= $database->connect();
$category = new Category($pdo);
$name= trim($_POST['category']);
$description= trim($_POST['description']);
if(empty($name)){
    $_SESSION['error']= "Category name is required";
    header("Location:../admin/add-category.php");
    exit;
}
if(empty($description)){
    $_SESSION['error']= "Description is required";
    header("Location:../admin/add-category.php");
    exit;
}
try{
    $category->addCategory($name, $description);
    $_SESSION['success']= "Category added successfully";
    header("Location:../admin/add-category.php");
    exit;}catch(PDOException $e){
        $_SESSION['error']= "Could not add category. Category already exists";
        header("Location:../admin/add-category.php");
        exit;
    }