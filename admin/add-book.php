<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processes/book-process.php" method="post">
        <div>
    <label for="title">Book Title:</label>
    <input type="text" id="title" class="form-control" placeholder="Enter Book Title">
</div>s
    </form>
</body>
</html>