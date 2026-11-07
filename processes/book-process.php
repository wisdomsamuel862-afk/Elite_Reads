<?php
session_start();
if(!isset($_SESSION['admin_id'])){
    http_response_code(403);
    exit("Access denied");
}
require_once "../classes/Database.php";
require_once "../classes/Book.php";
require_once "../classes/Category.php";
if($_SERVER["REQUEST_METHOD"]!=="POST"){
    header("Location:../books.php");
    exit;
}
$title= $_POST['title'];
$author= $_POST['author'];
$description = $_POST['description'];
$category= $_POST['category_id'];
if(!isset($_FILES['image_path']) || $_FILES['image_path']['error'] !== UPLOAD_ERR_OK){
    $_SESSION['error']= "Please select a book image";
    header("Location:../admin/add-book.php");
    exit;
}
$file= $_FILES['image_path'];
$allowedTypes= ["image/jpeg" => "jpg", "image/png"=>"png", "image/webp"=>"webp"];
$mime= mime_content_type($file['tmp_name']);
if(!isset($allowedTypes[$mime])){
    $_SESSION['error']= "Invalid file type. Please select a valid image file";
    header("Location:../admin/add-book.php");
    exit;
}
if($file['size']> 2 * 1024 * 1024){
    $_SESSION['error']= "Image must not exceed 2MB";
    header("Location:../admin/add-book.php");
    exit;
}
$database= new Database();
$pdo = $database->connect();
$book = new Book($pdo);
$categories= new Category($pdo);
$extension= $allowedTypes[$mime];
$imageName=bin2hex(random_bytes(16)). ".".$extension;
$uploadDirectory= "../assets/images/";
$imagePath= $uploadDirectory.$imageName;
if(!is_dir($uploadDirectory)){
    mkdir($uploadDirectory, 0755, true);
}
if(!move_uploaded_file($file['tmp_name'], $imagePath)){
    $_SESSION['error']= "Failed to upload image";
    header("Location:../admin/add-book.php");
    exit;
}try{
    $book->addBook($title, $author, $description, $category, $imagePath);
    $_SESSION['success']= "Book added successfully";
    header("Location:../admin/add-book.php");
    exit;
} catch (Exception $e) {
    $_SESSION['error']= "Error adding book: " . $e->getMessage();
    header("Location:../admin/add-book.php");
    exit;
}
