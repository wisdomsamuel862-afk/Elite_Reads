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
    <select name="category" id="category">
        <option value="">Tech</option>
        <option value="">Fiction</option>
        <option value="">Fantasy</option>
        <option value="">Comics</option>
        <option value="">Science Fiction</option>
        <option value=""></option>
        <option value=""></option>
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