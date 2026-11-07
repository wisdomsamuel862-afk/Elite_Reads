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
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="header container-fluid" id="header" >
    <div>    
    <h1>Elite Reads</h1>
    <h2>Member Dashboard</h2>
</div>
        <nav class="navbar" id="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="borrowing.php">borrowing</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="books.php">View Books</a></li>
            </ul>
        </nav>
    </header>
    <?php
    if(isset($_SESSION['error'])){
        echo "<p class= 'alert alert-danger'>". $_SESSION['error']. "<p>";
    }
    ?>
    <?php echo "<br>" ."<h1 style='color:blue'>". "Hello &nbsp;". ucfirst($_SESSION['member_name']). "&nbsp; Welcome to Elite Reads"."</h1>"?>
</body>
</html>