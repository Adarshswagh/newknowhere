<?php
session_start();
require("config.php");

if(!isset($_SESSION['auser'])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Ventura - Data Tables</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="assets/css/feathericon.min.css">

    <!-- Datatables CSS -->
    <link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables/select.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables/buttons.bootstrap4.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Header -->
    <?php include("header.php"); ?>

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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title mt-0 mb-4">Property View</h4>

                            <!-- Tabs -->
                            <ul class="nav nav-tabs" id="propertyTabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home_loan">Home Loan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#rent_agreement">Rent Agreement</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#rent">Rent</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#sale">Sale</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#bamboo">Bamboo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#construction">Construction</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#interior">Interior</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#digital">Digital Marketing</a>
                                </li>
                            </ul>

                            <div class="tab-content mt-3">
                                <!-- Home Loan Table -->
                                <div id="home_loan" class="tab-pane fade show active">
                                    <table id="datatable-home-loan" class="table table-striped dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Contact No</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $query = mysqli_query($con, "SELECT * FROM `home_loan`");
                                            while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['contact']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['message']; ?></td>
                                                <td>
                                                    <a href="tel:<?php echo $row['contact']; ?>" class="btn btn-primary">Call</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Rent Agreement Table -->
                                <div id="rent_agreement" class="tab-pane fade">
                                    <table id="datatable-rent-agreement" class="table table-striped dt-responsive nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Contact No</th>
                                                <th>Email</th>
                                                <th>Location</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $query = mysqli_query($con, "SELECT * FROM `rent_agreement`");
                                            while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['contact']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['location']; ?></td>
                                                <td><?php echo $row['message']; ?></td>
                                                <td>
                                                    <a href="tel:<?php echo $row['contact']; ?>" class="btn btn-primary">Call</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Rent Table -->
                                <div id="rent" class="tab-pane fade">
                                    <table id="datatable-rent" class="table table-striped dt-responsive nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Contact No</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $query = mysqli_query($con, "SELECT * FROM `rent`");
                                            while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['contact']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['message']; ?></td>
                                                <td>
                                                    <a href="tel:<?php echo $row['contact']; ?>" class="btn btn-primary">Call</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Sale Table -->
                                <div id="sale" class="tab-pane fade">
                                    <table id="datatable-sale" class="table table-striped dt-responsive nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Contact No</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $query = mysqli_query($con, "SELECT * FROM `sale`");
                                            while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['contact']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['message']; ?></td>
                                                <td>
                                                    <a href="tel:<?php echo $row['contact']; ?>" class="btn btn-primary">Call</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Bamboo Table -->
                                <div id="bamboo" class="tab-pane fade">
                                    <table id="datatable-bamboo" class="table table-striped dt-responsive nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Contact No</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $query = mysqli_query($con, "SELECT * FROM `bamboo`");
                                            while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['contact']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['message']; ?></td>
                                                <td>
                                                    <a href="tel:<?php echo $row['contact']; ?>" class="btn btn-primary">Call</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Construction Table -->
                                <div id="construction" class="tab-pane fade">
                                    <table id="datatable-construction" class="table table-striped dt-responsive nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Contact No</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $query = mysqli_query($con, "SELECT * FROM `construction`");
                                            while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['contact']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['message']; ?></td>
                                                <td>
                                                    <a href="tel:<?php echo $row['contact']; ?>" class="btn btn-primary">Call</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Interior Table -->
                                <div id="interior" class="tab-pane fade">
                                    <table id="datatable-interior" class="table table-striped dt-responsive nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Contact No</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $query = mysqli_query($con, "SELECT * FROM `interior`");
                                            while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['contact']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['message']; ?></td>
                                                <td>
                                                    <a href="tel:<?php echo $row['contact']; ?>" class="btn btn-primary">Call</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Digital Marketing Table -->
                                <!-- Digital Marketing Table -->
                                <div id="digital" class="tab-pane fade">
                                    <table id="datatable-digital" class="table table-striped dt-responsive nowrap" style="width:100%">  <!-- Fixed ID here -->
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Contact No</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $query = mysqli_query($con, "SELECT * FROM `digital`");
                                            while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['contact']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['message']; ?></td>
                                                <td>
                                                    <a href="tel:<?php echo $row['contact']; ?>" class="btn btn-primary">Call</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>

        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Datatables JS -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.select.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables/buttons.flash.min.js"></script>
    <script src="assets/plugins/datatables/buttons.print.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize all DataTables
            $('#datatable-home-loan').DataTable();
            $('#datatable-rent-agreement').DataTable();
            $('#datatable-rent').DataTable();
            $('#datatable-sale').DataTable();
            $('#datatable-bamboo').DataTable();
            $('#datatable-construction').DataTable();
            $('#datatable-interior').DataTable();
            $('#datatable-digital').DataTable();
        });
    </script>

</body>
</html>