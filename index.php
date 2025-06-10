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

    <link rel="stylesheet" href="css/knowhome1.css">
    <link rel="stylesheet" href="js/knowscript.js">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">







<!-- SwiperJS CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">








</head>

<style>
    @media (max-width: 768px) {
    .container-service {
        display: flex;
        overflow-x: auto;
        gap: 20px;
        scroll-snap-type: x mandatory;
        padding: 10px;
    }

    .container-service::-webkit-scrollbar {
        display: none;
    }

    .logo {
        flex: 0 0 auto;
        scroll-snap-align: start;
        text-align: center;
    }
}

/* Default property container layout for desktop remains unchanged */

/* Ensure the property container stacks cards vertically on mobile */
@media (max-width: 768px) {
    .property-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
    }

    .property-card-small {
        width: 90%;
        max-width: 400px;
    }

    .property-card-small img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
    }
}


#real-estate {
    background-color: #050f17;
    padding: 100px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container-real {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    max-width: 1400px;
    width: 100%;
    gap: 35px;
}

.featured-project {
    width: 45%;
    height: 450px;
    background-image: url('..\images\real-estate.jpg');
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: flex-end;
    position: relative;
}

.project-details {
    background-color: #f2ddc4;
    padding: 20px 30px 45px 40px;
    max-width: 50%;
}

.project-details h3 {
    font-family: "Italiana", Sans-serif;
    font-size: 28px;
    font-weight: 500;
    color: #050f17;
    margin: 0;
}

.project-details p {
    font-family: "Lexend", Sans-serif;
    font-size: 14px;
    font-weight: 300;
    line-height: 1.7em;
    color: #050F17;
    margin-bottom: 30px;
}

.see-more-btn {
    font-family: "Lexend", Sans-serif;
    font-size: 12px;
    font-weight: 500;
    text-transform: uppercase;
    background-color: #050F17;
    color: #fff;
    padding: 17px 35px;
    text-decoration: none;
}

.see-more-btn:hover {
    background-color: #A8894d;
    color: #fff;
}

.main-content {
    width: 39%;
}

.main-content h1 {
    font-family: "Italiana", Sans-serif;
    font-size: 50px;
    font-weight: 400;
    line-height: 1.3em;
    color: #E8E8E8;
}

.main-content p {
    font-family: "Lexend", Sans-serif;
    font-size: 14px;
    font-weight: 300;
    line-height: 1.7rem;
    margin-bottom: 38px;
    color: #ccc;
}

.view-projects-btn {
    font-family: "Lexend", Sans-serif;
    font-size: 12px;
    font-weight: 500;
    text-transform: uppercase;
    background-color: #A8894D;
    color: #050F17;
    padding: 17px 35px;
    text-decoration: none;
}

.view-projects-btn:hover {
    background-color: #fff;
    color: #050F17;
}

/* Animations */
@keyframes fadeInLeft {
    0% { opacity: 0; transform: translateX(-100%); }
    100% { opacity: 1; transform: translateX(0); }
}

@keyframes fadeInRight {
    0% { opacity: 0; transform: translateX(100%); }
    100% { opacity: 1; transform: translateX(0); }
}

.featured-project.animate-left,
.project-details.animate-left {
    opacity: 0;
    animation: fadeInLeft 1.5s ease-in-out forwards;
    animation-delay: 0.5s;
}

.main-content.animate-right {
    opacity: 0;
    animation: fadeInRight 1.5s ease-in-out forwards;
    animation-delay: 1s;
}

.main-content h1,
.main-content p,
.main-content .view-projects-btn {
    opacity: 0;
    animation: fadeInRight 2.5s ease-in-out forwards;
}

.main-content h1 { animation-delay: 1.5s; }
.main-content p:nth-of-type(1) { animation-delay: 2.5s; }
.main-content p:nth-of-type(2) { animation-delay: 3s; }
.main-content .view-projects-btn { animation-delay: 3.5s; }

/* Responsive Styles */
@media (max-width: 992px) {
    .featured-project, .main-content {
        width: 100%;
    }

    .project-details {
        max-width: 80%;
    }

    .main-content h1 {
        font-size: 36px;
    }

    .container-real {
        gap: 20px;
    }
}

@media (max-width: 768px) {
    .container-real {
        flex-direction: column;
        align-items: flex-start;
    }

    .project-details {
        max-width: 100%;
    }

    .main-content h1 {
        font-size: 28px;
    }

    .project-details h3 {
        font-size: 20px;
    }
}

@media (max-width: 480px) {
    .main-content h1 {
        font-size: 22px;
    }

    .main-content p {
        font-size: 13px;
    }

    .view-projects-btn,
    .see-more-btn {
        font-size: 11px;
        padding: 10px 20px;
    }

    .project-details {
        padding: 15px 20px;
    }
}

.featured-project {
    position: relative;
    width: 45%;
    min-height: 450px;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    overflow: hidden;
}

.feature-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
}

.project-details {
    position: relative;
    z-index: 2;
    background-color: #f2ddc4;
    padding: 20px 30px 45px 40px;
    max-width: 100%;
    width: 100%;
}
@media (max-width: 768px) {
    .featured-project {
        width: 100%;
        min-height: 300px;
    }
}


@media (max-width: 768px) {
    .section-title {
        font-size: 36px;
    }

    .section-description {
        font-size: 16px;
    }
}

@media (max-width: 480px) {
    .section-title {
        font-size: 28px;
    }

    .section-description {
        font-size: 15px;
        padding: 0 10px;
    }
}

/* responsive */


<style>
    /* General Responsive Adjustments */
    @media (max-width: 992px) {
        .banner-heading {
            font-size: 2.5rem !important;
        }
        
        .banner-para {
            font-size: 1rem !important;
        }
    }

    @media (max-width: 768px) {
        /* Banner Section */
        .property-search-bar {
            flex-direction: column;
        }
        
        .property-input-group,
        .property-select-group,
        .property-submit-group {
            width: 100% !important;
            margin-bottom: 10px;
        }
        
        .slider-btn {
            display: none; /* Hide arrows on mobile */
        }

        /* Services Section */
        .container-service {
            padding: 10px 5px;
        }
        
        .logo {
            min-width: 120px;
        }
        
        .logo img {
            width: 50px;
            height: 50px;
        }

        /* City Cards */
        .cities {
            height: 150px;
        }
        
        .cities-overlay {
            font-size: 1.2rem;
        }

        /* Property Cards */
        .swiper-slide {
            width: 100% !important;
            padding: 0 15px;
        }
        
        .property-title {
            font-size: 1.2rem;
        }
        
        .property-meta span {
            font-size: 0.8rem;
        }

        /* Real Estate Section */
        .featured-project,
        .main-content {
            width: 100% !important;
        }
        
        .featured-project {
            min-height: 300px;
            margin-bottom: 30px;
        }
        
        .main-content h1 {
            font-size: 2rem !important;
        }
        
        .project-details {
            max-width: 100% !important;
        }

        /* Blog Section */
        .blog-card {
            width: 100% !important;
            margin: 0 10px 20px;
        }

        /* Contact Form */
        .contact-container {
            flex-direction: column;
        }
        
        .form-container,
        .contact-info {
            width: 100% !important;
            padding: 20px !important;
        }
    }

    @media (max-width: 576px) {
        /* Banner Section */
        .banner-heading {
            font-size: 2rem !important;
        }
        
        /* City Cards */
        .col-sm-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        
        /* Property Cards */
        .button-container {
            flex-direction: column;
        }
        
        .view-more-btn {
            margin-bottom: 10px;
            width: 100%;
        }
        
        /* Enquire Button */
        #enquireButton {
            bottom: 20px;
            right: 20px;
            padding: 10px 15px;
            font-size: 0.9rem;
        }
    }

    /* Swiper Responsive Settings */
    @media (max-width: 768px) {
        .swiper.mySwiper {
            padding: 0 20px;
        }
        
        .swiper-slide {
            width: 80% !important;
        }
    }

    /* Add this to your CSS */
