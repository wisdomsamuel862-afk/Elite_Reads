<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> 
</head>

<body>
    <form action="processes/contact-process.php" method="post">
<label for="name" class="form-label">Name:</label>
<input type="text" class="form-control"placeholder="Enter Your Name">
<br>
<label for="email" class="form-label">Email:</label>
<input type="email" class="form-control" placeholder="Enter Your Email">
<br>
<label for="phone" class="form-label">Phone:</label>
<input type="tel" class="form-control" id="phone" placeholder="Enter Your Phone Number">
<br>
<label for="message" class="form-label">Message:</label>
<textarea name="message" id="message"></textarea>

    </form>
</body>
</html>