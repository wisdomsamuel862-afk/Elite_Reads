<?php
session_start();
require_once "classes/Database.php";
require_once "classes/Login.php";
$database= new Database();
$pdo = $database->connect();
$login = new Login($pdo);
$email = filter_var(htmlspecialchars(trim($_POST['email'])), PASSWORD_DEFAULT);
$password = $_POST['password'];
$member=$login->loginMember($email,$password);
if($member){
    session_regenerate_id(true);
    $_SESSION['member_id'] = $member['id'];
    $_SESSION['member_name'] = $member['name'];
    $_SESSION['member_email'] = $member['email'];
        exit;
}else{
    $_SESSION['error']= "Invalid Email or Password.";
    header("Location:../login.php");
    exit;
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $_SESSION['error']= "Invalid Email Format";
    header("Location:../login.php");
    exit;
}
if(!password_verify($password, $member['password'])){
    $_SESSION['error']="Invalid Member Password. Please try again!";
    header("Location:../login.php");
    exit;
}$_SESSION['success']="Login Successful
header("Location:../dashboard.php");
exit;