@media (max-width: 640px) {
  #project-card .swiper-slide {
    width: 100% !important;
    padding: 0 10px;
  }
  
  #project-card .card-entry {
    max-width: 100%;
    margin: 0 auto;
  }
}


    /* Form Inputs */
    @media (max-width: 768px) {
        input, select, textarea {
            font-size: 16px !important; /* Prevent zoom on focus in mobile */
        }
    }

    /* Modal Adjustments */
    @media (max-width: 768px) {
        #enquiryModal {
            width: 90% !important;
            left: 5% !important;
            transform: none !important;
        }
        
        #thankYouModal {
            width: 80% !important;
            left: 10% !important;
            transform: none !important;
        }
    }

    .slider-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(255, 255, 255, 0.2);
    color: black;
    border: none;
    font-size: 18px;
    padding: 2px;
    cursor: pointer;
    transition: 0.3s;
    z-index: 2;
}


#service-home {
  background-color: #050f17;
  overflow: hidden;
  position: relative;
  padding: 20px 0;
}

.slider-track {
  width: 100%;
  overflow: hidden;
  position: relative;
  padding: 0 60px; /* Add space on left and right */
  box-sizing: border-box;
}

.container-service {
  display: flex;
  gap:100px;
  width: max-content;
  animation: scrollSlider 40s linear infinite;
}

@keyframes scrollSlider {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-50%);
  }
}

.logo {
  flex: 0 0 auto;
  text-align: center;
  color: #D0E3E7;
  max-width: 200px;
}

.logo img {
  width: 100px;
  height: 100px;
  margin-bottom: 10px;
  transition: transform 0.5s ease;
}

.logo p {
  font-size: 16px;
  font-family: "Lexend", Sans-serif;
  font-weight: 500;
  line-height: 1.5;
  color: #A8894D;
}

.logo:hover img {
  transform: scale(1.1);
}


.banner-heading {
    color: #E8E8E8;
    font-family: "Italiana", Sans-serif;
    font-size: 50px;
    font-weight: 600;
    line-height: 1.3em;
    margin-bottom: 10px;
    margin-top: 0;

}

.banner-para {
    text-align: center;
    color: #e8e8e8;
    font-family: "Lexend", Sans-serif;
    font-size: 18px;
    font-weight: 300;
    line-height: 1.7rem;
}


#hero-main {
    padding-left: 20px;
    padding-right: 20px;
    background-color: #050f17;
    height: 500px;
}

.hero-section1 {
    /* background-image: url('../images/banner/knowhere\ banner-02.jpg'); */
    /* Ensure the image is in the same directory */
    background-size: cover;
    background-position: center;
    height: 550px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: #fff;
    position: relative;

}

.hero-section1::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 550px;
    background-color: rgba(0, 0, 0, 0.70);
    /* For overlay effect */
}

.property-search-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    padding: 10px;
    background-color: #ffffff21;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    max-width: 1100px;
    margin-top: 25px;
    border: 1px solid #dddddd42;
}


.property-input,
.property-select {
    width: 100%;
    padding: 10px;
    font-size: 10px;
    border: 1px solid #dcdcdc;
    /* border-radius: 5px; */
    background-color: #ffffff;
    /* color: #000000; */
    transition: border-color 0.3s ease;
    box-sizing: border-box;
    margin: 0;
    letter-spacing: 1px;
    
}


#project-section {
  padding: 40px 20px;
}

.project-card-container {
  display: flex;
  gap: 20px;
  justify-content: center;
  flex-wrap: wrap;
}

.project-card {
  position: relative;
  width: 300px;
  height: 400px;
  overflow: hidden;
  /* border-radius: 12px; */
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
}

.project-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.5s ease;
}

/* Zoom on hover */
.project-card:hover img {
  transform: scale(1.05);
}

/* Dark overlay */
.project-image-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.4);
  z-index: 1;
}

/* Text over image */
.project-text-overlay {
  position: absolute;
  bottom: 0;
  width: 100%;
  z-index: 2;
  text-align: center;
  padding-bottom: 20px;
}

.project-text {
  color: white;
  font-size: 20px;
  font-weight: bold;
  margin: 0;
  background-color: rgba(0, 0, 0, 0.6);
  display: inline-block;
  padding: 8px 16px;
  border-radius: 6px;
}

/* Scroll animation */
.scroll-fade-up {
  opacity: 0;
  transform: translateY(30px);
  transition: all 0.6s ease-out;
}

.scroll-fade-up.in-view {
  opacity: 1;
  transform: translateY(0);
}


.swiper {
  width: 100%;
  padding: 20px 0;
}

.swiper-slide {
  /* background: #fff;
  border-radius: 10px; */
  overflow: hidden;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}


#project-card {
    margin-top: 20px;
    font-family: 'lexend', sans-serif;
    background-color: #050f17;
}

.card-container {
    width: 100%;
    overflow: hidden;
    position: relative;
}

.card-items {
    display: flex;
    align-items: center;
    width: fit-content;
    animation: cardCarousel 130s infinite linear;
    animation-play-state: running;
}

/* Adjustments for .card-entry */
.card-entry {
    display: flex;
    flex-direction: column;
    position: relative;
    width: 420px;
    max-width: 100%;
    background: white;
    margin: 1em;
    box-shadow: 4px 4px 5px 0px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease-in-out;
}

/* Make images scale properly */
.card-entry img {
    width: 100%;
    height: 250px;
    object-fit: cover;
}

/* Adjust promo badge positioning */
.promo-badge {
    position: absolute;
    top: 10px;
    left: 10px;
    background-color: #050f17;
    color: #fff;
    padding: 10px 20px;
    font-size: 12px;
    font-family: 'Lexend', sans-serif;
}

.property-info {
    padding: 20px;
    background-color: #e9e4d4;
}

.property-title a {
    font-size: 20px;
    /* font-weight: 600; */
    margin-bottom: 10px;
    color: #222;
    font-family: "lexend", Sans-serif;
}

.property-title a:hover {
    color: #443822;
    text-decoration: none;
}

.price {
    color: #A8894D;
    font-family: 'Lexend', Sans-serif;
    font-size: 18px;
    font-weight: 400;
    line-height: 1.4rem;
}

.location {
    font-size: 17px;
    font-weight: 200;
    color: #866a35;
    line-height: 1.2em;
}

.property-details,
.property-meta {
    font-size: 14px;
    font-family: 'Lexend', sans-serif;
    color: #050f17;
    font-weight: 300;
    line-height: 1.7em;
    margin-bottom: 20px;
    display: flex;
    justify-content: space-between;
}

