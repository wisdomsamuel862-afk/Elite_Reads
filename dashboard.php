<?php
require_once "classes/Database.php";
require_once "classes/Dashboard.php";
session_start();
if(!isset($_SESSION['member_id'])){
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Dashboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php
    if(isset($_SESSION['error'])){
        echo "<p class= 'alert alert-danger'>". $_SESSION['error']. "<p>";
    }
    ?>
    <?php echo "<br>" ."<h1 style='color:blue'>". "Hello &nbsp;". ucfirst($_SESSION['member_name']). "&nbsp; Welcome to Elite Reads"."</h1>"?>
</body>
</html>