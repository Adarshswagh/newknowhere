<?php
// Check if session is not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require("config.php");

// Check if the user is not logged in
if (!isset($_SESSION['auser'])) {
    header("location:index.php");
    exit; // Prevent further execution
}
?>

<div class="header">
    <!-- Logo -->
    <div class="header-left">
        <a href="dashboard.php" class="logo">
            <img src="assets/img/logo.png" alt="Mantision Real Estate logo" class="img-fluid logo">
        </a>
        <a href="dashboard.php" class="logo logo-small">
            <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
        </a>
    </div>
    <!-- /Logo -->

    <!-- Mobile Menu Toggle -->
    <a class="mobile_btn" id="mobile_btn">
        <i class="fa fa-bars"></i>
    </a>
    <!-- /Mobile Menu Toggle -->

    <!-- Header Right Menu -->
    <ul class="nav user-menu">
        <!-- User Menu -->
        <li class="nav-item dropdown app-dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.png" width="31" alt="Ryan Taylor"></span>
            </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        <img src="assets/img/profiles/avatar-01.png" alt="User Image" class="avatar-img rounded-circle">
                    </div>
                    <div class="user-text">
                        <h6><?php echo $_SESSION['auser']; ?></h6>
                        <p class="text-muted mb-0">Administrator</p>
                    </div>
                </div>
                <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
        </li>
        <!-- /User Menu -->
    </ul>
    <!-- /Header Right Menu -->
</div>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li>
                    <a href="dashboard.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>

                <li class="menu-title">
                    <span>Enquiries</span>
                </li>
                <li>
                    <a href="enquiry.php"><i class="fe fe-home"></i> <span>All Enquiry</span></a>
                </li>

                <li class="menu-title">
                    <span>Projects Management</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-map"></i> <span>New Projects</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="residential.php">Residential Project</a></li>
                        <li><a href="commercial.php">Commercial Buy Projects</a></li>
                        <li><a href="commercialleasing.php">Commercial Leasing Projects</a></li>
                        <li><a href="plotting.php">Plotting Projects</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-map"></i> <span>View Projects</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="residentialview.php">Residential Project</a></li>
                        <li><a href="commercialview.php">Commercial Projects</a></li>
                        <li><a href="plottingview.php">Plotting Projects</a></li>
                    </ul>
                </li>

                <li class="menu-title">
                    <span>Blog Management</span>
                </li>
                <li>
                    <a href="blog_add.php"><i class="fe fe-home"></i> <span>Add Blog</span></a>
                    <a href="blogview.php"><i class="fe fe-home"></i> <span>View Blog</span></a>


                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
