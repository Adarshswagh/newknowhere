<?php
session_start();
require("config.php");

if (!isset($_SESSION['auser'])) {
    header("location:index.php");
}

$error = "";
$msg = "";

if (isset($_POST['add'])) {
    $id = $_REQUEST['pid'];

    // Fetch form data
    $title = $_POST['title'];
    $content = $_POST['content'];
    $main_content = $_POST['main_content'];
    $conclusion = $_POST['conclusion'];
    $image = $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];

    // File upload handling
    $images = ['image'];
    $imagePaths = [];


	
    foreach ($images as $imageField) {
        if (isset($_FILES[$imageField]) && $_FILES[$imageField]['error'] == 0) {
            $fileName = $_FILES[$imageField]['name'];
            $tempName = $_FILES[$imageField]['tmp_name'];

            // Validate file type and size
            $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'];
            $fileType = mime_content_type($tempName);

            if (in_array($fileType, $allowedTypes) && $_FILES[$imageField]['size'] <= 5000000) {
                move_uploaded_file($tempName, "property/$fileName");
                $imagePaths[$imageField] = $fileName;
            } else {
                $error = "<p class='alert alert-warning'>Invalid file type or size for $imageField</p>";
                break;
            }
        } else {
            $imagePaths[$imageField] = ''; // Keep old image if not updated
        }
    }

    if (!$error) {
        // Update query with WHERE clause
        $sql = "UPDATE blogs SET 
            title = '$title',
            content = '$content',
            main_content = '$main_content',
            conclusion = '$conclusion',
            image = '{$imagePaths['image']}'
            WHERE id = '$id'";

        $result = mysqli_query($con, $sql);
        if ($result) {
            $msg = "<p class='alert alert-success'>Blog Updated</p>";
            header("Location: blogview.php?msg=$msg");
            exit;
        } else {
            $msg = "<p class='alert alert-warning'>Property Not Updated</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>LM HOMES | Property</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">


        
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->



        <script src="https://cdn.tiny.cloud/1/ymwglng1ch0084h6c1r0feioo5fjhroes14luwg0i916v1oj/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

            



    </head>
    <body>

  

		
			<!-- Header -->
			<?php include("header.php"); ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Property</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Blog</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Update Blog Details</h4>
									<?php echo $error; ?>
									<?php echo $msg; ?>
								</div>
								<form method="post" enctype="multipart/form-data">
								
                                    <?php
                                    $pid = $_REQUEST['pid'];
                                    $query = mysqli_query($con, "SELECT * FROM blogs WHERE id='$pid'");
                                    $row = mysqli_fetch_assoc($query);
                                    
                                    ?>
												
                                    <div class="card-body">
                                        <?php echo $error; ?>
                                        <?php echo $msg; ?>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Title</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="title" placeholder="Enter Blog Title" value="<?php echo $row['title']; ?>" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Content</label>
                                            <div class="col-lg-10">
                                                <!-- <textarea class="form-control content-textarea" name="content" rows="8" placeholder="Enter Blog Content" value="<?php echo $row['content']; ?></textarea> -->
                                                <textarea class=" form-control" name="content" rows="10" cols="30"><?php echo $row['content']; ?></textarea>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Main Content</label>
                                            <div class="col-lg-10">
                                                <!-- <textarea class="form-control main-content-textarea" name="main_content" rows="15" placeholder="Enter Blog Main Content" value="<?php echo $row['main_content']; ?></textarea> -->
                                                <textarea class=" form-control" name="main_content" rows="10" cols="30"><?php echo $row['main_content']; ?></textarea>

                                                
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Conclusion</label>
                                            <div class="col-lg-10">
                                                <!-- <textarea class="form-control main-content-textarea" name="main_content" rows="15" placeholder="Enter Blog Main Content" value="<?php echo $row['main_content']; ?></textarea> -->
                                                <textarea class=" form-control" name="conclusion" rows="10" cols="30"><?php echo $row['conclusion']; ?></textarea>

                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Image</label>
                                            <div class="col-lg-10">
                                                <input type="file" class="form-control" name="image">
                                                <img src="property/<?php echo $row['image'];?>" alt="knowhere" height="150" width="180">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <input type="submit" value="Submit" class="btn btn-primary"name="add" style="margin-left:200px;">

                                        </div>
                                    </div>
								</form>
								
								
												
							</div>
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Main Wrapper -->


              <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
            <script>
                tinymce.init({
                    selector: 'textarea',
                    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                });
            </script>

		
	
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>



		


		
    </body>

</html>