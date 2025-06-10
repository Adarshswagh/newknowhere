<?php
session_start();
require("config.php");

if (!isset($_SESSION['auser'])) {
    header("location:index.php");
}

$error = "";
$msg = "";

if (isset($_POST['add_blog'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_FILES['image']['name'];
    $temp_image = $_FILES['image']['tmp_name'];
    $upload_dir = "../blog_images/";

    if (!move_uploaded_file($temp_image, $upload_dir . $image)) {
        die("Error: Could not upload file. Please check the directory and permissions.");
    }
    $sql = "INSERT INTO blog (title, content, image) VALUES ('$title', '$content', '$image')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $msg = "<p class='alert alert-success'>Blog Added Successfully</p>";
    } else {
        $error = "<p class='alert alert-warning'>Something went wrong. Please try again: " . mysqli_error($con) . "</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Blog</title>
    <!-- Add your styles and scripts here -->
</head>
<body>
    <?php include("header.php"); ?>
    <div class="container">
        <h2>Add Blog</h2>
        <?php echo $error; ?>
        <?php echo $msg; ?>
        <form method="POST" enctype="multipart/form-data">
            <label>Title</label>
            <input type="text" name="title" required><br>
            <label>Content</label>
            <textarea name="content" required></textarea><br>
            <label>Image</label>
            <input type="file" name="image" required><br>
            <button type="submit" name="add_blog">Add Blog</button>
        </form>
    </div>
</body>
</html>
