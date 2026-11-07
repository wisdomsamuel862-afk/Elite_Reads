<?php
session_start();
require_once "classes/Database.php";
require_once "classes/Book.php";

$bookId = isset($_GET['id']) ? $_GET['id'] : null;
$book = null;

if ($bookId) {
    $database = new Database();
    $books= new Book($database->connect());
    $book = $books->getBook($bookId);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<table class="table table-bordered">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Category</th>
        <th>Description</th>
        <th>Image</th>
    </tr>
    <?php foreach ($book as $b){ ?>
    <tr>
        td><?php echo $b['title']; ?></td>
        <td><?php echo $b['author']; ?></td>
        <td><?php echo $b['category']; ?></td>
        <td><?php echo $b['description']; ?></td>
        <td><img src="<?php echo $b['image_path']; ?>" alt="Book Image" style="max-width: 100px;"></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>