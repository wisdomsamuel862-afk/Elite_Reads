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
    header("Location:../admin/admin-login.php");
    exit;
}

$admin=$login->loginAdmin($email);

if(!$admin){
    $_SESSION['error']= "Invalid Email or Password.";
    header("Location:../admin/admin-login.php");
    exit;
}

if(!password_verify($password, $admin['password'])){
    $_SESSION['error']="Invalid Member Password. Please try again!";
    header("Location:../admin/admin-register.php");
    exit;
}
    session_regenerate_id(true);

    $_SESSION['admin_id'] = $admin['id'];
     $_SESSION['admin_name'] = $admin['name'];
    $_SESSION['admin_email'] = $admin['email'];
    
header("Location:../admin/admin-dashboard.php");
exit;