.button-container {
    display: flex;
    align-items: center;
    gap: 10px;
    justify-content: center;
}

.view-more-btn {
    font-family: "Lexend", Sans-serif;
    font-size: 12px;
    font-weight: 200;
    text-transform: uppercase;
    line-height: 1.5em;
    color: #e8e8e8;
    background-color: #050f17;
    border-style: solid;
    border-width: 0px;
    padding: 10px 70px;
    border-radius: 0px;
}

.view-more-btn:hover {
    background-color: #a8894d;
    color: #fff;
    text-decoration: none;
}

.btn-icon {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 45px;
    height: 40px;
    font-size: 18px;
    color: #fff;
    transition: background-color 0.3s;
}

.whatsapp-btn {
    background-color: #25d366;
}

.whatsapp-btn:hover {
    background-color: #1ebe5d;
    color: #fff;
}

.call-btn {
    background-color: #4285f4;
}

.call-btn:hover {
    background-color: #357ae8;
    color: #fff;
}

/* MEDIA QUERIES FOR RESPONSIVENESS */

@media only screen and (max-width: 1024px) {
    .button-container {
        flex-direction: row; /* Keep buttons side by side */
        justify-content: space-between; /* Spread them evenly */
        align-items: center;
        gap: 10px;
        flex-wrap: wrap; /* Allow wrapping if screen too narrow */
    }

    .view-more-btn,
    .btn-icon {
        flex: 1 1 auto; /* Allow buttons to shrink/grow as needed */
        text-align: center;
    }

    .view-more-btn {
        padding: 10px;
        font-size: 12px;
    }

    .btn-icon {
        height: 40px;
        font-size: 16px;
        width: auto;
    }
}


@media only screen and (max-width: 768px) {
    /* Mobile View Adjustments */
    .card-entry {
        width: 100%;
        margin: 0 0 20px 0; /* Ensure cards don't overlap */
    }

    .card-items {
        flex-wrap: wrap; /* Allow wrapping of cards */
        justify-content: center; /* Center the cards */
    }

    .property-title a {
        font-size: 24px; /* Reduce title size on smaller screens */
    }

    .view-more-btn {
        padding: 10px 40px; /* Adjust padding for mobile */
    }

    /* Reduce card image height on smaller screens */
    .card-entry img {
        height: 200px;
    }
}

@media only screen and (max-width: 480px) {
    /* Smaller mobile devices adjustments */
    .property-title a {
        font-size: 20px; /* Reduce font size further */
    }

    .location {
        font-size: 14px; /* Adjust font size */
    }

    .card-entry img {
        height: 180px; /* Even smaller images */
    }

    .button-container {
        flex-direction: row; /* ✅ Side by side */
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
    }

    .view-more-btn,
    .btn-icon {
        flex: 1 1 auto;
        text-align: center;
    }

    .view-more-btn {
        padding: 8px 16px;
        font-size: 12px;
    }

    .btn-icon {
        height: 38px;
        font-size: 16px;
        width: auto;
    }
}



/* Gallery Section */
.gallery-slider {
    position: relative;
    overflow: hidden;
    width: 100%;
    height: 450px;
    margin-top: 20px;
}

.gallery-container {
    display: flex;
    animation: slideGallery 15s linear infinite;
}

.gallery-item {
    flex-shrink: 0;
    width: 350px; /* Adjust width as needed */
    height: 100%;
    margin-right: 10px;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    /* border-radius: 10px; */
}

.gallery-section h3{
    color: #A8894D;
    font-family: "Italiana", Sans-serif;
    font-size: 50px;
    font-weight: 400;
    line-height: 1.3em;
}

.gallery-section h2{
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 40px;
}

.gallery-section{
    text-align: center;
    margin-top: 10%;
}

/* Animation for Sliding */
@keyframes slideGallery {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-100%);
    }
}

/* Duplicate the images for infinite sliding */
.gallery-container:after {
    content: '';
    display: flex;
}

.gallery-slider:hover .gallery-container {
    animation-play-state: paused;
}

</style>



<body>

<!-- navbar -->

<?php include("include/header.php");?>

 <!-- end navbar -->    

 <!-- banner -->
<section id="hero-main">
    <section class="hero-section1" data-animate="fadeInUp">
        <div class="content1">
            <h1 class="banner-heading">The Keys to Your Home</h1>
            <p class="banner-para">Welcome to Knowhere, your trusted property consultant.</p>
            <form id="propertySearchForm" action="prolist1.php" method="GET" class="property-search-bar">
                <div class="property-input-group">
                    <input type="text" name="city" id="city" placeholder="Enter city" class="property-input">
                </div>

                <div class="property-input-group ">
                    <input type="text" name="location" id="location" placeholder="Enter location" class="property-input">
                </div>

                <div class="property-select-group " >
                    <select name="project_type" id="projectType" class="property-select" onchange="updateSubtypeOptions()" style="padding:11px;">
                        <option value="">Select Project Type</option>
                        <option value="residential">Residential</option>
                        <option value="commercial">Commercial</option>
                        <option value="plotting">Plotting</option>
                    </select>
                </div>

                <div class="property-select-group ">
                    <select name="project_subtype" id="projectSubtype" class="property-select" style="padding:11px;">
                        <option value="">Select Project Subtype</option>
                    </select>
                </div>

<div class="property-input-group">
    <select name="budget" id="budget" class="property-input">
        <option value="">Select maximum budget</option>
        <option value="500000">Up to ₹5 Lakhs</option>
        <option value="1000000">Up to ₹10 Lakhs</option>
        <option value="2000000">Up to ₹20 Lakhs</option>
        <option value="3000000">Up to ₹30 Lakhs</option>
        <option value="5000000">Up to ₹50 Lakhs</option>
        <option value="10000000">Up to ₹1 Crore</option>
        <option value="20000000">Up to ₹2 Crore</option>
        <option value="50000000">Up to ₹5 Crore</option>
        <option value="50000001">Above ₹5 Crore</option>
    </select>
