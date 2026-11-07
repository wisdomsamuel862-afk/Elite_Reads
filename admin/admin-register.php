<?php
session_start();
if(!isset($_SESSION['admin_id'])){
    header("Location: admin-login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/register.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/icons/bootstrap-icons.css">
</head>
<body>

    <h2 class="text-center" id="head">Sign Up</h2>
    <?php if(isset($_SESSION['error'])){
        echo "<p class='alert alert-danger text-center'". $_SESSION['error']. "</p>";
        unset($_SESSION['error']);
    } if(isset($_SESSION['success'])){
        echo "<p class='alert alert-success text-center'>" . $_SESSION['success']. "</p>";
        unset($_SESSION['success']);
    }
        
        ?>
    <div class="container" id="form">
    <form action="../processes/admin-register-process.php" method="POST" class="form-container shadow">
        <label for="name" class="form-label">Name:</label>
        <input type="text" id="name" placeholder="Enter Your Name" name="name" class="form-control">
        <br>
        <label for="email" class="form-label">Email:</label>
        <input type="email" id="email" placeholder="Enter Your Email" name="email" class="form-control">
        <br>
        <label for="password" class="form-label">Password:</label>
        <input type="password" id="password" placeholder="Enter Your Password" name="password" class="form-control">
        <br>
        <label for="confirm_password" class="form-label">Confirm Password:</label>
        <input type="password" id="confirm_password" placeholder="Confirm Password" name="confirm_password" class="form-control">
        <br>
        <input type="submit" value="Register" class="btn btn-primary mt-3">
    </form>    

    </div>
    
</body>
</html>