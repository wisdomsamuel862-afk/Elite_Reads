<?php
session_start();
require_once "../classes/Database.php";
require_once "../classes/Contact.php";
//database connection
$database= new Database();
$pdo= $database->connect();
$contact= new Contact($pdo);
//collecting data from form
$name= $_POST['name'];
$email= filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$phone= $_POST['phone'];
$message= $_POST['message'];
//Validation/Confirmation of Data
if(empty($name)||empty($email)||empty($phone)||empty($message)){
    $_SESSION['error']= "All fields are required for this action";
    header("Location:../contact.php");
    exit;
}
try{
$contact->getMessage($name, $email, $phone, $message);
}catch(PDOException $e){
    $_SESSION['error']="could not send";
}