</div>


                <div class="property-submit-group">
                    <button type="submit" class="property-search-btn">
                        
                        <i class="fas fa-search"></i> Search
                    </button>
                </div>
            </form>




                <script>
                    function updateSubtypeOptions() {
                        const projectType = document.getElementById('projectType').value;
                        const subtypeDropdown = document.getElementById('projectSubtype');
                        subtypeDropdown.innerHTML = ''; // Clear previous options

                        const residentialOptions = [
                            { value: 'Select  Subtype', text: 'Select  Subtype' },
                            { value: '1 BHK', text: '1 BHK' },
                            { value: '2 BHK', text: '2 BHK' },
                            { value: '3 BHK', text: '3 BHK' },
                            { value: '4 BHK', text: '4 BHK' },
                            { value: '5 BHK', text: '5 BHK' },
                            { value: '2.5 BHK', text: '2.5 BHK' }
                        ];

                        const commercialOptions = [
                            { value: 'Select  Subtype', text: 'Select  Subtype' },
                            { value: 'Shop', text: 'Shop' },
                            { value: 'Office', text: 'Office' },
                            { value: 'Restaurant', text: 'Restaurant' },
                            { value: 'Studio', text: 'Studio' }
                        ];

                        const plottingOptions = [
                            { value: 'Select  Subtype', text: 'Select  Subtype' },
                            { value: 'N/A Non Agriculturer', text: 'Non Agriculture' },
                            { value: 'Commercial', text: 'Commercial' },
                            { value: 'R Zone Residential', text: 'R Zone Residential' },
                            { value: 'Farm Land', text: 'Farm Land' },
                            { value: 'Industrial', text: 'Industrial' }
                        ];

                        let options = [];
                        if (projectType === 'residential') options = residentialOptions;
                        else if (projectType === 'commercial') options = commercialOptions;
                        else if (projectType === 'plotting') options = plottingOptions;

                        options.forEach(option => {
                            const opt = document.createElement('option');
                            opt.value = option.value;
                            opt.textContent = option.text;
                            subtypeDropdown.appendChild(opt);
                        });
                    }
                </script>


            <!-- Navigation Buttons -->
            <button class="slider-btn prev" onclick="prevSlide()">&#10094;</button>
            <button class="slider-btn next" onclick="nextSlide()">&#10095;</button>

            <script>
                let slideIndex = 0;
                const images = [
                    "./images/banner/knowhere_banner-01.jpg",
                    "./images/banner/knowhere_banner-02.jpg",
                    "./images/banner/knowhere_banner-03.jpg"
                ];

                function showSlide(index) {
                    const heroSection = document.querySelector('.hero-section1');
                    heroSection.style.backgroundImage = `url('${images[index]}')`;
                }

                function nextSlide() {
                    slideIndex = (slideIndex + 1) % images.length;
                    showSlide(slideIndex);
                }

                function prevSlide() {
                    slideIndex = (slideIndex - 1 + images.length) % images.length;
                    showSlide(slideIndex);
                }

                // Automatic slide every 5 seconds
                setInterval(nextSlide, 5000);

                // Initialize first image
                showSlide(slideIndex);
            </script>

                
        </div>
    </section>
</section>

<!--end banner  -->


<!-- services -->
<section id="service-home" style="padding-top: 50px;">
  <div class="slider-track">
    <div class="container-service">
      <!-- Original logos -->
      <div class="logo"><a href="home-loan.php"><img src="./images/service/s1.png" alt=""><p>Home Loan</p></a></div>
      <div class="logo"><a href="interior.php"><img src="./images/service/s2.png" alt=""><p>Interior</p></a></div>
      <div class="logo"><a href="rent.php"><img src="./images/service/s4.png" alt=""><p>Rent Agreement</p></a></div>
      <div class="logo"><a href="sale-rent.php"><img src="./images/service/s5.png" alt=""><p>Sale Or Rent</p></a></div>
      <div class="logo"><a href="construction.php"><img src="./images/service/s6.png" alt=""><p>Construction</p></a></div>
      <div class="logo"><a href="digital.php"><img src="./images/service/s8.png" alt=""><p>Digital Marketing</p></a></div>
      <div class="logo"><a href="bamboo.php"><img src="./images/service/s9.png" alt=""><p>Bamboo Products</p></a></div>

      <!-- Duplicate logos for seamless loop -->
      <div class="logo"><a href="home-loan.php"><img src="./images/service/s1.png" alt=""><p>Home Loan</p></a></div>
      <div class="logo"><a href="interior.php"><img src="./images/service/s2.png" alt=""><p>Interior</p></a></div>
      <div class="logo"><a href="rent.php"><img src="./images/service/s4.png" alt=""><p>Rent Agreement</p></a></div>
      <div class="logo"><a href="sale-rent.php"><img src="./images/service/s5.png" alt=""><p>Sale Or Rent</p></a></div>
      <div class="logo"><a href="construction.php"><img src="./images/service/s6.png" alt=""><p>Construction</p></a></div>
      <div class="logo"><a href="digital.php"><img src="./images/service/s8.png" alt=""><p>Digital Marketing</p></a></div>
      <div class="logo"><a href="bamboo.php"><img src="./images/service/s9.png" alt=""><p>Bamboo Products</p></a></div>
    </div>
  </div>
</section>



<script>
    const container = document.querySelector('.container-service');
    let isHovered = false;

    // Function to scroll the icons one by one
    function scrollIcons() {
        if (!isHovered) {
            const firstIcon = container.firstElementChild; // Get the first icon
            container.appendChild(firstIcon); // Move the first icon to the end
        }
    }

    // Set interval to scroll every 10 seconds
    const scrollInterval = setInterval(scrollIcons, 4000);

    // Stop scrolling on hover
    container.addEventListener('mouseenter', () => {
        isHovered = true;
    });

    // Resume scrolling when hover ends
    container.addEventListener('mouseleave', () => {
        isHovered = false;
    });
</script>




 <!--end  services -->


<!-- explore cities -->


<section class="project-section">
    <div class="content-wrapper" id="contentWrapper">
        <h2 class="section-title animate-up">Find Projects In Our City</h2>
        <p class="section-description animate-up" style="max-width:1100px;">
        Find the perfect residential and commercial projects in your favorite city. 
        </p>
    </div>


</section>
<section>
    <div class="container my-5">
        <div class="row g-4 justify-content-center">
            <!-- Card 1 -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="pune.php" class="city-link">
                    <div class="cities">
                        <img src="images/cities/Pune.png" alt="Ready to Move">
                        <div class="cities-overlay">Pune</div>
                    </div>
                </a>
            </div>
            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="mumbai.php" class="city-link">
                    <div class="cities">
                        <img src="images/cities/mumbai.png" alt="Under Construction">
                        <div class="cities-overlay">Mumbai</div>
                    </div>
                </a>
            </div>
            <!-- Card 3 -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="bangalore.php" class="city-link">
                    <div class="cities">
                        <img src="images/cities/ban.png" alt="New Launch">
                        <div class="cities-overlay">Bangalore</div>
                    </div>
                </a>
            </div>
            <!-- Card 4 -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="nagpur.php" class="city-link">
                    <div class="cities">
                        <img src="images/cities/nagpur.png" alt="Affordable Housing">
                        <div class="cities-overlay">Nagpur</div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row g-4 justify-content-center">
            <!-- Card 1 -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="hyderabad.php" class="city-link">
                    <div class="cities">
                        <img src="./images/cities/hydrebad.png" alt="Ready to Move">
                        <div class="cities-overlay">Hyderabad</div>
                    </div>
                </a>
            </div>
            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="goa.php" class="city-link">
                    <div class="cities">
                        <img src="images/cities/goa.png" alt="Under Construction">
                        <div class="cities-overlay">Goa</div>
                    </div>
                </a>
            </div>
            <!-- Card 3 -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="delhi-ncr.php" class="city-link">
                    <div class="cities">
                        <img src="images/cities/delhi.png" alt="New Launch">
                        <div class="cities-overlay">Delhi-NCR</div>
                    </div>
                </a>
            </div>
            <!-- Card 4 -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="ahmedabad.php" class="city-link">
                    <div class="cities">
                        <img src="images/cities/ahmedabad.png" alt="Affordable Housing">
                        <div class="cities-overlay">Ahmedabad</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- end explore cities  -->










 <!-- property type  -->

