<?php
session_start();
require_once "../classes/Database.php";
require_once "../classes/Admin.php";
$database= new Database();
$pdo=$database->connect();
$register= new Admin($pdo);
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name= $_POST['name'];
    $email= filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password= $_POST['password'];
    $confirm_password= $_POST['confirm_password'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['error']="Invalid email";
        header("Location:../admin/admin-register.php");
        exit;
    }
    if($password !== $confirm_password){
        $_SESSION['error']="password does not match confirm password";
    }if(empty($name) ||  empty($email) || empty($password)){
        $_SESSION['error'] = "Alll fields are required";
        header("Location:../admin/admin-register.php");
        exit;
    }
    if(isset($_SESSION['error'])){
        header("Location:../admin/admin-register.php");
        exit;
    }

try{$hashed_password= password_hash($password, PASSWORD_DEFAULT);
    $register->registerAdmin($name, $email, $hashed_password);
    header("Location:../admin/admin-dashboard.php");
    exit;
    }catch(PDOException $e){
    die("Registration failed. Admin Already Exists");
}
}