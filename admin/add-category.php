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
    <title>Add Category</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/adashboard.css">
</head>
<body>
    <header class="header container-fluid" id="header" >
       <div>
         <h1>Elite Reads</h1>
        <h2>Add Category</h2>
</div>
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
                 <?php if(isset($_SESSION['error'])){
            echo "<p class='alert alert-danger text-center'>". $_SESSION['error']. "</p>";
            unset($_SESSION['error']);
            if(isset($_SESSION['success'])){
                echo "<p class='alert alert-success text-center'>". $_SESSION['success']. "</p>";
                unset($_SESSION['success']);
            }
        } ?>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
    <section>
        <form action="../processes/add-category-process.php" method="POST" id="form" class="form-container shadow m-5">
            <label for="category_name" class="form-control">Category Name:</label>
            <input type="text" id="category_name" name="category" required placeholder="Enter Category Name" class="form-control">
            <label for="description" class="form-label">Description:</label>
            <textarea name="description" id="description" required placeholder="Enter Category Description" class="form-control"></textarea>
            <input type="submit" value="Submit" class="btn btn-primary p-1 container">
        </form>
    </section>
</div>
<div class="col-2"></div>
</div>
</div>
</body>
</html>