<section class="project-section">
    <div class="content-wrapper" id="contentWrapper">
        <h2 class="section-title animate-up">Explore Properties</h2>
        <p class="section-description animate-up">
            At Knowhere, we offer a comprehensive range of real estate services to cater to the
            diverse needs of our clients. Our services include. 
        </p>
    </div>


</section>
<section id="project-section">
  <div class="project-card-container">
    <div class="project-card scroll-fade-up">
      <img src="./images/residential_property.png" alt="Residential Property">
      <div class="project-image-overlay"></div>
      <div class="project-text-overlay">
        <h2 class="project-text">Residential Projects</h2>
      </div>
    </div>
    <div class="project-card scroll-fade-up">
      <img src="./images/commercial_property.png" alt="Commercial Property">
      <div class="project-image-overlay"></div>
      <div class="project-text-overlay">
        <h2 class="project-text">Commercial Projects</h2>
      </div>
    </div>
    <div class="project-card scroll-fade-up">
      <img src="./images/plotting_property.png" alt="Plotting Property">
      <div class="project-image-overlay"></div>
      <div class="project-text-overlay">
        <h2 class="project-text">Plots/Villas Projects</h2>
      </div>
    </div>
  </div>
</section>



<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    breakpoints: {
      640: {
        slidesPerView: 1.5,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });

  // Pause on card click and resume after delay
  const cards = document.querySelectorAll('.card-link');
  cards.forEach(card => {
    card.addEventListener('click', function(e) {
      swiper.autoplay.stop();
      setTimeout(() => {
        swiper.autoplay.start();
      }, 5000); // Resume after 5 seconds
    });
  });
</script>



<!-- end property type -->




<!-- real estate  -->
<section id="real-estate">
    <div class="container-real">
        <!-- Feature Image Section -->
        <div class="featured-project animate-left">
            <img src="images/real-estate.jpg" alt="Featured Real Estate Project" class="feature-img" />
            <div class="project-details animate-left">
                <h3>Featured Project</h3>
                <p>Discover Your Dream Property, Tailored to Your Lifestyle!</p>
                <a href="properties.php" class="see-more-btn">View Projects</a>
            </div>
        </div>

        <!-- Main Content Section -->
        <div class="main-content animate-right">
            <h1>Your Dream project Starts with Knowhere</h1>
            <p>At Knowhere, we understand that buying or selling a property can be a daunting task. That's why we strive to make the process as smooth and stress-free as possible. We have a team of highly experienced professionals who are dedicated to providing you with personalized solutions that cater to your unique needs. <br>Our expertise lies in providing end-to-end real estate services, including property search, legal documentation, property valuation, and much more. We work closely with our clients to understand their requirements and offer them customized solutions that are tailored to their needs.</p>
            <!-- <p>Our expertise lies in providing end-to-end real estate services, including property search, legal documentation, property valuation, and much more. We work closely with our clients to understand their requirements and offer them customized solutions that are tailored to their needs.</p> -->
            <a href="about.php" class="view-projects-btn">Read More</a>
        </div>
    </div>
</section>




<!--end real esatte  -->




 <!-- property crad carousel -->
 <section class="project-section">
    <div class="content-wrapper">
        <h2 class="section-title animate-up">Our Projects</h2>
        <p class="section-description animate-up">
            Welcome to Knowhere, your trusted property consultant. We are committed to providing you with
            exceptional services and helping you find your dream home.
        </p>
    </div>
</section>


