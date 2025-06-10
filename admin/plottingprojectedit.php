<?php
session_start();
require("config.php");

if (!isset($_SESSION['auser'])) {
    header("location:index.php");
}

$error = "";
$msg = "";

if (isset($_POST['add'])) {
    $pid = $_REQUEST['pid'];

    // Fetch form data
    $project_title = $_POST['project_title'];
    $project_description = $_POST['project_description'];
    $project_location = $_POST['project_location'];
    $plot_area = $_POST['plot_area'];
    $plot_size = $_POST['plot_size'];
    $price = $_POST['price'];
    $psf = $_POST['psf'];
    $possesion = $_POST['possesion'];
    $usp = $_POST['usp'];
    $roi = $_POST['roi'];
    $status = $_POST['status'];
    $featured = $_POST['featured'];
    $fsi = $_POST['fsi'];
    $floor = $_POST['floor'];
    $type = $_POST['type'];
    $city = $_POST['city'];
    $developer = $_POST['developer'];



    // File upload handling
    $images = ['image1', 'image2', 'image3', 'image4', 'image5'];
    $imagePaths = [];

    foreach ($images as $imageField) {
        if (isset($_FILES[$imageField]) && $_FILES[$imageField]['error'] == 0) {
            $fileName = $_FILES[$imageField]['name'];
            $tempName = $_FILES[$imageField]['tmp_name'];

            // Validate file type and size
            $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];
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
        $sql = "UPDATE plotting_projects SET 
            project_title = '$project_title',
            project_description = '$project_description',
            project_location = '$project_location',
            plot_area = '$plot_area',
            plot_size = '$plot_size',
            price = '$price',
            psf = '$psf',
            possesion = '$possesion',
            usp = '$usp',
            roi = '$roi',
            image1 = '{$imagePaths['image1']}',
            image2 = '{$imagePaths['image2']}',
            image3 = '{$imagePaths['image3']}',
            image4 = '{$imagePaths['image4']}',
            image5 = '{$imagePaths['image5']}',
            status = '$status',
            featured = '$featured',
            fsi = '$fsi',
            floor = '{$floor}',
            type = '{$type}',   
            city = '{$city}',
            developer = '{$developer}'
            WHERE pid = '$pid'";

        $result = mysqli_query($con, $sql);
        if ($result) {
            $msg = "<p class='alert alert-success'>Property Updated</p>";
            header("Location: plottingview.php?msg=$msg");
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
									<h4 class="card-title">Update Property Details</h4>
									<?php echo $error; ?>
									<?php echo $msg; ?>
								</div>
								<form method="post" enctype="multipart/form-data">
								
								<?php
                                $pid = $_REQUEST['pid'];
                                $query = mysqli_query($con, "SELECT * FROM plotting_projects WHERE pid='$pid'");
                                $row = mysqli_fetch_assoc($query);
								
                            ?>
												
								<div class="card-body">
									<h5 class="card-title">Property Detail</h5>
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Title</label>
													<div class="col-lg-9">
													<input type="text" class="form-control" name="project_title" required value="<?php echo $row['project_title']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Content</label>
													<div class="col-lg-9">
														<textarea class=" form-control" name="project_description" rows="10" cols="30"><?php echo $row['project_description']; ?></textarea>
													</div>
												</div>
												
											</div>
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Project Developer</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="developer"      placeholder="Enter Project Developer" value="<?php echo $row['developer']; ?>">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Address</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="project_location"      placeholder="Enter Address" value="<?php echo $row['project_location']; ?>">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Plot Size</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="plot_size"      placeholder="Enter Plot Size" value="<?php echo $row['plot_size']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Possession</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="possesion"      placeholder="Enter Possession" value="<?php echo $row['possesion']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">USP</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="usp"      placeholder="Enter USP" value="<?php echo $row['usp']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">FSI</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="fsi"      placeholder="Enter FSI" value="<?php echo $row['fsi']; ?>">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Type</label>
													<div class="col-lg-9">
														<select class="form-control"       name="type">
															<option value="">Select Type</option>
                                                            <option value="N/A Non Agriculturer" <?= $row['type'] == 'N/A Non Agriculturer' ? 'selected' : ''; ?>>N/A Non Agriculturer</option>
                                                            <option value="R Zone Residential" <?= $row['type'] == 'R Zone Residential' ? 'selected' : ''; ?>>R Zone Residential</option>
                                                            <option value="Commercial" <?= $row['type'] == 'Commercial' ? 'selected' : ''; ?>>Commercial</option>
                                                            <option value="Farm Land" <?= $row['type'] == 'Farm Land' ? 'selected' : ''; ?>>Farm Land</option>
                                                            <option value="Industrial" <?= $row['type'] == 'Industrial' ? 'selected' : ''; ?>>Industrial</option>
															
														</select>
													</div>
												</div>
												
							
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Project Area</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="plot_area"      placeholder="Enter Project Area" value="<?php echo $row['plot_area']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">City</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="city"      placeholder="Enter City" value="<?php echo $row['city']; ?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Price</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="price"      placeholder="Enter Total Units" value="<?php echo $row['price']; ?>">
													</div>
												</div>
											
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">PSF</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="psf"      placeholder="Enter PSF" value="<?php echo $row['psf']; ?>">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">ROI</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="roi"      placeholder="Enter ROI" value="<?php echo $row['roi']; ?>">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Permissible Floor</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="floor"      placeholder="Enter Permissible Floor" value="<?php echo $row['floor']; ?>">
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
														<input class="form-control" name="image1" type="file"    >
														<img src="property/<?php echo $row['image1'];?>" alt="pimage" height="150" width="180">

													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 3</label>
													<div class="col-lg-9">
														<input class="form-control" name="image3" type="file"  >
														<img src="property/<?php echo $row['image3'];?>" alt="pimage" height="150" width="180">

													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 5</label>
													<div class="col-lg-9">
														<input class="form-control" name="image4" type="file"   >
														<img src="property/<?php echo $row['image4'];?>" alt="pimage" height="150" width="180">

													</div>
												</div>
											</div>
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 2</label>
													<div class="col-lg-9">
														<input class="form-control" name="image2" type="file"    >
														<img src="property/<?php echo $row['image2'];?>" alt="pimage" height="150" width="180">

													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">image 4</label>
													<div class="col-lg-9">
														<input class="form-control" name="image5" type="file"    >
														<img src="property/<?php echo $row['image5'];?>" alt="pimage" height="150" width="180">

													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Status</label>
													<div class="col-lg-9">
                                                    <select class="form-control" name="status">
														<option value="Select">Select...</option>
                                                        <option value="Ready To Move" <?= $row['status'] == 'Ready To Move' ? 'selected' : ''; ?>>Ready To Move</option>
                                                        <option value="New Launch" <?= $row['status'] == 'New Launch' ? 'selected' : ''; ?>>New Launch</option>
                                                        <option value="Early Possession" <?= $row['status'] == 'Early Possession' ? 'selected' : ''; ?>>Early Possession</option>
                                                        <option value="Pre Launch" <?= $row['status'] == 'Pre Launch' ? 'selected' : ''; ?>>Pre Launch</option>
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
															<option value="0" <?= $row['featured'] == '0' ? 'selected' : ''; ?>>No</option>
															<option value="1" <?= $row['featured'] == '1' ? 'selected' : ''; ?>>Yes</option>
															<!-- <option value="0">No</option>
															<option value="1">Yes</option> -->
														</select>
													</div>
												</div>
											</div>
										</div>

										
											<input type="submit" value="Submit" class="btn btn-primary"name="add" style="margin-left:200px;">
										
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



		

		<script>
				// Add new unit fields dynamically
				document.getElementById('add-unit-btn').addEventListener('click', function() {
					const unitContainer = document.getElementById('units-container');
					const newUnitHTML = `
						<div class="unit-detail">
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Unit Name</label>
								<div class="col-lg-7">
									<select class="form-control" name="unit_name[]">
										<option value="1 BHK">1 BHK</option>
										<option value="2 BHK">2 BHK</option>
										<option value="3 BHK">3 BHK</option>
									</select>
								</div>
								<div class="col-lg-2">
									<button type="button" class="btn btn-danger remove-unit-btn">Remove</button>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Unit Size</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="unit_size[]" placeholder="Enter Unit Size">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label">Unit Price</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="unit_price[]" placeholder="Enter Unit Price">
								</div>
							</div>
							<hr>
						</div>
					`;
					unitContainer.insertAdjacentHTML('beforeend', newUnitHTML);
				});

				// Remove unit
				document.body.addEventListener('click', function(e) {
					if (e.target && e.target.classList.contains('remove-unit-btn')) {
						e.target.closest('.unit-detail').remove();
					}
				});
				</script>

		
    </body>

</html>