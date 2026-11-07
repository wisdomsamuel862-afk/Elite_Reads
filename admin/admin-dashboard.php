<?php
session_start();
if(!isset($_SESSION['admin_id'])){
    header("Location:admin-login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboardt</title>
    <link rel="stylesheet" href="../assets/css/adashboard.css">
</head>
<body id="body">
    <header class="header container-fluid" id="header" >
        <h1>Elite Reads</h1>
        <nav class="navbar" id="navbar">
            <ul>
                <li><a href="admin-dashboard.php">Home</a></li>
                <li><a href="add-book.php">Add Book</a></li>
                <li><a href="add-category.php">Add Category</a></li>
                <li><a href="manage-books.php">Manage Books</a></li>
                <li><a href="manage-members.php">Manage Members</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>