<section id="project-card">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php 
                // Query for fetching residential, commercial, and plotting data
                $queryResidential = mysqli_query($con, "SELECT * FROM residential_projects");
                $queryCommercial = mysqli_query($con, "SELECT * FROM commercial_projects");
                $queryPlotting = mysqli_query($con, "SELECT * FROM plotting_projects");

                // Fetch and display residential projects
                while($row = mysqli_fetch_array($queryResidential)) {
                ?>
                    <div class="swiper-slide">
                        <a href="Prodetail.php?pid=<?php echo $row['0']; ?>" class="card-link">
                            <div class="card-entry">
                                    <div class="overlay-black">
                                        <img src="admin/property/<?php echo $row['9'];?>" alt="Residential Property Image">
                                        <div class="promo-badge">Residential Projects</div>
                                    </div>
                                    <div class="property-info">
                                        <h3 class="property-title">
                                            <a href="Prodetail.php?pid=<?php echo $row['0']; ?>">
                                                <?php echo $row['1']; ?>
                                            </a>
                                        </h3>
                                        <div class="property-meta">
                                            <span class="location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                            <span class="land-area location"><i class="fas fa-vector-square"></i> <?php echo $row['4']; ?> </span>
                                            <span class="towers location"><i class="fa-solid fa-building"></i> <?php echo $row['5']; ?> Towers</span>
                                        </div>
                                        <div class="property-meta">
                                            <span class="total-units location">Total Units: <?php echo $row['total_units']; ?></span>
                                        </div>
                                        <div class="button-container">
    <a href="Prodetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>

    <div class="icon-row">
        <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="tel:+1234567890" class="btn-icon call-btn">
            <i class="fas fa-phone"></i>
        </a>
    </div>
</div>

                                    </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>


                <?php
                while($row = mysqli_fetch_array($queryCommercial)) {
                ?>
                        <div class="swiper-slide">
                            <a href="comprodetail.php?pid=<?php echo $row['0']; ?>" class="card-link">
                                <div class="card-entry">
                                                <div class="overlay-black">
                                                    <img src="admin/property/<?php echo $row['15'];?>" alt="Residential Property Image">
                                                    <div class="promo-badge">Commercial Projects</div>
                                                    </div>
                                                <div class="property-info">
                                                    <h3 class="property-title">
                                                        <a href="comprodetail.php?pid=<?php echo $row['0']; ?>" class="property-title">
                                                            <?php echo $row['1']; ?>
                                                        </a>
                                                    </h3>
                                                    <div class="property-meta">
                                                        <span class="location card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $row['8'];?></span>
                                                        <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                                        <span class="land-area location card-location"><i class="fas fa-vector-square"></i> <?php echo $row['4']; ?></span>

                                                        
                                                    </div>
                                                    <div class="property-meta">
                                                        <span class="total-units location card-location1">Typology : <?php echo $row['5']; ?></span>
                                                        
                                                    </div>  
                                                    <div class="button-container">
                                                        <!-- "Know More" button -->
                                                        <a href="comprodetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>

                                                        <!-- WhatsApp Button -->
                                                        <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                                                            <i class="fab fa-whatsapp"></i>
                                                        </a>

                                                        <!-- Call Button -->
                                                        <a href="tel:+1234567890" class="btn-icon call-btn">
                                                            <i class="fas fa-phone"></i>
                                                        </a>
                                                    </div>


                                                    
                                                    <!-- <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">VIEW MORE</a> -->
                                                    
                                                </div>
                                </div>
                            </a>
                        </div>
                <?php } ?>


                <?php
                while($row = mysqli_fetch_array($queryPlotting)) {
                ?>
                        <div class="swiper-slide">
                            <a href="plotdetail.php?pid=<?php echo $row['0']; ?>" class="card-link">
                                <div class="card-entry">
                                            <div class="overlay-black">
                                                <img src="admin/property/<?php echo $row['13']; ?>" alt="Plotting Property Image">
                                                <div class="promo-badge">Plotting Project</div>
                                            </div>
                                                <div class="property-info">
                                                    <h3 class="property-title">
                                                        <a href="plotdetail.php?pid=<?php echo $row['0']; ?>" class="property-title">
                                                            <?php echo $row['1']; ?>
                                                        </a>
                                                    </h3>
                                                    <div class="property-meta">
                                                        <span class="location card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $row['6'];?></span>
                                                        <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                                        <span class="land-area location card-location"><i class="fas fa-vector-square"></i> <?php echo $row['5']; ?></span>
                                                    </div>
                                                    <div class="property-meta">
                                                        <span class="total-units location card-location1">Land Area : <?php echo $row['4']; ?></span>
                                                        
                                                    </div> 
                                                    <div class="button-container">
                                                        <!-- "Know More" button -->
                                                        <a href="plotdetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>

                                                        <!-- WhatsApp Button -->
                                                        <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                                                            <i class="fab fa-whatsapp"></i>
                                                        </a>

                                                        <!-- Call Button -->
                                                        <a href="tel:+1234567890" class="btn-icon call-btn">
                                                            <i class="fas fa-phone"></i>
                                                        </a>
                                                    </div>


                                                    
                                                    <!-- <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">VIEW MORE</a> -->
                                                    
                                                </div>
                                </div>
                            </a>
                        </div>
                <?php } ?>
            </div>
        </div>
</section>

<!-- SwiperJS Script -->

<!-- <script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,          
    autoplay: {
      delay: 1000,       
      disableOnInteraction: false, 
    },
    slidesPerView: 3,    
    spaceBetween: 20,    
    centeredSlides: true, 
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // Pause slider on hover
  document.querySelector(".swiper").addEventListener("mouseenter", function () {
    swiper.autoplay.stop();
  });

  // Resume slider on mouse leave
  document.querySelector(".swiper").addEventListener("mouseleave", function () {
    swiper.autoplay.start();
  });
</script> -->


<!-- end property cad acrousel -->





 <!-- property crad carousel -->
 <section class="project-section">
    <div class="content-wrapper">
        <h2 class="section-title animate-up">Best Sellers</h2>
        <p class="section-description animate-up">
        Explore our Best Sellers – the top choices trusted by customers for quality and value. Find your perfect fit among our most popular picks, crafted to meet every need!
        </p>
    </div>

</section>

<section id="project-card">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php 
                // Query for fetching residential, commercial, and plotting data
                $queryResidential = mysqli_query($con, "SELECT * FROM residential_projects WHERE featured = 1");
                $queryCommercial = mysqli_query($con, "SELECT * FROM commercial_projects WHERE featured = 1");
                $queryPlotting = mysqli_query($con, "SELECT * FROM plotting_projects WHERE featured = 1");

                // Fetch and display residential projects
                while($row = mysqli_fetch_array($queryResidential)) {
                ?>
                    <div class="swiper-slide">
                        <a href="Prodetail.php?pid=<?php echo $row['0']; ?>" class="card-link">
                            <div class="card-entry">
                                    <div class="overlay-black">
                                        <img src="admin/property/<?php echo $row['9'];?>" alt="Residential Property Image">
                                        <div class="promo-badge">Residential Projects</div>
                                    </div>
                                    <div class="property-info">
                                        <h3 class="property-title">
                                            <a href="Prodetail.php?pid=<?php echo $row['0']; ?>">
                                                <?php echo $row['1']; ?>
                                            </a>
                                        </h3>
                                        <div class="property-meta">
                                            <span class="location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                            <span class="land-area location"><i class="fas fa-vector-square"></i> <?php echo $row['4']; ?> </span>
                                            <span class="towers location"><i class="fa-solid fa-building"></i> <?php echo $row['5']; ?> Towers</span>
                                        </div>
                                        <div class="property-meta">
                                            <span class="total-units location">Total Units: <?php echo $row['total_units']; ?></span>
                                        </div>
                                        <div class="button-container">
                                            <a href="Prodetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>
                                            <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                            <a href="tel:+1234567890" class="btn-icon call-btn">
                                                <i class="fas fa-phone"></i>
                                            </a>
                                        </div>
                                    </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>


                <?php
                while($row = mysqli_fetch_array($queryCommercial)) {
                ?>
                        <div class="swiper-slide">
                            <a href="comprodetail.php?pid=<?php echo $row['0']; ?>" class="card-link">
                                <div class="card-entry">
                                                <div class="overlay-black">
                                                    <img src="admin/property/<?php echo $row['15'];?>" alt="Residential Property Image">
                                                    <div class="promo-badge">Commercial Projects</div>
                                                    </div>
                                                <div class="property-info">
                                                    <h3 class="property-title">
                                                        <a href="comprodetail.php?pid=<?php echo $row['0']; ?>" class="property-title">
                                                            <?php echo $row['1']; ?>
                                                        </a>
                                                    </h3>
                                                    <div class="property-meta">
                                                        <span class="location card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $row['8'];?></span>
                                                        <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                                        <span class="land-area location card-location"><i class="fas fa-vector-square"></i> <?php echo $row['4']; ?></span>

                                                        
                                                    </div>
                                                    <div class="property-meta">
                                                        <span class="total-units location card-location1">Typology : <?php echo $row['5']; ?></span>
                                                        
                                                    </div>  
                                                    <div class="button-container">
                                                        <!-- "Know More" button -->
                                                        <a href="comprodetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>

                                                        <!-- WhatsApp Button -->
                                                        <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                                                            <i class="fab fa-whatsapp"></i>
                                                        </a>

                                                        <!-- Call Button -->
                                                        <a href="tel:+1234567890" class="btn-icon call-btn">
                                                            <i class="fas fa-phone"></i>
                                                        </a>
                                                    </div>


                                                    
                                                    <!-- <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">VIEW MORE</a> -->
                                                    
                                                </div>
                                </div>
                            </a>
                        </div>
                <?php } ?>


                <?php
                while($row = mysqli_fetch_array($queryPlotting)) {
                ?>
                        <div class="swiper-slide">
                            <a href="plotdetail.php?pid=<?php echo $row['0']; ?>" class="card-link">
                                <div class="card-entry">
                                            <div class="overlay-black">
                                                <img src="admin/property/<?php echo $row['13']; ?>" alt="Plotting Property Image">
                                                <div class="promo-badge">Plotting Project</div>
                                            </div>
                                                <div class="property-info">
                                                    <h3 class="property-title">
                                                        <a href="plotdetail.php?pid=<?php echo $row['0']; ?>" class="property-title">
                                                            <?php echo $row['1']; ?>
                                                        </a>
                                                    </h3>
                                                    <div class="property-meta">
                                                        <span class="location card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $row['6'];?></span>
                                                        <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                                        <span class="land-area location card-location"><i class="fas fa-vector-square"></i> <?php echo $row['5']; ?></span>
                                                    </div>
                                                    <div class="property-meta">
                                                        <span class="total-units location card-location1">Land Area : <?php echo $row['4']; ?></span>
                                                        
                                                    </div> 
                                                    <div class="button-container">
                                                        <!-- "Know More" button -->
                                                        <a href="plotdetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>

                                                        <!-- WhatsApp Button -->
                                                        <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                                                            <i class="fab fa-whatsapp"></i>
                                                        </a>

                                                        <!-- Call Button -->
                                                        <a href="tel:+1234567890" class="btn-icon call-btn">
                                                            <i class="fas fa-phone"></i>
                                                        </a>
                                                    </div>


                                                    
                                                    <!-- <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">VIEW MORE</a> -->
                                                    
                                                </div>
                                </div>
                            </a>
                        </div>
                <?php } ?>
            </div>
        </div>
</section>

<!-- SwiperJS Script -->


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    spaceBetween: 20,
    centeredSlides: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 10
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 1,
        spaceBetween: 15
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      // when window width is >= 1024px
      1024: {
        slidesPerView: 3,
        spaceBetween: 30
      }
    }
  });

  // Pause autoplay when hovering over a slide
  document.querySelectorAll(".swiper-slide").forEach((slide) => {
    slide.addEventListener("mouseenter", function () {
      swiper.autoplay.stop();
    });

    slide.addEventListener("mouseleave", function () {
      swiper.autoplay.start();
    });
  });
