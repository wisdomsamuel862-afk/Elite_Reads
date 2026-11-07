<?php
session_start();
require_once "../classes/Database.php";
require_once "../classes/Book.php";
require_once "../classes/Category.php";
$database= new Database();
$pdo= $database->connect();
$categories= new Category($pdo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <form action="../processes/book-process.php" method="POST" enctype="multipart/form-data">
        <div>
    <label for="title">Book Title:</label>
    <input type="text" id="title" class="form-control" placeholder="Enter Book Title" name="title">
</div>
<div>
    <label for="author">Author Name:</label>
    <input type="text" id="author" class="form-control" placeholder="Enter Author's Name" name="author">
</div>
<div>
    <label for="description" class="form-label">Description</label>
    <input type="text" id="description" class="form-control" placeholder="Enter Book description" name="descripton">
</div>
<div>
    <select name="category" id="category" class="form-select">
      <!--  <option value="Tech">Tech</option>
        <option value="Fiction">Fiction</option>
        <option value="Fantasy">Fantasy</option>
        <option value="Comics">Comics</option>
        <option value="Science">Science Fiction</option>
        <option value="Folktale">Folktale</option>
        <option value="Fairytales">Fairytales</option>-->
        <option value="" selected disabled>Select Categories</option>
        <?php foreach ($categories->getCategories() as $category){?>
        <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
        <?php }?>
    </select>
</div>
<div>
    <label for="coverimg">Cover image</label>
    <input type="file" id="coverimg" class="form-control" placeholder="Choose Book cover photo" name="image_path">
</div>
<button type="submit" name="submit"></button>
    </form>
</body>
</html>