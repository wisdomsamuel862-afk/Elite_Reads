<?php
require_once "../classes/Database.php";
require_once "../classes/Register.php";
$database= new Database();
$pdo=$database->connect();
$register= new Register($pdo);
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name= $_POST['name'];
    $email= filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone= $_POST['phone'];
    $password= $_POST['password'];
    $confirm_password= $_POST['confirm_password'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['error']="Invalid email";
        header("Location:../register.php");
        exit;
    }
    if($password !== $confirm_password){
        $_SESSION['error']="password does not match confirm password";
    }if(empty($name) ||  empty($email) || empty($phone) || empty($password)){
        $_SESSION['error'] = "All fields are required";
        header("Location:../register.php");
        exit;
    }
    if(isset($_SESSION['error'])){
        header("Location:../register.php");
        exit;
    }

try{$hashed_password= password_hash($password, PASSWORD_DEFAULT);
    $register->registerMember($name, $email, $phone, $hashed_password);
    header("Location: ../login.php");
    exit;
    }catch(PDOException $e){
    echo "Registration failed. please try again later";
}
}