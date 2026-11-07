<?php
session_start();
if(!isset($_SESSION['member_id'])){
header("Location:login.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
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
    <form action="processes/contact-process.php" method="post" id="form">
<label for="name" class="form-label">Name:</label>
<input type="text" class="form-control"placeholder="Enter Your Name" name="name" required>
<br>
<label for="email" class="form-label">Email:</label>
<input type="email" class="form-control" placeholder="Enter Your Email" name="email" required>
<br>
<label for="phone" class="form-label">Phone:</label>
<input type="tel" class="form-control" id="phone" placeholder="Enter Your Phone Number" name="phone" required>
<br>
<label for="message" class="form-label">Message:</label>
<textarea name="message" id="message" required class="form-control"></textarea>

    </form>
</body>
</html>