</script>




<!-- gallery -->
<section class="gallery-section section-hidden" style = "margin-top:70px">
<h3>Our Clients</h3>
<!-- <h2>Don't just take our word for it</h2> -->
    <div class="gallery-slider">
        <div class="gallery-container">
            <div class="gallery-item">
                <img src="./images/test/C1.png" alt="Gallery Image 1" data-index="0">
            </div>
            <div class="gallery-item">
                <img src="./images/test/C2.png" alt="Gallery Image 2" data-index="1">
            </div>
            <div class="gallery-item">
                <img src="./images/test/C3.png" alt="Gallery Image 3" data-index="2">
            </div>
            <div class="gallery-item">
                <img src="./images/test/C4.png" alt="Gallery Image 4" data-index="3">
            </div>
            <div class="gallery-item">
                <img src="./images/test/C5.png" alt="Gallery Image 5" data-index="4">
            </div>
            <div class="gallery-item">
                <img src="./images/test/C6.png" alt="Gallery Image 5" data-index="4">
            </div>
            <div class="gallery-item">
                <img src="./images/test/C7.png" alt="Gallery Image 5" data-index="4">
            </div>
            <div class="gallery-item">
                <img src="./images/test/C8.png" alt="Gallery Image 5" data-index="4">
            </div>
            <div class="gallery-item">
                <img src="./images/test/C9.png" alt="Gallery Image 5" data-index="4">
            </div>
            <div class="gallery-item">
                <img src="./images/test/C10.png" alt="Gallery Image 5" data-index="4">
            </div>
        </div>
    </div>
</section>

<!-- end property cad acrousel -->



 <!-- property crad carousel roi investment -->



<!-- end property cad acrousel -->



 <!-- blog -->

 
<section class="project-section">
    <div class="content-wrapper">
        <h2 class="section-title animate-up">Blog & News</h2>
        <p class="section-description animate-up">
        Explore our Blog & News section for the latest updates, trends, and expert insights in real estate. Stay informed to make the best decisions for your property journey.       </p>
    </div>

</section>





<?php
// Include the database connection file
include('config.php');

// Initialize the $result variable
$result = null;

// Query to fetch the latest 3 blogs from the database
$query = "SELECT * FROM blogs ORDER BY created_at DESC LIMIT 3";
$result = mysqli_query($con, $query);

// Check if the query executed successfully
if (!$result) {
    echo "<p>Error: " . mysqli_error($con) . "</p>";
}
?>

<section id="blogs">
        <section class="blog-carousel">
            <div class="carousel-container">
                <div class="carousel-track">
                    <?php
                    // Check if there are any blog posts fetched from the database
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            // Display each blog as a card
                            ?>
                            <div class="blog-card" >
                            <a href="blog_detail.php?id=<?php echo $row['id']; ?>" class="read-link"><img src="./admin/property/<?php echo $row['image']; ?>" alt="Blog Image" /></a>
                            <a href="blog_detail.php?id=<?php echo $row['id']; ?>" class="read-link"><h3><?php echo $row['title']; ?></h3></a       >
                                <!-- <p><?php echo substr($row['content'], 0, 100); ?>...</p> -->
                                <a href="blog_detail.php?id=<?php echo $row['id']; ?>" class="read-link">Read More →</a>
                            </div>
                            <?php
                        }
                    } else {
                        echo "<p>No blogs found.</p>";
                    }
                    ?>
                </div>
            </div>
        </section>
</section>







    
 <!-- end blog -->

 <!-- get in touch -->


 <section class="contact-section">
    <div class="contact-container">
        <div class="form-container">
            <form id="contactForm" style="text-align:center">
                <input type="text" name="name" placeholder="Name *" required>
                <input type="text" name="contact" placeholder="Phone Number *" required>
                <input type="email" name="email" placeholder="Email *" required class="email-group">
                <textarea name="message" placeholder="Message *" required></textarea>
                <button type="submit" style="margin-top:30px">SEND MESSAGE</button>
            </form>
        </div>

        <!-- Thank You Modal -->
        <div id="thankYouModal" style="display:none; position:fixed; top:20%; left:50%; transform:translate(-50%, -50%); background:#d4edda; padding:20px; border-radius:8px; box-shadow:0 4px 8px rgba(0,0,0,0.2); z-index:1000;">
            <span id="closeThankYouModal" style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 20px;">&times;</span>
            <h3>Thank You!</h3>
            <p style="text-align: left; color: #050f17; font-size: 14px; font-family: 'Lexend', Sans-serif; max-width: 700px;">
                Thank you for your interest. We will get back to you soon.
            </p>
        </div>

        <script>
               document.getElementById("contactForm").onsubmit = function(event) {
                    event.preventDefault(); // Prevent default form submission

                    const formData = new FormData(this);

                    fetch("submit_form.php", {
                        method: "POST",
                        body: formData
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error("Network response was not ok: " + response.status);
                        }
                        return response.text();
                    })
                    .then(data => {
                        console.log("Server Response:", data);
                        if (data.trim() === "Form submitted successfully!") {
                            document.getElementById("contactForm").reset();
                            document.getElementById("thankYouModal").style.display = "block";
                        } else {
                            alert("Error: " + data);
                        }
                    })
                    .catch(error => {
                        console.error("Fetch Error:", error);
                        alert("Failed to submit. Error: " + error.message);
                    });
                };

// Close Thank You modal
document.getElementById("closeThankYouModal").onclick = function() {
    document.getElementById("thankYouModal").style.display = "none";
};

        </script>
        <div class="contact-info">
            <h2>Get In Touch</h2>
            <p style = "color:white;">Ready to make your real estate dreams a reality? Get in touch with Knowhere for trusted guidance, tailored solutions, and a seamless property experience.</p>
            <ul>
            <li style="color:#fff;">
                <i class="fas fa-map-marker-alt"></i>
                <a href="https://maps.app.goo.gl/2Sxk7Gus97hJMNT7A" target="_blank" style="color:#fff; text-decoration:none;">
                &nbsp; Wakad, Pimpri-Chinchwad, Pune 411057
                </a>
            </li>
                <li><a href="mailto:info@knowhere.in" style="color:#fff; text-decoration:none;"><i class="fas fa-envelope"></i>&nbsp;&nbsp; info@knowhere.in </a></li>
                <li> <a href="tel:+919112211291" style="color:#fff; text-decoration:none;"><i class="fas fa-phone"></i>&nbsp;&nbsp;&nbsp;+91 91122 11291</a></li>
                <!-- <li><i class="fas fa-clock"></i> 07.00 AM - 23.00 PM</li> -->
            </ul>
        </div>
    </div>
