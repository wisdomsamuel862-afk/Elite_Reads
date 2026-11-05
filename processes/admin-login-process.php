<?php
session_start();
require_once "../classes/Database.php";
require_once "../classes/Admin.php";
$database= new Database();
$pdo = $database->connect();
$login = new Admin($pdo);
$email = trim($_POST['email']);
$password = $_POST['password'];


if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $_SESSION['error']= "Invalid Email Format";
    header("Location:../login.php");
    exit;
}

$member=$login->loginAdmin($email,$password);

if(!$member){
    $_SESSION['error']= "Invalid Email or Password.";
    header("Location:../login.php");
    exit;
}

if(!password_verify($password, $member['password'])){
    $_SESSION['error']="Invalid Member Password. Please try again!";
    header("Location:../register.php");
    exit;
}
    session_regenerate_id(true);

    $_SESSION['member_id'] = $member['id'];
     $_SESSION['member_name'] = $member['name'];
    $_SESSION['member_email'] = $member['email'];
    
header("Location:../classes/admin-dashboard.php");
exit;