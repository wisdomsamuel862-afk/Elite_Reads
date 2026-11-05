<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/register.css">
</head>
<body>
    <h1 id="head" class="text-center">Log In</h1>
    <div id="register">
        <?php if(isset($_SESSION['error'])){
            echo "<p class='alert alert-danger'>". $_SESSION['error']. "</p>";
            unset($_SESSION['error']);
        } ?>
    <form action="processes/login-process.php" method="POST">
    <label for="email" class="form-label">Email</label>
    <input type="text" id="email" name="email" placeholder="Enter Your Email" class="form-control">
    <label for="password" class="form-label">Password</label>
    <input type="text" id="password" name="password" placeholder="Enter Your Password" class="form-control">
    <button type="submit">Log In</button>
</form>
</div>
</body>
</html>