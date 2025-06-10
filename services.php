<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
								
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knowhere</title>

    <!-- <link rel="stylesheet" href="css/knowabout.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/knowservices.css">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>

 <!-- end navbar -->

 <?php include("include/header.php");?>
  <!-- banner -->
  <section id="banner-main">
    <div class="banner1" >
        <div class="banner-content">
            <h2>Services</h2>
            <p style="text-align:center;"><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Services</a></p>
        </div>
    </div>
</section>
<br>

<!-- vision & mission -->
<section class="vision-mission-section">
    <div class="container1">
        <div class="section-header">
            <div class="section-title">
                <h2>Vision & Mission</h2>
            </div>
            <div class="button-container">
                <a href="#" class="btn1">Discover More</a>
            </div>
        </div>
        <div class="content">
            <div class="image-box"></div>
            <div class="text-boxes">
                <div class="text-box">
                    <h3>Vision</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus.</p>
                    <ul>
                        <li><span>&#10003;</span> Phasellus rutrum</li>
                        <li><span>&#10003;</span> Donec at quam</li>
                        <li><span>&#10003;</span> Phasellus tristique</li>
                        <li><span>&#10003;</span> Quisque rhoncus</li>
                    </ul>
                </div>
                <div class="text-box">
                    <h3>Mission</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus, lacus ex consequat ipsum.</p>
                    <ul>
                        <li><span>&#10003;</span> Phasellus rutrum</li>
                        <li><span>&#10003;</span> Donec at quam</li>
                        <li><span>&#10003;</span> Phasellus tristique</li>
                        <li><span>&#10003;</span> Quisque rhoncus</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


   <!-- end vision & mission -->



   <section class="services-section">
        <h2>Our Services</h2>
        <div class="services-grid">
            <div class="service-item">
                <img src="images/construction.png" alt="Residential Building">
                <h3>Residential Project</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#">Read More →</a>
            </div>
            <div class="service-item">
                <img src="images/modern-building.png" alt="Hospitality Building">
                <h3>Commercial Project</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#">Read More →</a>
            </div>
            <div class="service-item">
                <img src="images/architecture.png" alt="Corporate Building">
                <h3>Plotting Project</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#">Read More →</a>
            </div>
            <div class="service-item">
                <img src="images/construction.png" alt="Residential Building">
                <h3>Residential Project</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#">Read More →</a>
            </div>
            <div class="service-item">
                <img src="images/modern-building.png" alt="Hospitality Building">
                <h3>Commercial Project</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#">Read More →</a>
            </div>
            <div class="service-item">
                <img src="images/architecture.png" alt="Corporate Building">
                <h3>Plotting Project</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#">Read More →</a>
            </div>
        </div>
    </section>

  <!--	Footer   start-->
  <?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->