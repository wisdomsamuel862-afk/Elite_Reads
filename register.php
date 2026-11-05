<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/register.css">
    <link rel="stylesheet" href="assets/bootstrap/css/icons/bootstrap-icons.css">
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
    <form action="processes/register-process.php" method="POST">
        <label for="name" class="form-label">Name:</label>
        <input type="text" id="name" placeholder="Enter Your Name" name="name" class="form-control">
        <label for="email" class="form-label">Email:</label>
        <input type="email" id="email" placeholder="Enter Your Email" name="email" class="form-control">
        <label for="phone" class="form-label">Phone:</label>
        <input type="tel" id="phone" placeholder="Enter Your Phone Number" name="phone" class="form-control">
        <label for="password" class="form-label">Password:</label>
        <input type="password" id="password" placeholder="Enter Your Password" name="password" class="form-control">
        <label for="confirm_password" class="form-label">Confirm Password:</label>
        <input type="password" id="confirm_password" placeholder="Confirm Password" name="confirm_password" class="form-control">
        <input type="submit" value="Register" class="btn btn-primary mt-3">
    </form>    

    </div>
    
</body>
</html>