</section>


 <!-- end get iin touch -->






<!-- Enquire Button -->
<div id="enquireButtonContainer">
    <button id="enquireButton">Book A Demo</button>
</div>

<!-- Enquiry Modal -->
<div id="enquiryModal" style="display:none;">
    <div class="form-container" style="position: relative; padding: 20px; background: #eaeaea; border-radius: px;">
        <span id="closeModal" style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 20px;">&times;</span>
        <h3>Enquiry Form</h3>
        <form id="enquiryForm">
            <input type="text" name="name" id="name" placeholder="Your Name" required>
            <input type="email" name="email" id="email" placeholder="Your Email" required>
            <input type="text" name="contact" id="contact" placeholder="Your Contact Number" required pattern="[0-9]{10}" title="Enter a valid 10-digit phone number">
            <textarea name="message" id="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</div>

<!-- Thank You Modal -->
<div id="thankYouModal" style="display:none; position:fixed; top:25%; left:50%; transform:translate(-50%, -50%); background:#d4edda; padding:20px; border-radius:8px; box-shadow:0 4px 8px rgba(0,0,0,0.2); z-index:1000;">
    <span id="closeThankYouModal" style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 20px;">&times;</span>
    <h3>Thank You!</h3>
    <p style="     text-align: left;
    color: #050f17;
    font-size: 14px;
    font-family: "Lexend", Sans-serif;
    max-width: 700px;">Thank you for your interest. We will get back to you soon.</p>
    <!-- <button type="button" id="closeThankYouModal">Close</button> -->
</div>

<script>
    // Show enquiry modal
    document.getElementById("enquireButton").onclick = function() {
        document.getElementById("enquiryModal").style.display = "block";
    };
    // Hide enquiry modal
    document.getElementById("closeModal").onclick = function() {
        document.getElementById("enquiryModal").style.display = "none";
    };

    // Hide thank you modal and reload page
    document.getElementById("closeThankYouModal").onclick = function() {
        document.getElementById("thankYouModal").style.display = "none";
        location.reload(); // Reload the page
    };

    // Form submission using AJAX
    document.getElementById("enquiryForm").onsubmit = function(event) {
        event.preventDefault(); // Prevent default form submission

        const formData = new FormData(this);

        fetch("submit_form.php", {
            method: "POST",
            body: formData
        })
            .then(response => response.text())
            .then(data => {
                console.log("Response from server:", data); // Debugging response

                // Handle success response
                if (data.includes("Form submitted successfully!")) {
                    // Close enquiry modal
                    document.getElementById("enquiryModal").style.display = "none";
                    // Show thank you modal
                    document.getElementById("thankYouModal").style.display = "block";
                } else {
                    alert("Failed to submit the form. Please try again.");
                }
            })
            .catch(error => {
                console.error("Error:", error);
                alert("An error occurred while submitting the form.");
            });
    };

</script>

<!-- end enquiry -->

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const section = document.querySelector("#hero-main");
        const heading = document.querySelector(".banner-heading");
        const paragraph = document.querySelector(".banner-para");

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    heading.classList.add("animate");
                    paragraph.classList.add("animate");
                }
            });
        }, {
            threshold: 0.5 // Trigger when 50% of the section is visible
        });

        observer.observe(section);
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const elements = document.querySelectorAll('.animate-up');

        function handleScroll() {
            elements.forEach((el) => {
                const rect = el.getBoundingClientRect();
                const windowHeight = window.innerHeight;

                // Check if the element is in view
                if (rect.top <= windowHeight - 100 && rect.bottom >= 0) {
                    el.classList.add('visible');
                }
            });
        }

        // Add event listener for scroll
        window.addEventListener('scroll', handleScroll);

        // Trigger the check on page load
        handleScroll();
    });

</script>

<script>
   document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.animate-up');
    let delay = 0;

    function animateCardsSequentially() {
        cards.forEach((card, index) => {
            // Add visible class with a delay for each card
            setTimeout(() => {
                card.classList.add('visible');
            }, delay);
            delay += 500; // Increase delay by 4 seconds for the next card
        });
    }

    // Trigger animation once the section is visible
    function handleScroll() {
        const section = document.querySelector('.property-section');
        const rect = section.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        if (rect.top <= windowHeight && rect.bottom >= 0) {
            animateCardsSequentially();
            window.removeEventListener('scroll', handleScroll); // Remove listener after triggering
        }
    }

    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);
});


</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Select the elements to animate
        const featuredProject = document.querySelector(".featured-project");
        const projectDetails = document.querySelector(".project-details");
        const mainContent = document.querySelector(".main-content");
        const mainContentH1 = document.querySelector(".main-content h1");
        const mainContentP = document.querySelector(".main-content p");
        const mainContentBtn = document.querySelector(".view-projects-btn");

        // Function to add animation classes
        function addAnimation(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (entry.target === featuredProject) {
                        featuredProject.classList.add("fade-in-left");
                    }
                    if (entry.target === projectDetails) {
                        projectDetails.classList.add("fade-in-left");
                    }
                    if (entry.target === mainContent) {
                        mainContentH1.classList.add("fade-in-right");
                        setTimeout(() => {
                            mainContentP.classList.add("fade-in-right");
                        }, 300); // Adjust delay
                        setTimeout(() => {
                            mainContentBtn.classList.add("fade-in-right");
                        }, 600); // Adjust delay
                    }
                    observer.unobserve(entry.target); // Stop observing once animated
                }
            });
        }

        // Create Intersection Observer
        const observer = new IntersectionObserver(addAnimation, {
            threshold: 0.1 // Adjust visibility threshold
        });

        // Observe the elements
        observer.observe(featuredProject);
        observer.observe(projectDetails);
        observer.observe(mainContent);
    });
</script>

<script>
// Update Swiper settings for mobile
function initSwiper() {
    const isMobile = window.innerWidth <= 768;
    
    return new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        slidesPerView: isMobile ? 1 : 3,
        spaceBetween: isMobile ? 10 : 20,
        centeredSlides: !isMobile,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
}

// Initialize Swiper
let swiper = initSwiper();

// Update on resize
window.addEventListener('resize', function() {
    swiper.destroy();
    swiper = initSwiper();
});

// Mobile menu toggle (if not already implemented)
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });
    }
});
</script>

<script>
  const projectCards = document.querySelectorAll('.scroll-fade-up');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const card = entry.target;
        const delay = Array.from(projectCards).indexOf(card) * 150;
        setTimeout(() => {
          card.classList.add('in-view');
        }, delay);
        observer.unobserve(card); // Only once
      }
    });
  }, { threshold: 0.1 });

  projectCards.forEach(card => observer.observe(card));
</script>



 <!--	Footer   start-->
 <?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>
