<?php
session_start();
require("config.php");
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}

$error="";
$msg="";
if(isset($_POST['add']))
{
	
	$project_title=$_POST['project_title'];
	$project_description=$_POST['project_description'];
	$project_location=$_POST['project_location'];
	$plot_area=$_POST['plot_area'];
	$plot_size=$_POST['plot_size'];
	$price=$_POST['price'];
	$psf=$_POST['psf'];
	$possesion=$_POST['possesion'];
	$usp=$_POST['usp'];
	$roi=$_POST['roi'];
	$status=$_POST['status'];
	$fsi=$_POST['fsi'];
	$type=$_POST['type'];
	$floor=$_POST['floor'];
	$city=$_POST['city'];
	$developer=$_POST['developer'];


	$image1=$_FILES['image1']['name'];
	$image2=$_FILES['image2']['name'];
	$image3=$_FILES['image3']['name'];
	$image4=$_FILES['image4']['name'];
	$image5=$_FILES['image5']['name'];


	$featured=$_POST['featured'];
	
	$temp_name  =$_FILES['image1']['tmp_name'];
	$temp_name1 =$_FILES['image2']['tmp_name'];
	$temp_name2 =$_FILES['image3']['tmp_name'];
	$temp_name3 =$_FILES['image4']['tmp_name'];
	$temp_name4 =$_FILES['image5']['tmp_name'];

	
	move_uploaded_file($temp_name,"property/$image1");
	move_uploaded_file($temp_name1,"property/$image2");
	move_uploaded_file($temp_name2,"property/$image3");
	move_uploaded_file($temp_name3,"property/$image4");
	move_uploaded_file($temp_name4,"property/$image5");




// Insert into residential_projects table
$sql = "INSERT INTO plotting_projects 
        (`project_title`, `project_description`, `project_location`, `plot_area`, `plot_size`, `price`, `psf`, `possesion`, `usp`, `roi`, `status`, `image1`, `image2`, `image3`, `image4`, `image5`, `featured`, `fsi`, `type`, `floor`, `city`, `developer`)
        VALUES 
        ('$project_title', '$project_description', '$project_location', '$plot_area', '$plot_size', '$price', '$psf', '$possesion', '$usp', '$roi', '$status', '$image1', '$image2', '$image3', '$image4', '$image5', '$featured', '$fsi', '$type', '$floor', '$city', '$developer')";

$result = mysqli_query($con, $sql);
if ($result) {
    $msg = "<p class='alert alert-success'>Residential Project Inserted Successfully</p>";
} else {
    $error = "<p class='alert alert-warning'>Something went wrong. Please try again: " . mysqli_error($con) . "</p>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>KNOWWHERE | PROJECTS</title>
		
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

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </head>
    <body>

		
			<!-- Header -->
			<?php include("header.php"); ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header --><br>
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Plotting Project</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Property</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->



						

					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Add Plotting Project Details</h4>
								</div>
								<form method="post" enctype="multipart/form-data">
								<div class="card-body">
									<h5 class="card-title">Project Detail</h5>
									<?php echo $error; ?>
									<?php echo $msg; ?>
									
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Title</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="project_title"      placeholder="Enter Title">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Content</label>
													<div class="col-lg-9">
														<textarea class=" form-control" name="project_description" placeholder="Enter Description" rows="10" cols="30"></textarea>
													</div>
												</div>
												
											</div>
											
										</div>
										
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Project Developer</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="developer"      placeholder="Enter Project Developer">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Address</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="project_location"      placeholder="Enter Address">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Plot Size</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="plot_size"      placeholder="Enter Plot Size">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Possession</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="possesion"      placeholder="Enter Possession">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">USP</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="usp"      placeholder="Enter USP">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">FSI</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="fsi"      placeholder="Enter FSI">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Type</label>
													<div class="col-lg-9">
														<select class="form-control"       name="type">
															<option value="">Select Type</option>
															<option value="N/A Non Agriculturer">N/A Non Agriculturer</option>
															<option value="R Zone Residential">R Zone Residential</option>
															<option value="Commercial">Commercial</option>
															<option value="Farm Land">Farm Land</option>
															<option value="Industrial">Industrial</option>
														</select>
													</div>
												</div>
												
							
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Project Area</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="plot_area"      placeholder="Enter Project Area">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">City</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="city"      placeholder="Enter City">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Price</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="price"      placeholder="Enter Total Units">
													</div>
												</div>
											
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">PSF</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="psf"      placeholder="Enter Contact Number">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">ROI</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="roi"      placeholder="Enter ROI">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Permissible Floor</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="floor"      placeholder="Enter Permissible Floor">
													</div>
												</div>

												

												

											</div>
										</div>

										


										
										
										
												
										<h4 class="card-title">Image & Status</h4>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image1</label>
													<div class="col-lg-9">
														<input class="form-control" name="image1" type="file"     ="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 3</label>
													<div class="col-lg-9">
														<input class="form-control" name="image3" type="file"     ="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 5</label>
													<div class="col-lg-9">
														<input class="form-control" name="image4" type="file"     ="">
													</div>
												</div>
											
												
											</div>
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 2</label>
													<div class="col-lg-9">
														<input class="form-control" name="image2" type="file"     ="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">image 4</label>
													<div class="col-lg-9">
														<input class="form-control" name="image5" type="file"     ="">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Status</label>
													<div class="col-lg-9">
														<select class="form-control"       name="status">
															<option value="">Select Status</option>
															<option value="Ready To Move">Ready To Move</option>
															<option value="New Launch">New Launch</option>
															<option value="Early Possession">Early Possession</option>
															<option value="Pre Launch">Pre Launch</option>
														</select>
													</div>
												</div>
												
												
											</div>
										</div>

										<hr>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><b>Best Sale?</b></label>
													<div class="col-lg-9">
														<select class="form-control"       name="featured">
															<option value="">Select...</option>
															<option value="0">No</option>
															<option value="1">Yes</option>
														</select>
													</div>
												</div>
											</div>
										</div>

										
											<input type="submit" value="Submit" class="btn btn-primary"name="add" style="margin-left:500px; max-width:500px">
										
								</div>
								</form>
							</div>
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Main Wrapper -->



			

		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		<script src="assets/plugins/tinymce/tinymce.min.js"></script>
		<script src="assets/plugins/tinymce/init-tinymce.min.js"></script>
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

</html>