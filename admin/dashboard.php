<?php
session_start();
require("config.php");
////code
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Ventura - Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->

		
			<!-- Header -->
				<?php include("header.php"); ?>
			<!-- /Header -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome Admin!</h3>
								<p></p>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					


					<div class="row">
						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-warning">
											<i class="fe fe-home"></i>
										</span>
										
									</div>
									<div class="dash-widget-info">
										
									<h3><?php $sql = "SELECT * FROM residential_projects";
										$query = $con->query($sql);
                						echo "$query->num_rows";?></h3>
										
										<h6 class="text-muted">Residential Projects</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-info w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-info">
											<i class="fe fe-building"></i>
										</span>
										
									</div>
									<div class="dash-widget-info">
										
									<h3><?php $sql = "SELECT * FROM commercial_projects";
										$query = $con->query($sql);
                						echo "$query->num_rows";?></h3>
										
										<h6 class="text-muted">Commercial Projects</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-info w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-secondary">
											<i class="fe fe-table"></i>
										</span>
										
									</div>
									<div class="dash-widget-info">
										
									<h3><?php $sql = "SELECT * FROM plotting_projects";
										$query = $con->query($sql);
                						echo "$query->num_rows";?></h3>
										
										<h6 class="text-muted">PLotting Projects</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-info w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						
					</div>

					<div class="row">
					<div class="col-xl-4 col-sm-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="dash-widget-header">
									<span class="dash-widget-icon bg-success">
										<i class="fe fe-quote-left"></i>
									</span>
								</div>
								<div class="dash-widget-info">
									<?php 
										// Query to get the total number of projects from all three tables
										$sql = "SELECT 
													(SELECT COUNT(*) FROM residential_projects) + 
													(SELECT COUNT(*) FROM commercial_projects) + 
													(SELECT COUNT(*) FROM plotting_projects) AS total_projects";
										
										$query = $con->query($sql);
										$row = $query->fetch_assoc();
										echo "<h3>" . $row['total_projects'] . "</h3>";
									?>
									<h6 class="text-muted">Total Projects</h6>
									<div class="progress progress-sm">
										<div class="progress-bar bg-info w-50"></div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="col-xl-4 col-sm-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="dash-widget-header">
									<span class="dash-widget-icon bg-success">
										<i class="fe fe-quote-left"></i>
									</span>
								</div>
								<div class="dash-widget-info">
									<?php 
										// Query to get the total number of featured (best sale) projects from all three tables
										$sql = "SELECT 
													(SELECT COUNT(*) FROM residential_projects WHERE featured = 1) + 
													(SELECT COUNT(*) FROM commercial_projects WHERE featured = 1) + 
													(SELECT COUNT(*) FROM plotting_projects WHERE featured = 1) AS best_sale_projects";
										
										$query = $con->query($sql);
										$row = $query->fetch_assoc();
										echo "<h3>" . $row['best_sale_projects'] . "</h3>";
									?>
									<h6 class="text-muted">Best Sale Projects</h6>
									<div class="progress progress-sm">
										<div class="progress-bar bg-info w-50"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-success">
											<i class="fe fe-quote-left"></i>
										</span>
									</div>
									<div class="dash-widget-info">
										<?php 
											// Query to get the total number of projects from all three tables
											$sql = "SELECT 
														
														(SELECT COUNT(*) FROM commercial_projects) + 
														(SELECT COUNT(*) FROM plotting_projects) AS total_projects";
											
											$query = $con->query($sql);
											$row = $query->fetch_assoc();
											echo "<h3>" . $row['total_projects'] . "</h3>";
										?>
										<h6 class="text-muted">Best ROI INvestment Projects</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-info w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						
						

					</div>

					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		

		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<script src="assets/plugins/raphael/raphael.min.js"></script>    
		<script src="assets/plugins/morris/morris.min.js"></script>  
		<script src="assets/js/chart.morris.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

</html>
