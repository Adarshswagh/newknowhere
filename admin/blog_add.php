<?php
session_start();
require("config.php");

if (!isset($_SESSION['auser'])) {
    header("location:index.php");
}

$error = "";
$msg = "";

if (isset($_POST['add_blog'])) {
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $content = mysqli_real_escape_string($con, $_POST['content']);
    $main_content = mysqli_real_escape_string($con, $_POST['main_content']);
    $conclusion = mysqli_real_escape_string($con, $_POST['conclusion']);
    $image = $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];

    // Ensure 'blogs' directory exists
    if (!is_dir("blogs")) {
        mkdir("blogs", 0777, true);
    }

    // Validate and upload image
    if (!empty($image)) {
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        if (in_array(strtolower($ext), $allowed_extensions)) {
            if (!move_uploaded_file($temp_name, "property/$image")) {
                $error = "<p class='alert alert-danger'>Failed to upload image.</p>";
            }
        } else {
            $error = "<p class='alert alert-danger'>Invalid image file type. Allowed: jpg, jpeg, png, gif.</p>";
        }
    } else {
        $image = "default.jpg"; // Use a default image
    }

    // Insert into blog table
    if (empty($error)) {
        $sql = "INSERT INTO blogs (title, content, main_content,conclusion, image) VALUES ('$title', '$content', '$main_content',conclusion, '$image')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            $msg = "<p class='alert alert-success'>Blog Added Successfully</p>";
        } else {
            $error = "<p class='alert alert-danger'>Failed to add blog: " . mysqli_error($con) . "</p>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Add Blog</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Include TinyMCE script -->
    <!-- Place the first <script> tag in your HTML's <head> -->
    <script src="https://cdn.tiny.cloud/1/ymwglng1ch0084h6c1r0feioo5fjhroes14luwg0i916v1oj/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

        

</head>
<body>
    <?php include("header.php"); ?>
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Add Blog</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Blog Details</h4>
                        </div>
                        <form method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <?php echo $error; ?>
                                <?php echo $msg; ?>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Title</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="title" placeholder="Enter Blog Title" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Content</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control content-textarea" name="content" rows="8" placeholder="Enter Blog Content" ></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Main Content</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control main-content-textarea" name="main_content" rows="15" placeholder="Enter Blog Main Content" ></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Conclusion</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control main-content-textarea" name="conclusion" rows="15" placeholder="Enter Blog Conclusion " ></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Image</label>
                                    <div class="col-lg-10">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <button type="submit" name="add_blog" class="btn btn-primary">Add Blog</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
</body>
</html>
