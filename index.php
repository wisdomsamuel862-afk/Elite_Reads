<?php

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
    <header class="header container-fluid">
        <img src="" alt="logo">\
        <nav class="navbar" id="navbar">
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="contact.php">contact</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="register.php">register</a></li>
                <li><a href="dashboard.php">dashboard</a></li>
                <li><a href="login.php">login</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
    <div class="card" style="width: 18rem;">
  <img src="<?php echo $book['image_path']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $book['title']; ?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="container">
        <div class="row">
            <div class="col-md-4">
    <div class="card" style="width: 18rem;">
  <img src="<?php echo $book['image_path']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $book['title']; ?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="container">
        <div class="row">
            <div class="col-md-4">
    <div class="card" style="width: 18rem;">
  <img src="<?php echo $book['image_path']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $book['title']; ?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="books.php?id=<?php echo $book['id']; ?>" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
</body>
</html>
