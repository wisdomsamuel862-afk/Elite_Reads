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
    <form action="processes/login-process.php" method="POST">
    <label for="email" class="form-label">Email</label>
    <input type="text" id="email" name="email" placeholder="Enter Your Email" class="form-control">
    <label for="password" class="form-label">Password</label>
    <input type="text" id="password" name="password" placeholder="Enter Your Password" class="form-control">
    <input type="submit" value="Log in">
</form>
</div>
</body>
</html>