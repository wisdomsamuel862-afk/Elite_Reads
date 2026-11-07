<?php
session_start();
$book
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
    <section>
        <h2>Available Books</h2>
        <p>Welcome to the book listing page!</p>
    </section>
    <div class="card" style="width: 18rem;">
  <img src="<?php echo $book['image_path']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $book['title']; ?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="book-details.php id=?<?php $_SESSION['book_id'];?>class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</body>
</html>