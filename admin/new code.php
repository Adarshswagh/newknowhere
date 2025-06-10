<?php
session_start();
require("config.php");

if (!isset($_SESSION['auser'])) {
    header("location:index.php");
    exit();
}

$error = "";
$msg = "";

if (isset($_POST['add'])) {
    $pid = $_REQUEST['pid'];
    $project_title = $_POST['project_title'];
    $project_description = $_POST['project_description'];
    $project_location = $_POST['project_location'];
    $project_area = $_POST['project_area'];
    $total_towers = $_POST['total_towers'];
    $total_units = $_POST['total_units'];
    $possession = $_POST['possession'];
    $status = $_POST['status'];
    $total_floor = $_POST['total_floor'];
    $city = $_POST['city'];
    $psf = $_POST['psf'];
    $developer = $_POST['developer'];

    // Handle unit details (store in JSON format)
    $unit_names = isset($_POST['unit_name']) ? $_POST['unit_name'] : [];
    $unit_sizes = isset($_POST['unit_size']) ? $_POST['unit_size'] : [];
    $unit_prices = isset($_POST['unit_price']) ? $_POST['unit_price'] : [];
    
    $unit_details = [];
    for ($i = 0; $i < count($unit_names); $i++) {
        $unit_details[] = [
            'name' => $unit_names[$i],
            'size' => $unit_sizes[$i],
            'price' => $unit_prices[$i]
        ];
    }
    $unit_details_json = json_encode($unit_details);

    // Handling images
    $image1 = $_FILES['image1']['name'];
    $image2 = $_FILES['image2']['name'];
    $image3 = $_FILES['image3']['name'];
    $image4 = $_FILES['image4']['name'];
    $image5 = $_FILES['image5']['name'];

    $temp_name = $_FILES['image1']['tmp_name'];
    $temp_name1 = $_FILES['image2']['tmp_name'];
    $temp_name2 = $_FILES['image3']['tmp_name'];
    $temp_name3 = $_FILES['image4']['tmp_name'];
    $temp_name4 = $_FILES['image5']['tmp_name'];

    move_uploaded_file($temp_name, "property/$image1");
    move_uploaded_file($temp_name1, "property/$image2");
    move_uploaded_file($temp_name2, "property/$image3");
    move_uploaded_file($temp_name3, "property/$image4");
    move_uploaded_file($temp_name4, "property/$image5");

    // Update query to include unit details as JSON
    $sql = "UPDATE residential_projects SET project_title = '{$project_title}', project_description = '{$project_description}', project_location = '{$project_location}', project_area = '{$project_area}', total_towers = '{$total_towers}', total_units = '{$total_units}', possession = '{$possession}', total_floor = '{$total_floor}', status = '{$status}', image1 = '{$image1}', image2 = '{$image2}', image3 = '{$image3}', image4 = '{$image4}', image5 = '{$image5}', featured = '{$featured}', city = '{$city}', psf = '{$psf}', developer = '{$developer}', unit_details = '{$unit_details_json}' WHERE pid = '{$pid}'";

    $result = mysqli_query($con, $sql);
    if ($result) {
        $msg = "<p class='alert alert-success'>Property Updated</p>";
        header("Location:propertyview.php?msg=$msg");
        exit();
    } else {
        $msg = "<p class='alert alert-warning'>Property Not Updated</p>";
        header("Location:propertyview.php?msg=$msg");
        exit();
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
										$query = mysqli_query($con, "SELECT * FROM residential_projects WHERE pid='$pid'");
										$row = mysqli_fetch_assoc($query);
										
										$unit_details = json_decode($row['unit_details'], true);
										
									?>
													
									<div class="card-body">
										<h5 class="card-title">Property Detail</h5>
											<div class="row">
												<div class="col-xl-12">
													<div class="form-group row">
														<label class="col-lg-2 col-form-label">Title</label>
														<div class="col-lg-9">
															<input type="text" class="form-control" name="project_title" required value="<?php echo $row['1']; ?>">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-2 col-form-label">Content</label>
														<div class="col-lg-9">
															<textarea class=" form-control" name="project_description" rows="10" cols="30"><?php echo $row['2']; ?></textarea>
														</div>
													</div>
													
												</div>
												<div class="col-xl-6">
													<div class="form-group row">
														<label class="col-lg-3 col-form-label">Project Developer</label>
														<div class="col-lg-9">
															<input type="text" class="form-control" name="developer"   required value="<?php echo $row['21']; ?>">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label">Address</label>
														<div class="col-lg-9">
															<input type="text" class="form-control" name="project_location"  required value="<?php echo $row['3']; ?>">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label">Total Towers</label>
														<div class="col-lg-9">
															<input type="text" class="form-control" name="total_towers"    required value="<?php echo $row['5']; ?>">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label">Possession</label>
														<div class="col-lg-9">
															<input type="text" class="form-control" name="possession"     required value="<?php echo $row['7']; ?>">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label">City</label>
														<div class="col-lg-9">
															<input type="text" class="form-control" name="city"    required value="<?php echo $row['19']; ?>">
														</div>
													</div>
													
												</div>  
													
												
												<div class="col-xl-6">
													<div class="form-group row">
														<label class="col-lg-3 col-form-label">Project Area</label>
														<div class="col-lg-9">
															<input type="text" class="form-control" name="project_area"    required value="<?php echo $row['4']; ?>">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label">Total Units</label>
														<div class="col-lg-9">
															<input type="text" class="form-control" name="total_units"    required value="<?php echo $row['6']; ?>">
														</div>
													</div>

													<div class="form-group row">
														<label class="col-lg-3 col-form-label">Total Floor</label>
														<div class="col-lg-9">
															<input type="text" class="form-control" name="total_floor"   required value="<?php echo $row['18']; ?>">
														</div>
													</div>

													<div class="form-group row">
														<label class="col-lg-3 col-form-label">PSF</label>
														<div class="col-lg-9">
															<input type="text" class="form-control" name="psf"     required value="<?php echo $row['20']; ?>">
														</div>
													</div>
													
												</div>
											</div>


											<h4 class="card-title">Per Units Detail</h4>
											<div class="row">
												<div class="col-xl-12">
													<div id="units-container">
														<?php
														if (!empty($unit_details)) {
															foreach ($unit_details as $unit) {
														?>
															<div class="unit-detail">
																<div class="form-group row">
																	<label class="col-lg-3 col-form-label">Unit Name</label>
																	<div class="col-lg-7">
																		<select class="form-control" name="unit_name[]">
																			<option value="1 BHK" <?php echo $unit['name'] == '1 BHK' ? 'selected' : ''; ?>>1 BHK</option>
																			<option value="2 BHK" <?php echo $unit['name'] == '2 BHK' ? 'selected' : ''; ?>>2 BHK</option>
																			<option value="3 BHK" <?php echo $unit['name'] == '3 BHK' ? 'selected' : ''; ?>>3 BHK</option>
																		</select>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-lg-3 col-form-label">Unit Size</label>
																	<div class="col-lg-7">
																		<input type="text" class="form-control" name="unit_size[]" value="<?php echo $unit['size']; ?>" placeholder="Enter Unit Size">
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-lg-3 col-form-label">Unit Price</label>
																	<div class="col-lg-7">
																		<input type="text" class="form-control" name="unit_price[]" value="<?php echo $unit['price']; ?>" placeholder="Enter Unit Price">
																	</div>
																</div>
																<hr>
															</div>
														<?php
															}
														}
														?>
													</div>
													<button type="button" id="add-unit-btn" class="btn btn-primary">Add More Units</button>
												</div>
											</div>
													<br><br><br>
											
											
											
													
											<h4 class="card-title">Image & Status</h4>
											<div class="row">
											<div class="col-xl-6">
													
													
													<div class="form-group row">
														<label class="col-lg-3 col-form-label">Image1</label>
														<div class="col-lg-9">
															<input class="form-control" name="image1" type="file"    >
															<img src="property/<?php echo $row['9'];?>" alt="pimage" height="150" width="180">

														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label">Image 3</label>
														<div class="col-lg-9">
															<input class="form-control" name="image3" type="file"  >
															<img src="property/<?php echo $row['11'];?>" alt="pimage" height="150" width="180">

														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label">Image 5</label>
														<div class="col-lg-9">
															<input class="form-control" name="image4" type="file"   >
															<img src="property/<?php echo $row['13'];?>" alt="pimage" height="150" width="180">

														</div>
													</div>
												</div>
												<div class="col-xl-6">
													
													<div class="form-group row">
														<label class="col-lg-3 col-form-label">Image 2</label>
														<div class="col-lg-9">
															<input class="form-control" name="image2" type="file"    >
															<img src="property/<?php echo $row['10'];?>" alt="pimage" height="150" width="180">

														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label">image 4</label>
														<div class="col-lg-9">
															<input class="form-control" name="image5" type="file"    >
															<img src="property/<?php echo $row['12'];?>" alt="pimage" height="150" width="180">

														</div>
													</div>

													<div class="form-group row">
														<label class="col-lg-3 col-form-label">Status</label>
														<div class="col-lg-9">
															<select class="form-control" name="status">
																<option value="">Select Status</option>
																<option value="Ready To Move" <?php echo ($row['status'] == 'Ready To Move') ? 'selected' : ''; ?>>Ready To Move</option>
																<option value="New Launch" <?php echo ($row['status'] == 'New Launch') ? 'selected' : ''; ?>>New Launch</option>
																<option value="Early Possession" <?php echo ($row['status'] == 'Early Possession') ? 'selected' : ''; ?>>Early Possession</option>
																<option value="Pre Launch" <?php echo ($row['status'] == 'Pre Launch') ? 'selected' : ''; ?>>Pre Launch</option>
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

											
												<input type="submit" value="Submit" class="btn btn-primary"name="add" style="margin-left:200px;">
											
										</div>
									</form>
									
									<?php
										} 
									?>
													
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