<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
								
?>
<!DOCTYPE html>

<html lang="en">

<!-- Mirrored from gtftechnologies.com/real-estate-landing-page-pune/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2024 07:30:01 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Knowhere Real Estate </title>
    <meta name="description" content="With over 13 years of expertise and more than 500 satisfied clients, we are experts in digital media planning, shaping people business requirements into profitable venture." />
    <meta name="keywords" content="Research, Website Design and Development, Search Engine Optimization, Annual Maintenance of website, Social Media Optimization, Google Search, Facebook and Instagram, Yahoo Ads " />
    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/plugin.css">
    <!-- <link rel="stylesheet" href="css/jQuery-plugin-progressbar.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>

    <style>
    .carousel-item {
        min-height: 300px;
    }

    .hover-zoomer {
        transition: transform 0.3s ease-in-out;
    }

    .hover-zoomer:hover {
        transform: scale(1.05);
    }


  /* General styling for the property type section */
.property_type {
    padding: 50px 0;
    background-color: #f6f6f6; /* Light background for contrast */
    text-align: center; /* Centers the title text */
}

/* Styling for the section title */
.property_type .section_title {
    /* font-family: sans-serif; */
    font-size: 36px;
    color: #333;
    margin-bottom: 40px; /* Adds spacing between title and cards */
}

/* Container for the property cards */
.property_div {
    display: flex;
    justify-content: center; /* Centers the cards */
    gap: 30px; /* Space between each card */
    flex-wrap: wrap; /* Wraps cards for responsive layout */
}

/* Styling for each property card */
.property_div figure {
    position: relative;
    text-align: center; /* Center-aligns the content */
    width: 250px; /* Fixed width for each card */
    transition: transform 0.3s ease-in-out; /* Smooth hover effect */
    border-radius: 10px;
    background-color: #fff; /* White background for cards */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    overflow: hidden; /* Ensures content doesn't overflow */
}

/* Image styling */
.property_div img {
    max-width: 100%; /* Ensures image fills the figure */
    border-radius: 10px; /* Round corners */
    height: 350px;
    object-fit: cover; /* Makes sure images fit well */
    transition: transform 0.3s ease-in-out; /* Adds smooth hover zoom effect */
}

/* Caption styling (hidden by default) */
.property_div figcaption {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7); /* Semi-transparent black background */
    color: #fff;
    text-transform: uppercase;
    font-size: 18px;
    font-weight: bold;
    padding: 10px;
    text-align: center;
    opacity: 0; /* Hidden initially */
    transform: translateY(100%); /* Moves caption below the image */
    transition: all 0.3s ease-in-out; /* Smooth transition for hover effect */
}

/* Hover effect: Show caption and zoom image */
.property_div figure:hover figcaption {
    opacity: 1; /* Makes caption visible */
    transform: translateY(0); /* Moves caption up into view */
}

/* Hover effect for images */
.property_div figure:hover img {
    transform: scale(1.1); /* Zooms in the image on hover */
}

/* Responsive Design */
@media (max-width: 768px) {
    .property_div {
        flex-direction: column; /* Stacks cards vertically on smaller screens */
        align-items: center; /* Centers them */
    }

    .property_div figure {
        width: 100%; /* Makes each card full width */
        max-width: 300px; /* Limits maximum width on smaller screens */
    }
}

    /* Black Arrows */
    .black-arrow {
        background-color: black;
        border-radius: 50%;
    }

    /* Custom Arrow Positioning */
    .custom-carousel-control {
        width: 50px; /* Smaller width for tight positioning */
        height: 50px;
        top: 50%; /* Vertically center */
        transform: translateY(-50%);
        z-index: 5; /* Ensure arrows are above content */
    }

    /* Left Arrow near card */
    .carousel-control-prev {
        left: 10px; /* Adjust to position it close to the leftmost card */
    }

    /* Right Arrow near card */
    .carousel-control-next {
        right: 10px; /* Adjust to position it close to the rightmost card */
    }

    /* Ensure the arrow icons are black */
    .carousel-control-prev-icon, .carousel-control-next-icon {
        background-color: black;
        border-radius: 50%;
    }



</style>
</head>
<body>
    
    <!-- header -->

    <div class="enquire_cover"></div>

    <header class="navbar">
        <div class="container">
          <!-- <a class="navbar_logo" href="index.html">
            <img src="images/favicon.png" alt="Knowhere Real Estate logo" class="img-fluid logo d-none d_md_block">
          </a> -->

        <div class="hamburger" id="hamburger-1">
          <div class="icon">
            <span class="line"></span>
            <span class="line"></span>
          </div>
        </div>

        
        <div class="navbar-collapse enquire_sidemenu">
          <a class="navbar_logo" href="#">
            <img src="images/logo/realestate.png" alt="Knowhere Real Estate logo" class="img-fluid logo d_md_none">
          </a>
          <ul class="navbar-nav">
            <li class="nav-item ">
              <a class="nav-link target_scroll_btn" href="#home">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link target_scroll_btn" href="about.php">About US</a>
            </li>
            <li class="nav-item ">
              
              <a class="nav-link target_scroll_btn" href="properties.php">Properties</a> 
            </li>
            <li class="nav-item ">
              <a class="nav-link target_scroll_btn" href="#services">Our Services</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link target_scroll_btn" href="#why-gtf">Why GTF?</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link target_scroll_btn" href="#awards">Awards</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link target_scroll_btn" href="#connect_with_us">Contact Us</a>
              
            </li>
            
          </ul>

          <div class="contact_details bottom">
            <div class="tab-content">
              <h5 class="state">Delhi NCR</h5>
              <a href="tel:+91-9953917978">+91-9953-91-7978</a>
            </div>

            <div class="tab-content">
                <h5 class="state">Mumbai</h5>
                <a href="tel:+91-9873088089">+91-9873-08-8089</a>
            </div>

            <div class="tab-content">
                <h5 class="state">Pune</h5>
                <a href="tel:+91-9953605303">+91-9953-60-5303</a>
            </div>

            <div class="tab-content">
                <h5 class="state">Bangalore</h5>
                <a href="tel:+91-9650337799">+91-9650-33-7799</a>
            </div>

            <div class="tab-content" id="myTabContent">
                <h5 class="state">Email</h5>
                <a href="mailto:hello@gtftechnologies.com">hello@gtftechnologies.com</a>
            </div>
        
            <hr class="d-block w-100" />

            <div class="tab-content mt-0" id="myTabContent">
              <h5 class="state">Contact @ HR</h5>
              <a href="tel:+91-9810577538">+91-9810-57-7538</a>
            </div>

            <ul class="social_icons inline">
              <li>
                <a href="https://in.linkedin.com/company/gtftechnologies" class="linkedin-color" target="_blank">in</a>
              </li>
              <li>
                <a href="https://twitter.com/gtfTechnologies" class="twitter-color" target="_blank">tw</a>
              </li>
              <li>
                <a href="https://www.facebook.com/Gtftechnologiesindia/" class="facebook-color" target="_blank">fb</a>
              </li>
              <li>
                <a href="https://www.instagram.com/gtf_technologies/" class="instagram-color" target="_blank">insta</a>
              </li>
              <li>
                <a href="https://in.pinterest.com/GTFTechnologies/" class="pinterest-color" target="_blank">pi</a>
              </li>
            </ul>

            <ul class="other_links">
                <li>
                    <a href="privacy-policy.html">Privacy Policy</a>
                </li>
                <li>
                    <a href="sitemap.xml">Sitemap</a>
                </li>
            </ul>
          </div>
        </div>
  
        <div class="mini_sidebar">
          
            
          <button class="btn enquire_btn">
            <span>Make An Enquiry</span>
          </button>
        </div>

      </div>
    </header>

    <div class="main_page_contents">

      <section class="hero_section banner_new" id="home">
        <div class="container">
          <div class="m-banner__content">

            <div class="content">
              <p class="hero_sub_title d-none d-md-block">Knowhere Real Estate</p>
              <p class="d-md-none sub_txt">Specialising in <strong>Real estate</strong> clients - industry giants to boutique concepts.</p>
              <h1 class="title">We help bridge the gap in <span class="fill color1">branding</span>, <span class="fill color2">digital marketing</span> and double-digit <span class="fill color3">growth.</span></h1>
              <p class="d-none d-md-block">Specialising in Real estate clients - industry giants to boutique concepts.</p>

              <button class="btn btn_outline an_icon_btn btn_mobile target_scroll_btn"  data-toggle="modal" data-target="#enquireModal">
                <div class="icon">
                  <img src="images/icons/info.png" alt="Knowhere Real Estate icon" class="img-fluid">
                </div>
                Enquire Now
              </button>
            </div>

            <div class="hero-bg_wrap d-md-none">
              <video autoplay loop muted playsinline>
                <source src="video/gtf.mp4" type="video/mp4">
              </video>
            </div>
  
            <div class="hero-bg_wrap d-none d-md-block">
              <div class="hero-bg_wrap-cols">
                <div class="hero-bg_wrap-col">
                  <div class="hero-bg_wrap-slides v-scroll">
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col1/img1.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col1/img2.webp"
                            alt="1"  data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col1/img3.webp"
                            alt="1"  data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col1/img4.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col1/img5.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col1/img6.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col1/img7.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
                    
                  </div>
  
                  <div class="hero-bg_wrap-slides v-scroll">
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col1/img1.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col1/img2.webp"
                            alt="1"  data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col1/img3.webp"
                            alt="1"  data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col1/img4.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col1/img5.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col1/img6.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col1/img7.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
                    
                  </div>
                  
                </div>
  
                <div class="hero-bg_wrap-col">
                 
                  <div class="hero-bg_wrap-slides scroll2">
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col2/img10.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col2/img9.webp"
                            alt="1"  data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col2/img8.webp"
                            alt="1"  data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col2/img7.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col2/img6.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col2/img5.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col2/img4.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col2/img3.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col2/img2.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col2/img1.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
                    
                  </div>
  
                  <div class="hero-bg_wrap-slides scroll2">
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col2/img10.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col2/img9.webp"
                            alt="1"  data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col2/img8.webp"
                            alt="1"  data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col2/img7.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col2/img6.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col2/img5.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col2/img4.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col2/img3.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col2/img2.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col2/img1.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
                    
                  </div>
  
                </div>
  
                <div class="hero-bg_wrap-col">
                  
                  <div class="hero-bg_wrap-slides scroll3">
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col3/img1.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col3/img2.webp"
                            alt="1"  data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col3/img3.webp"
                            alt="1"  data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col3/img4.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col3/img5.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col3/img6.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col3/img7.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col3/img8.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                  </div>
  
                  <div class="hero-bg_wrap-slides scroll3">
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col3/img1.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col3/img2.webp"
                            alt="1"  data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col3/img3.webp"
                            alt="1"  data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col3/img4.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col3/img5.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col3/img6.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col3/img7.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
  
                    <div class="hero-bg_wrap_slide">
                      <picture>
                        <source
                          type="image/webp">
                          <img fetchpriority="high" decoding="async"
                            class="img-cover"
                            src="images/test/col3/img8.webp"
                            alt="1" data-eio="p" />
                      </picture>
                    </div>
                  </div>
                </div>
              </div>

              <div class="hero-bg-gradient_overlay"></div>

            </div>
          </div>
        </div>
        
      </section>

      <div class="page_container">

       
        <!-- overview section -->

        <section class="overview_section animated_text_section py_80 py_sm_40 custom_section work_culture_section" id="about-us" style="">

          <div class="container">
            <div class="row mx_-30 mx_xl_-15">
              <div class="col-md-6 px_30 px_xl_15 image_col fadeRight d-none d-md-block">
                <div class="image">

                  <img src="images/website/overview_image.jpg" alt="Knowhere Real Estate overview image" class="img-fluid d-none d-md-block" />
                  <!-- <img src="images/overview_image_sm.jpg" alt="Knowhere Real Estate overview image" class="img-fluid d-md-none" /> -->

                 
                </div>
              </div>

              <div class="col-md-6 px_30 px_xl_15 content_col fadeUp delay_03">
                <div class="content">
                  <h2 class="section_title line_title" style="color: #333333;">About <span>Knowhere Real Estate</span></h2>

                  <div class="image d-md-none">
                    <img src="images/overview_image.jpg" alt="Knowhere Real Estate overview image" class="img-fluid d-none d-md-block" />
                    <img src="images/overview_image_sm.jpg" alt="Knowhere Real Estate overview image" class="img-fluid d-md-none" />
                  </div>

                  <p >At Knowhere Real Estate, we are dedicated to connecting people with their dream properties. Established to revolutionize the real estate industry, we offer a comprehensive platform that provides buyers, sellers, and renters with seamless experiences. Our team works tirelessly to simplify the real estate process, whether you're looking for your next home, office space, or investment property.

                    With a deep understanding of the market and a customer-centric approach, Knowhere Real Estate has quickly become a trusted name in the industry. We combine cutting-edge technology with local expertise to offer personalized services tailored to your unique needs.</p>

                  <button class="btn btn_outline an_icon_btn target_scroll_btn" data-toggle="modal" data-target="#enquireModal">
                    
                    Know More
                  </button>

                  <div class="counter">
                    <ul>
                      <li>
                        <h3 class="title count"><span data-count="16">0</span>+</h3>
                        <p>Years of Expertise</p>
                      </li>

                      <li>
                        <h3 class="title count"><span data-count="1500">0</span>+</h3>
                        <p>Projects Done</p>
                      </li>

                      <li>
                        <h3 class="title count"><span data-count="50">0</span>k+</h3>
                        <p>Queries generated from Google per month</p>
                      </li>

                      <li>
                        <h3 class="title count"><span data-count="1000">0</span>k+</h3>
                        <p>Queries generated from Facebook & Instagram per month</p>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

       


        <section class="services_section pb_80 pt_30 py_sm_40 custom_section" id="services" style=" background-color: #000000; /* Black background */
            color: #FFFFFF; /* White text */
            padding: 40px;
            display: flex;">
          <div class="container">
            <div class="row mx_-60 mx_lg_-15">
              <div class="col-md-6 px_60 px_lg_15 left_col fadeRight d-none d-md-block">
                <div class="image">
                  <div class="owl-carousel owl-theme services_carousel">

                    <div class="item">
                      <img src="images/service/homeloan.png" alt="Knowhere Real Estate service image" class="img-fluid" />
                    </div>

                    <div class="item">
                      <img src="images/service/interior.png" alt="Knowhere Real Estate overview image" class="img-fluid" />
                    </div>

                    <div class="item">
                      <img src="images/service/legalassitance.png" alt="Knowhere Real Estate overview image" class="img-fluid" />
                    </div>

                    <div class="item">
                      <img src="images/service/rentagreement.png" alt="Knowhere Real Estate service image" class="img-fluid" />
                    </div>

                    <div class="item">
                      <img src="images/service/sellorrent.png" alt="Knowhere Real Estate overview image" class="img-fluid" />
                    </div>

                    <div class="item">
                      <img src="images/service/construction.png" alt="Knowhere Real Estate overview image" class="img-fluid" />
                    </div>

                  </div>

                </div>
              </div>

              <div class="col-md-6 px_60 px_lg_15 right_col fadeUp delay_03" style="   flex: 1;
            padding-left: 40px;">
                <h2 class="section_title line_title" style=" font-size: 24px;
            color: #FFFFFF;
            font-weight: bold;
            margin-bottom: 20px;">What We Do</h2>
                <p style="color: #D3D3D3; /* Light gray paragraph text */
            margin-bottom: 30px;
">We are a versatile full-service branding and marketing agency, dedicated to helping businesses express their unique narratives.  We don't simply work for you; we work with you.</p>
                
                <ul class="points">
                  <li>
                    <ul class="default_list" id="services_list">
                      <li>

                        <h4 class="title color1 service-name" >Home Loan</h4>
                        <!-- <img src="images/service/homeloan.png" alt="Knowhere Real Estate brand strip" class="img-fluid strip_img d-md-none" /> -->
                        <ul>
                          <li  class="service-points">Easy Loan Approval</li>
                          <li class="service-points">Competitive Interest Rates</li>
                          <li class="service-points">Personalized Loan Plans</li>
                          <li class="service-points">Quick Processing Time</li>
                          <li class="service-points">Expert Financial Advice</li>
                        </ul>
                      </li>
    
                      <li>
                        <h4 class="title color1 service-name">Interior</h4>
                        <img src="images/services/interior.png" alt="Knowhere Real Estate creative strip" class="img-fluid strip_img d-md-none" />
                        <ul>
                          <li class="service-points">Stylish Design Solutions</li>
                          <li class="service-points">Custom Furniture Options</li>
                          <li class="service-points">High-Quality Materials</li>
                          <li class="service-points">Professional Installation</li>
                          <li class="service-points">Space Optimization</li>
                        </ul>
                      </li>
    
                      <li>
                        <h4 class="title color1 service-name">Legal Assistance</h4>
                        <img src="images/services/legalassitance.png" alt="Knowhere Real Estate communication strip" class="img-fluid strip_img d-md-none" />
                        <ul>
                          <li class="service-points">Expert Legal Advice</li>
                          <li class="service-points">Document Preparation</li>
                          <li class="service-points">Compliance Support</li>
                          <li class="service-points">Contract Review</li>
                          <li class="service-points">Dispute Resolution</li>
                        </ul>
                      </li>

                      <li>
                      <h4 class="title color1 service-name">Rent Agreement</h4>
                    <div class="img_col d-md-none" >
                      <img src="images/services/rentagreement.png" alt="Knowhere Real Estate brand strip" class="img-fluid strip_img d-md-none" />
                    </div>
                    <ul>
                      <li class="service-points">Clear Terms & Conditions</li>
                      <li class="service-points">Customizable Agreements</li>
                      <li class="service-points">Legal Compliance Ensured</li>
                      <li class="service-points">Quick Drafting Process</li>
                      <li class="service-points">Easy Renewal Options</li>
                    </ul>

                      <li>
                      <h4 class="title color1 service-name">Sell OR Rent</h4>
                      <img src="images/services/sellorrent.png" alt="Knowhere Real Estate organic-marketing strip" class="img-fluid strip_img d-md-none" />
                      <ul>
                        <li class="service-points">Market Analysis</li>
                        <li class="service-points">Property Valuation</li>
                        <li class="service-points">Targeted Marketing</li>
                        <li class="service-points">Negotiation Support</li>
                        <li class="service-points">Transaction Management</li>
                      </ul>
                    </li>

                      <li>
                      <h4 class="title color1 service-name">Construction</h4>
                      <img src="images/services/construction.png" alt="Knowhere Real Estate paid-marketing strip" class="img-fluid strip_img d-md-none" />
                      <ul>
                        <li class="service-points">Quality Craftsmanship</li>
                        <li class="service-points">Project Management</li>
                        <li class="service-points">Timely Completion</li>
                        <li class="service-points">Cost Estimation</li>
                        <li class="service-points">Safety Standards</li>
                      </ul>
                    </li>
                    </ul>
                  </li>

                 
                   

                </ul>
              </div>

            </div>
          </div>

        </section>

        <section class="property_type">
       <h2 class="section_title line_title center sm_left fadeUp" style="color: #333333;"> <span>Property Type</span></h2>
          <div class="property_div">
              <figure>
                  <img src="./images/residential_property.png" alt="RESIDENTIAL PROPERTY">
                  <figcaption>RESIDENTIAL PROPERTY</figcaption>
              </figure>
              <figure>
                  <img src="./images/commercial_property.png" alt="COMMERCIAL PROPERTY">
                  <figcaption>COMMERCIAL PROPERTY</figcaption>
              </figure>
              <figure>
                  <img src="./images/plotting_property.png" alt="PLOTTING PROPERTY">
                  <figcaption>PLOTTING PROPERTY</figcaption>
              </figure>
          </div>
      </section>


        


 
    

         
        <!-- Recenet Property -->
        
        <section class="why_gtf py_80 py_sm_40 custom_section">
            <div class="container">
                <h2 class="section_title line_title center sm_left fadeUp"><span>Recent Properties</span></h2>

                <div class="col-md-12 position-relative d-flex justify-content-center">
                    <div id="propertyCarousel" class="carousel slide" data-ride="carousel" data-interval="5000" style="width: 90%;">
                        <div class="carousel-inner">
                            <?php
                            $query = mysqli_query($con, "SELECT property.*, user.uname, user.utype, user.uimage FROM `property`,`user` WHERE property.uid=user.uid ORDER BY date DESC LIMIT 9");
                            $property_counter = 0;
                            while ($row = mysqli_fetch_array($query)) {
                                if ($property_counter % 3 == 0) {
                                    if ($property_counter   == 0) {
                                        echo '<div class="carousel-item active">';
                                    } else {
                                        echo '<div class="carousel-item">';
                                    }
                                    echo '<div class="row justify-content-center">';
                                }
                                ?>
                                
                                <!-- Property Card -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="featured-thumb hover-zoomer carousel-hover-stop" style="border: 1px solid #ddd; border-radius: 8px;">
                                        <div class="overlay-black overflow-hidden position-relative" style="border-radius: 8px 8px 0 0;">
                                            <!-- Property Image -->
                                            <img src="admin/property/<?php echo $row['18']; ?>" alt="pimage" height="200" width="100%" style="object-fit: cover; border-radius: 8px 8px 0 0;">

                                            <!-- Share Button (Right Top) -->
                                            <div class="position-absolute" style="top: 10px; right: 10px;">
                                                <!-- WhatsApp Share -->
                                                <a href="https://wa.me/?text=Check%20out%20this%20property%3A%20<?php echo urlencode('Property Name: ' . $row['1'] . ' | Location: ' . $row['3'] . ' | Price: ₹' . $row['13']); ?>" target="_blank" class="text-white" style="font-size: 24px;">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                            </div>

                                            <!-- Category Label (For Sale, For Rent, etc.) -->
                                            <div class="position-absolute" style="top: 10px; left: 10px; background-color: #28a745; padding: 5px 10px; color: white; border-radius: 4px;">
                                                <?php echo $row['5']; ?> <!-- For Sale/For Rent -->
                                            </div>

                                            <!-- Price -->
                                            <div class="position-absolute" style="bottom: 10px; left: 10px;">
                                                <div class="price text-primary"><b>₹<?php echo $row['13']; ?></b></div>
                                            </div>
                                        </div>

                                        <div class="featured-thumb-data shadow-one">
                                            <!-- Property Details -->
                                            <div class="p-3">
                                                <h5 class="text-secondary hover-text-success mb-2 text-capitalize">
                                                    <a href="propertydetail.php?pid=<?php echo $row['0']; ?>"><?php echo $row['1']; ?></a>
                                                </h5>
                                            </div>
                                            <div class="table-striped font-14 pb-2">
                                                <table class="w-100">
                                                    <tbody style="line-height: 5px;">
                                                        <tr>
                                                            <td>Property Type:</td>
                                                            <td class="text-capitalize"><?php echo $row['3']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>BHK:</td>
                                                            <td class="text-capitalize"><?php echo $row['4']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Carpet Area:</td>
                                                            <td class="text-capitalize"><?php echo $row['12']; ?> Sqft</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <!-- Buttons: Know More (Big), WhatsApp (Small), Call (Small) - All in Single Row -->
                                            <div class="p-4 d-inline-block w-100">
                                              <div class="row text-center" style="margin-right: 0; margin-left: 0;">
                                                  <!-- Know More Button (Larger) -->
                                                  <div class="col-8" style="padding-right: 0; padding-left: 0;">
                                                      <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="btn btn-dark w-100 btn-lg" style="height: 35px; border-radius:5px; line-height: 33px !important;">
                                                          Know More
                                                      </a>
                                                  </div>
                                                  <!-- WhatsApp Button -->
                                                  <div class="col-2" style="padding-right: 0; padding-left: 5px;">
                                                      <a href="https://wa.me/?text=I'm interested in this property" target="_blank" class="btn btn-success w-100 btn-sm" style="height: 35px; border-radius:5px; background-color:#6cc96c;line-height: 33px !important;">
                                                          <i class="fab fa-whatsapp"></i>
                                                      </a>
                                                  </div>
                                                  <!-- Call Button -->
                                                  <div class="col-2" style="padding-right: 0; padding-left: 5px;">
                                                      <a href="tel:+919136211332" class="btn btn-primary w-100 btn-sm" style="height: 35px; border-radius:5px; background-color:#0ea4eb; line-height: 33px !important;">
                                                          <i class="fas fa-phone"></i>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>


                                        </div>
                                    </div>
                                </div>




                                <!-- End of Property Card -->

                                <?php
                                $property_counter++;
                                if ($property_counter % 3 == 0) {
                                    echo '</div></div>'; // End of row and carousel-item
                                }
                            }
                            if ($property_counter % 3 != 0) {
                                echo '</div></div>'; // Close the row and carousel-item if the last group isn't complete
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <script>
                    $(document).ready(function() {
                        // Pause the carousel when hovering on a card
                        $('.carousel-hover-stop').hover(
                            function () {
                                $('#propertyCarousel').carousel('pause'); // Pause carousel
                            },
                            function () {
                                $('#propertyCarousel').carousel('cycle'); // Resume carousel
                            }
                        );

                        // Initialize the carousel
                        $('#propertyCarousel').carousel({
                            interval: 5000, // 5 seconds interval
                            ride: 'carousel',
                            wrap: true // Ensure it loops infinitely
                        });

                        // Custom function to slide one card at a time
                        $('#propertyCarousel').on('slid.bs.carousel', function () {
                            var $carousel = $(this);
                            var $activeItem = $carousel.find('.carousel-item.active');
                            var $nextItems = $activeItem.next('.carousel-item').find('.col-md-4');
                            var $items = $carousel.find('.carousel-item .col-md-4');
                            if ($nextItems.length > 0) {
                                $items.filter(':lt(3)').addClass('d-none'); // Hide the first three cards
                                $nextItems.filter(':lt(3)').removeClass('d-none'); // Show next cards
                            }
                        });
                    });
                </script>
            </div>
        </section>







        <!-- Recent Property End -->



        <section class="connect_with_us py_80 py_sm_40" id="connect_with_us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form fadeUp">
                            <h2 class="section_title form_heading line_title">Are you satisfied with your brand's identity?</h2>
                            <p class="sub_heading">Knowhere Real Estate helps create/recreate, market, and transform brands. It all begins with a conversation; let's start.</p>
                            
                            <form action="send_email.php" method="POST">
                                <!-- Full Name -->
                                <div class="form-group">
                                    <label for="qSenderName" class="visually-hidden d-none"></label>
                                    <input type="text" class="form-control" name="qSenderName" placeholder="Full Name" required>
                                </div>
                                
                                <!-- Email and Mobile Number -->
                                <div class="form-inline">
                                    <div class="form-group">
                                        <label for="qEmailID" class="visually-hidden d-none"></label>
                                        <input type="email" class="form-control" name="qEmailID" placeholder="Email Id" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="qMobileNo" class="visually-hidden d-none"></label>
                                        <input type="number" class="form-control" name="qMobileNo" placeholder="Mobile No." required>
                                    </div>
                                </div>
                                
                                <!-- Looking For (Dropdown) -->
                                <div class="form-group">
                                    <label for="sources" class="visually-hidden d-none"></label>
                                    <select class="form-control" name="sources" required>
                                        <option value="select" selected>Looking For</option>
                                        <option value="Home Loan">Home Loan</option>
                                        <option value="Interior">Interior</option>
                                        <option value="Legal Assistance">Legal Assistance</option>
                                        <option value="Rent Agreement">Rent Agreement</option>
                                        <option value="Property Sell Or Rent">Property Sell Or Rent</option>
                                        <option value="Construction">Construction</option>
                                    </select>
                                </div>
                                
                                <!-- Message -->
                                <div class="form-group">
                                    <label for="qMessage" class="visually-hidden d-none"></label>
                                    <textarea name="qMessage" rows="3" class="form-control" placeholder="Message" required></textarea>
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-dark w-100 btn-lg">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Image Section -->
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="image fadeUp delay_03">
                            <img src="./images/banner/contact.png" alt="Knowhere Real Estate overview image" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- <section class="satisfied_section py_80 animated_text_section custom_section">

          <div class="container">
            <div class="row mx_-30">

              <div class="col-md-6 px_30 content_col fadeUp">
                <div class="content">
                  <h2 class="section_title line_title">Are you satisfied with your visual identity?</h2>
                  <p>Our core focus is to identify how you could virtually portray yourself. We will help you in finding out the things which you are missing to reach your target audience. We will also solve the issue and will bring the customers to you. We have done it for our clients and we will do it again for you. just Give us a chance!</p>
                  <a class="btn btn_outline an_icon_btn target_scroll_btn" href="#connect_with_us">
                    <div class="icon">
                      <img src="images/icons/info.png" alt="Knowhere Real Estate icon" class="img-fluid">
                    </div>
                    Know More
                  </a>
                </div>
              </div>

              <div class="col-md-6 px_30 image_col fadeLeft delay_03">
                <div class="image">
                  <img src="images/visual_identity.png" alt="Knowhere Real Estate overview image" class="img-fluid">
                </div>
              </div>

            </div>
          </div>
        </section> -->

        <!-- footer section -->

        
      </div>
      
      <div class="fixed_footer" style="display:none;">
        <footer class="footer pt_80 pt_sm_40 custom_section">
          <div class="container"> 
            <h2 class="footer_title">Let's Have a <span>Conversation!</span></h2>

            <div class="row mx_-60 mx_sm_-15 an_row ">

              <div class="col-md-8 px_60 px_sm_15 left_col order-md-1 fadeUp">
                
                <ul class="contact_addresses">
                  <li>
                    <div class="single">
                        <h3 class="title blue_area">Noida</h3>
                        <p>A-62, 2nd Floor, Sector 2 Noida - 201301 , Uttar Pradesh, India</p>
                        <a href="tel:+919953917978">
                          <span class="icon">
                            <img src="images/icons/mobile.svg" alt="call-icon" />
                          </span>
                          (+91) 9953 91 7978
                        </a>
                    </div>
                  </li>

                  <li>
                      <div class="single">
                          <h3 class="title yellow_area">Gurgaon</h3>
                          <p>715-713 DLF Galleria Towers, DLF Phase- IV, Gurugram, Haryana, India- 122001</p>
                          <a href="tel:+919953917978">
                            <span class="icon">
                              <img src="images/icons/mobile.svg" alt="call-icon" />
                            </span>
                            (+91) 9953 91 7978
                          </a>
                      </div>
                  </li>

                  <li>
                      <div class="single">
                          <h3 class="title pink_area">Mumbai</h3>
                          <p>1606,16th floor,A wing,Dev corpora, Cadbury junction,Eastern Express Highway,Thane-400601</p>
                          <a href="tel:+919873088089">
                            <span class="icon">
                              <img src="images/icons/mobile.svg" alt="call-icon" />
                            </span>
                            (+91) 9873 08 8089
                          </a>
                      </div>
                  </li>

                  <li>
                      <div class="single">
                          <h3 class="title black_area">Pune</h3>
                          <p>11th floor office no. 11.16 Sadanand Business centre (SBC), Pashan Hwy Side Rd, Baner, Pune, Maharashtra 411045</p>
                          <a href="tel:+919953605303">
                            <span class="icon">
                              <img src="images/icons/mobile.svg" alt="call-icon" />
                            </span>
                            (+91) 9953 60 5303
                          </a>
                      </div>
                  </li>

                  <li>
                    <div class="single">
                        <h3 class="title green_area">Bangalore</h3>
                        <a href="tel:+919650337799">
                          <span class="icon">
                            <img src="images/icons/mobile.svg" alt="call-icon" />
                          </span>
                          (+91) 9650 33 7799
                        </a>
                    </div>
                  </li>

                  <li>
                      <div class="single">
                          <h3 class="title gray_area">Other Cities</h3>
                          <a href="tel:+919953917978">
                            <span class="icon">
                              <img src="images/icons/mobile.svg" alt="call-icon" />
                            </span>
                            (+91) 9953 91 7978
                          </a>
                      </div>
                  </li>

                </ul>
              </div>

              <div class="col-md-4 px_60 px_sm_15 right_col fadeUp">
                <div class="map">
                  <img src="images/map.svg" alt="gtf-technologies map image" class="img-fluid" />
                </div>

                
              </div>

            </div>

            <div class="footer_bottom fadeUp delay_03">
              <div class="logo">
                <span><img src="images/logo.png" alt="Knowhere Real Estate logo" class="img-fluid" /></span>
                <span><img src="images/google-partner.png" alt="Knowhere Real Estate logo" class="img-fluid" /></span>
                <span><img src="images/global-partner.png" alt="Knowhere Real Estate logo" class="img-fluid" /></span>
              </div>
  
              <div class="right_content">
                  <ul>
                      <li>
                          <a href="tel:+91-9953917978">
                              <img src="images/icons/smartphone.png" alt="Knowhere Real Estate icon" class="img-fluid">
                              +91-9953-91-7978
                          </a>
                      </li>
  
                      <!-- <li>
                          <a href="tel:+91-9650337799">
                              <img src="images/icons/smartphone.png" alt="Knowhere Real Estate icon" class="img-fluid">
                              +91-9650-33-7799
                          </a>
                      </li> -->
  
                      <li>
                          <a href="mailto:hello@gtftechnologies.com">
                              <img src="images/icons/envelope-dark.png" alt="Knowhere Real Estate icon" class="img-fluid">
                              hello@gtftechnologies.com
                          </a>
                      </li>
  
                      <li>
                          <a href="https://www.gtftechnologies.com/" target="_blank">
                              © <span class="currentYr"></span> Knowhere Real Estate
                          </a>
                      </li>
                  </ul>
                  <!-- <hr />
                  <p class="contact_hr">Contact @ HR - <a href="#">+91-9898989898</a></p> -->
              </div>
            </div>  

          </div>
        </footer>

      </div>
      <!-- <div class='sk-ww-linkedin-profile-post' data-embed-id='124897'></div> -->
      

    <div id="instafeed"></div>
      

    <!-- <div class="pt_data">
      <a data-pin-do="embedUser" data-pin-board-width="150" data-pin-scale-height="800" data-pin-scale-width="60" href="https://in.pinterest.com/GTFTechnologies/"></a>
    </div> -->

    </div>


    <!-- right sidearea -->

    

    <!-- enquire menus -->

    <section class="enquire_menu enquire_sidemenu">
      <a class="close_btn" href="javascript:void(0)">
        <span class="lines">
          <span class="single_line line-1"></span>
          <span class="single_line line-2"></span>
        </span>
      </a>

      <h4 class="title line_title">Make A Enquiry</h4>
      <p>Have a question? Feel free to reach out to us anytime. We're here to help!</p>

      <div class="bordered_form form">
        <div class="form-group">
          <label for="sources2" class="visually-hidden d-none"></label>
          <select class="form-control" name="sources" id="sources2">
            <option value="select" selected >Looking For</option>
              <option value="Branding GTF Real Estate Pune:4587">Rent</option>
              <option value="Creative Development GTF Real Estate Pune:4587">Sale</option>
              <option value="Website Development GTF Real Estate Pune:4587">Buy</option>
              <option value="Performance Marketing GTF Real Estate Pune:4587">Investment</option>
              
          </select>
        </div>
        <div class="form-group">
          <label for="qSenderName2" class="visually-hidden d-none"></label>
            <input type="text" class="form-control" id="qSenderName2" placeholder="Name*" required>
        </div>
        <div class="form-group">
          <label for="qEmailID2" class="visually-hidden d-none"></label>
            <input type="email" class="form-control" id="qEmailID2" placeholder="Email*" required>
        </div>
        <div class="form-group">
          <label for="qMobileNo2" class="visually-hidden d-none"></label>
            <input type="text" class="form-control" id="qMobileNo2" maxlength="10" pattern="[6789][0-9]{9}" placeholder="Mobile No." required>
        </div>
        <div class="form-group">
          <label for="qMessage2" class="visually-hidden d-none"></label>
            <input type="text" class="form-control" id="qMessage2" placeholder="Message*">
        </div>
        <button class="btn btn_outline an_icon_btn btnglobalsave" type="button" id="SubmitQuery2">
            
            Send Us A Message
        </button>
      </div>

      

        
        <hr class="d-block w-100" />

        <div class="tab-content mt-0" id="myTabContent">
          <h5 class="state">Contact @ HR</h5>
          <a href="tel:+91-9810577538">+91-9810-57-7538</a>
        </div>

        <ul class="social_icons inline">
            <li>
                <a href="https://in.linkedin.com/company/gtftechnologies" class="linkedin-color" target="_blank">in</a>
            </li>
            <li>
                <a href="https://twitter.com/gtfTechnologies" class="twitter-color" target="_blank">tw</a>
            </li>
            <li>
                <a href="https://www.facebook.com/Gtftechnologiesindia/" class="facebook-color" target="_blank">fb</a>
            </li>
            <li>
                <a href="https://www.instagram.com/gtf_technologies/" class="instagram-color" target="_blank">insta</a>
            </li>
            <li>
                <a href="https://in.pinterest.com/GTFTechnologies/" class="pinterest-color" target="_blank">pi</a>
            </li>
        </ul>

        <ul class="other_links">
            <li>
                <a href="privacy-policy.html">Privacy Policy</a>
            </li>
            <li>
                <a href="sitemap.xml">Sitemap</a>
            </li>
        </ul>

      </div>

    </section>


    <a id="back_to_top" href="#" class="on">
      <span class="text">
        Back to top
      </span>
    </a>

    <button class="btn d-md-none target_scroll_btn" id="enquire_btn" data-toggle="modal" data-target="#enquireModal">Enquire Now</button>

    <!--enquire Modal -->

    <div class="modal " id="enquireModal" aria-labelledby="enquireModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false" tabindex="-1" >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

            <h5 class="modal-title" id="enquireModalLabel">Are you satisfied with your brand's identity?</h5>

            <div class="form-group">
              <label for="qSenderName1" class="visually-hidden d-none"></label>
              <input type="text" class="form-control" id="qSenderName1" placeholder="Full Name">
            </div>

            <div class="form-inline">
              <div class="form-group">
                <label for="qEmailID1" class="visually-hidden d-none"></label>
                <input type="email" class="form-control" id="qEmailID1" placeholder="Email Id">
              </div>
              <div class="form-group">
                <label for="qMobileNo1" class="visually-hidden d-none"></label>
                <input type="number" class="form-control" id="qMobileNo1" placeholder="Mobile No.">
              </div>
            </div>
            

            <div class="form-group">
              <label for="sources1" class="visually-hidden d-none"></label>
              <select class="form-control" name="sources" id="sources1">
                <option value="select" selected >Looking For</option>
                <option value="Branding GTF Real Estate Pune:4587">Branding</option>
                <option value="Creative Development GTF Real Estate Pune:4587">Creative Development</option>
                <option value="Website Development GTF Real Estate Pune:4587">Website Development</option>
                <option value="Performance Marketing GTF Real Estate Pune:4587">Performance Marketing</option>
                <option value="Social Media Marketing GTF Real Estate Pune:4587">Social Media Marketing</option>
                <option value="Search Engine Optimisation GTF Real Estate Pune:4587">Search Engine Optimisation</option>
              </select>
            </div>

            <div class="form-group">
              <label for="qMessage1" class="visually-hidden d-none"></label>
              <textarea name="" id="qMessage1" rows="3" class="form-control" placeholder="Message"></textarea>  
            </div>

            <button class="btn btn_outline an_icon_btn" type="submit" id="SubmitQuery1">
              <div class="icon">
                <img src="images/icons/envelope.png" alt="Knowhere Real Estate icon" class="img-fluid">
              </div>
              Send Us A Message
            </button>
          </div>

        </div>
      </div>
    </div>

    <script>
      (function(){
        // let height = 890;
        let sideareaWidth = document.querySelector('.right_sidearea').offsetWidth;
        document.getElementById('fb_data').setAttribute('data-height',innerHeight);
        document.getElementById('fb_data').setAttribute('data-width',sideareaWidth - 30);
        document.getElementById('pt_data_a').setAttribute('data-pin-scale-height',innerHeight - 140);
      })()
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- <script src="js/script.js"></script> -->
    <!-- <script src="js/plugin.js"></script> -->
    <script src="js/circle-progress.min.js"></script>
    <script async defer src="../../assets.pinterest.com/js/pinit.js"></script>
    <script async defer crossorigin="anonymous" src="../../connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v16.0" nonce="o5ZYSHMo"></script>
    <script src='../../widgets.sociablekit.com/linkedin-profile-posts/widget.js' async defer></script>

    <script type="text/javascript" language="javascript">
      var versionUpdate = (new Date()).getTime();
      var script = document.createElement("script");
      script.type = "text/javascript";
      script.src = "../../api2.gtftech.com/scripts/queryform.min.sslec92.js?v=" + versionUpdate;
      document.body.appendChild(script);
    </script>

    <script>


      // Function to check if element is in viewport
      function isInViewport(element) {
        // var rect = element[0].getBoundingClientRect();
        // return (
        //     rect.top >= 0 &&
        //     rect.left >= 0 &&
        //     rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        //     rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        // );

        var rect = element[0].getBoundingClientRect();
        var elementHeight = rect.height;
        var viewportHeight = window.innerHeight || document.documentElement.clientHeight;

        // Check if the element is in the viewport considering its height
        return (
          (rect.top >= 0 && rect.top < viewportHeight) ||
          (rect.bottom > 0 && rect.bottom <= viewportHeight) ||
          (rect.top < 0 && rect.bottom > viewportHeight)
        );
      }

      var lastScrollTop = 0;
      var lastElementInViewport = null;


      $(document).ready(function(){
           var currentYear = new Date().getFullYear();
           $('.currentYr').text(currentYear);
       });
   </script>

    <script>
      var AgentInfo = {
          "vAgentID": "",
          "vProject": "",
          "vURL": "https://gtftechnologies.com/real-estate-landing-page-pune/",
          "thankspageurl": "https://gtftechnologies.com/real-estate-landing-page-pune/thanks.htm",
      };

      $('#preferedtime').hide();

      $("#SubmitQuery").click(function () {

          if ($("#sources").val() == "select") {
              alert("Please Choose a Project!!!..");
              $("#sources").focus();
              return false;
          }

          var PnamefromD = $('#sources').children("option:selected").val();
          var vProjectName = PnamefromD.split(':')[0]; //Change Project Name ( note more then 30 character)
          var vAgentIDTemp = PnamefromD.split(':')[1];

          var AgentInfo = {
              "vAgentID": vAgentIDTemp,
              "vProject": vProjectName,
              "vURL": "https://gtftechnologies.com/real-estate-landing-page-pune/",
              "thankspageurl": "https://gtftechnologies.com/real-estate-landing-page-pune/thanks.htm",
          };

          var FormInfo = {
              "SenderControlID": "qSenderName",
              "SenderControlMobileID": "qMobileNo",
              "SenderControlEmailID": "qEmailID",
              "SenderControlMsgID": "qMessage"
          };

          SubmitQueryData(AgentInfo, FormInfo);
      });

      $("#SubmitQuery1").click(function () {

        if ($("#sources1").val() == "select") {
            alert("Please Choose a Project!!!..");
            $("#sources1").focus();
            return false;
        }

        var PnamefromD = $('#sources1').children("option:selected").val();
        var vProjectName = PnamefromD.split(':')[0]; //Change Project Name ( note more then 30 character)
        var vAgentIDTemp = PnamefromD.split(':')[1];

        var AgentInfo = {
            "vAgentID": vAgentIDTemp,
            "vProject": vProjectName,
            "vURL": "https://gtftechnologies.com/real-estate-landing-page-pune/",
            "thankspageurl": "https://gtftechnologies.com/real-estate-landing-page-pune/thanks.htm",
        };

        var FormInfo = {
            "SenderControlID": "qSenderName1",
            "SenderControlMobileID": "qMobileNo1",
            "SenderControlEmailID": "qEmailID1",
            "SenderControlMsgID": "qMessage1"
        };

        SubmitQueryData(AgentInfo, FormInfo);
      });

      $("#SubmitQuery2").click(function () {

        if ($("#sources2").val() == "select") {
            alert("Please Choose a Project!!!..");
            $("#sources2").focus();
            return false;
        }

        var PnamefromD = $('#sources2').children("option:selected").val();
        var vProjectName = PnamefromD.split(':')[0]; //Change Project Name ( note more then 30 character)
        var vAgentIDTemp = PnamefromD.split(':')[1];

        var AgentInfo = {
            "vAgentID": vAgentIDTemp,
            "vProject": vProjectName,
            "vURL": "https://gtftechnologies.com/real-estate-landing-page-pune/",
            "thankspageurl": "https://gtftechnologies.com/real-estate-landing-page-pune/thanks.htm",
        };

        var FormInfo = {
            "SenderControlID": "qSenderName2",
            "SenderControlMobileID": "qMobileNo2",
            "SenderControlEmailID": "qEmailID2",
            "SenderControlMsgID": "qMessage2"
        };

        SubmitQueryData(AgentInfo, FormInfo);
      });

    </script>

    <script>
      
      $(document).ready(function(){

        const scrollBtnPos = $(window).scrollTop();
        $('.right_sidearea .btns').attr('top_pos', scrollBtnPos);

        $('.navbar .navbar-nav .nav-link').on('click',function(){
          if($(this).closest('.nav-item').find('.dropdown').length > 0){
            $(this).closest('.nav-item').toggleClass('open');
            if($(this).closest('.nav-item').hasClass('open')){
              $(this).closest('.nav-item.parent').siblings('.nav-item.parent').find('.dropdown').slideUp();
              $(this).closest('.nav-item.parent').siblings('.nav-item.parent').removeClass('open');
              $(this).closest('.nav-item.parent').siblings('.nav-item.parent').find('.nav-item').removeClass('open');
              $(this).closest('.nav-item').find('.dropdown:first').slideDown();
            }else{
              $(this).closest('.nav-item').find('.dropdown').slideUp();
              $(this).closest('.nav-item').removeClass('open');
              $(this).closest('.nav-item').find('.nav-item').removeClass('open');
            }
          }
          


      
        })

        // link-target
        $('.target_scroll_btn').on('click',function (e) {
            var target = this.hash,
            $target = $(target);

            $('html, body').stop().animate({
            'scrollTop': $target.offset().top
            }, 800, 'swing', function () {
            window.location.hash = target;
            });
        });

        // collapse menu

        $('.navbar-nav>li>a').on('click', function(){
          $('.hamburger').removeClass('is-active')

          if (window.matchMedia("(max-width: 767px)").matches) {
            $('.navbar-collapse').slideToggle();
          }
        });

        let removeBg = ()=>{
          $('body').removeClass('enquire_menu_opened');
          $('body').removeClass('backdrop_open');
          $('body').removeAttr('scrollTop');  
        }

        $(window).scroll(function(){
          var scrollTop = $(window).scrollTop();
          var btnsTopPos = $('.right_sidearea .btns').attr('top_pos');
          if($('body').attr('scrolltop') != null){
            let currentScrollTop = $('body').attr('scrolltop');
            if(scrollTop > (parseInt(currentScrollTop) + 300) || scrollTop < (parseInt(currentScrollTop) - 300)){
              $('body').removeClass('enquire_menu_opened');
              $('body').removeClass('backdrop_open');
              $('body').removeAttr('scrollTop');
              $('header.navbar').removeClass('show');
              $(".hamburger").removeClass("is-active");
            }
          }
          if(scrollTop > (parseInt(btnsTopPos) + 300) || scrollTop < (parseInt(btnsTopPos) - 300)){
            $('.right_sidearea .btns').addClass('btn_scrolled')
          }
        });

        // enquire
        
        $('.enquire_btn').on('click',function(){
          let scrollTopIn = $(document).scrollTop();
          $('body').toggleClass('enquire_menu_opened');
          $('body').toggleClass('backdrop_open');
          $('body').attr('scrollTop',scrollTopIn);
        })
        
        // hamburger animation
        $(".hamburger").click(function(){
          $(this).toggleClass("is-active");
          // if(!$(this).hasClass('is-active')){
          //   $('body').removeClass('backdrop_open');
          //   $('body').removeAttr('scrollTop');
          // }
          if (window.matchMedia("(min-width: 992px)").matches) {
            $('header.navbar').toggleClass('show');
            $('.navbar .navbar-nav .nav-item').removeClass('open');
            $('.navbar .navbar-nav .dropdown').slideUp();
            if($('header.navbar').hasClass('show')){
              var scrollTop1 = $(window).scrollTop();
                // $('body').toggleClass('enquire_menu_opened');
                $('body').attr('scrollTop',scrollTop1);
                $('body').addClass('backdrop_open');
            }else{
              $('body').removeClass('backdrop_open');
            }
          }else{
            $(this).closest('.navbar').find('.navbar-collapse').slideToggle();
          }

          
        });

        // enquire cover

        $('.enquire_cover').on('click',function(event){
          $('body').removeClass('backdrop_open');
          $('body').removeClass('enquire_menu_opened');
          $('header.navbar').removeClass('show');
          $(".hamburger").removeClass("is-active");
          $('.right_sidearea').removeClass('active');
          $('body').removeClass('overflow-hidden');
          $('.right_sidearea .btn').removeClass('open')
        })

        $('.close_btn').on('click',function(event){
          $('body').removeClass('backdrop_open');
          $('body').removeClass('enquire_menu_opened');
        })


        // $(document).on('click',function(event){
        //   // if((!$(event.target).closest('.enquire_menu').length && !$(event.target).closest('.enquire_btn').length) || $(event.target).closest('.enquire_menu .close_btn').length){
        //   //   $('body').removeClass('enquire_menu_opened');
        //   //   $('body').removeClass('backdrop_open');
        //   //   $('body').removeAttr('scrollTop');
        //   // }
        // })


        // sidearea

        $('.right_sidearea .btns .btn').on('click', function () {
        $(this).closest('.btns').removeClass('btn_scrolled');
        if($(this).attr('btn_at') == 'linkedin_data'){
            $(this).siblings('.btn').removeClass('open');
            $(this).closest('.right_sidearea').find('.content_data').removeClass('show');
            $(this).closest('.right_sidearea').removeClass('active');
            $('body').removeClass('overflow-hidden');
            $('body').removeClass('backdrop_open');
            return;
        }
        if($(this).attr('btn_at') == 'instagram_data'){
            $(this).siblings('.btn').removeClass('open');
            $(this).closest('.right_sidearea').find('.content_data').removeClass('show');
            $(this).closest('.right_sidearea').removeClass('active');
            $('body').removeClass('overflow-hidden');
            $('body').removeClass('backdrop_open');
            return;
        }
        $(this).closest('.btns').addClass('btn_actives');
        const clickedBtn = $(this).attr('btn_at');
        $(this).closest('.right_sidearea').find('.content_data').removeClass('show');
        $(this).closest('.right_sidearea').find('#' + clickedBtn).addClass('show');

        if ($(this).hasClass('open')) {
            $(this).removeClass('open')
            $(this).closest('.right_sidearea').removeClass('active');
            $('body').removeClass('overflow-hidden');
            $('body').removeClass('backdrop_open');
        } else {
            $(this).siblings('.btn').removeClass('open');
            $(this).addClass('open')
            $(this).closest('.right_sidearea').addClass('active');
            $('body').addClass('overflow-hidden');
            $('body').addClass('backdrop_open');
        }
    })

        // $(document).on('click',function(event){
        //   if(!$(event.target).closest('.right_sidearea').length){
        //     $('body').removeClass('overflow-hidden');
        //     $('.right_sidearea').removeClass('active');
        //     $('.right_sidearea .btns .btn').removeClass('open');
        //   }
        // })

        // let anCounted = 0;
        let animatedSectionFunction = ()=>{
          var animatedSection = $('.animated_text_section').each(function(){
          var animatedTop = $(this).offset().top - window.innerHeight;
            if ($(window).scrollTop() > animatedTop && !$(this).hasClass('active')) {
              $(this).addClass('active');
              $(this).find('.animated_text span').each(function(i, item){
                // console.log(item)
                var an_text = $(this);
                setTimeout(function() {
                  an_text.toggleClass('show');
                }, 200*i);
              })
            };
          });
        }

        animatedSectionFunction();
        $(window).scroll(function() {
          animatedSectionFunction();        
        });


        // back to top

        var backToTop = $('#back_to_top');

        $(window).scroll(function() {
          if ($(window).scrollTop() > 300) {
            backToTop.addClass('show');
          } else {
            backToTop.removeClass('show');
          }
        });

        backToTop.on('click', function(e) {
          e.preventDefault();
          $('html, body').animate({scrollTop:0}, '1500');
        });

      })
    </script>

    <script>
      $(document).ready(function(){
        // let anCounted = 0;
        let animatedSectionFunction = ()=>{
          var animatedSection = $('.animated_text_section').each(function(){
          var animatedTop = $(this).offset().top - window.innerHeight;
            if ($(window).scrollTop() > animatedTop && !$(this).hasClass('active')) {
              $(this).addClass('active');
              $(this).find('.animated_text span').each(function(i, item){
                // console.log(item)
                var an_text = $(this);
                setTimeout(function() {
                  an_text.toggleClass('show');
                }, 200*i);
              })
            };
          });
        }

        animatedSectionFunction();
        $(window).scroll(function() {
          animatedSectionFunction();        


        });

      })
    </script>

    <script>
      $(document).ready(function(){

        $('.carousel').on('slide.bs.carousel', function () {
          $('#banner_carousel .carousel-item.active').removeClass('animate');
        });

        $('.carousel').on('slid.bs.carousel', function () {
          $('#banner_carousel .carousel-item.active').addClass('animate');
        });

      });
      
      $(document).ready(function(){
        // slider animation
        setTimeout(function(){
          $('#banner_carousel .carousel-item.active').addClass('animate');
        }, 500);

        setTimeout(function(){
          $('.m-banner__content .content .fill').addClass('active');
        }, 1000);


      // counter animation

      var counted = 0;
        let options = {};
        if (window.matchMedia("(max-width: 576px)").matches) {
            options = {
                startAngle: -1.55,
                size: 150,
                // fill: { solid: ['#000'] }
            }
        } else {
            options = {
                startAngle: -1.55,
                size: 180,
                // fill: { solid: ['#000'] }
            }
        }

      const counterFunction = ()=>{
        var oTop = $('.overview_section .counter').offset().top - window.innerHeight;
        if (counted == 0 && $(window).scrollTop() > oTop) {
          $('.count').each(function() {
            var $this = $(this),
              countTo = $this.find('span').attr('data-count');
            $({
              countNum: $this.find('span').text()
            }).animate({
                countNum: countTo
              },

              {
                duration: 2000,
                easing: 'swing',
                step: function() {
                  $this.find('span').text(Math.floor(this.countNum));
                },
                complete: function() {
                  $this.find('span').text(this.countNum);
                  //alert('finished');
                }

              });
          });
          counted = 1;


          $(".circle .bar").circleProgress(options).on('circle-animation-progress',
              function (event, progress, stepValue) {
                  $(this).parent().find("span.test").text(String(stepValue.toFixed(2).substr(2)) + "%");
              });

              $(".finished_project .bar").circleProgress({
                  value: 0.40
                  // value: 0.99
              });
              $(".new_design .bar").circleProgress({
                  value: 0.60
              });
              $(".materials .bar").circleProgress({
                  value: 0.45
              });
              $(".happy_clients .bar").circleProgress({
                  value: 0.62
              });
        }
      }


      $(window).scroll(function() {
        counterFunction();        
      });
      counterFunction();


      // brands carousel

        $('.brands_carousel').owlCarousel({
            loop: true,
            autoplay: true,
            // slideTransition: 'linear',
            autoplaySpeed: 1000,
            // smartSpeed: 2000,
            // center: true,
            responsive : {
              0 : {
                  items: 3,
                  margin: 10,
              },
              768 : {
                  items: 4,
                  margin: 30,
              },
              992 : {
                  items: 5,
                  margin: 30,
              }
            }
        })


        // services_carousel

        var services_owl = $('.services_carousel').owlCarousel({
            loop: true,
            autoplay: false,
            items:1,
            // slideTransition: 'linear',
            autoplaySpeed: 1000,
            autoplayTimeout:4000,
            // smartSpeed: 2000,
            // center: true,
        })

        

  //  <!-- slide services carousel  -->

        $(document).ready(function() {
          if (window.matchMedia("(min-width: 768px)").matches) {
            var observer = new IntersectionObserver(function(entries) {
              entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                  services_owl.trigger('play.owl.autoplay', [4000]);
                }
              });
            }, {
              threshold: 0 // Adjust this value as needed
            });
        
            observer.observe(document.getElementById('services_list'));
          }else{
            services_owl.trigger('play.owl.autoplay', [3000]);
          }
          
        });

        // Check for change_slider elements on scroll
        var lastScrollTop = 0;

        $(window).on('scroll', function() {

          $('.fixed_footer').show();

          // hero banner scroll

          // console.log('scrollTop',($(this).scrollTop() / 10));
          if (window.matchMedia("(min-width: 992px)").matches) {
            $('.hero_section').css('top', -($(this).scrollTop() / 10));

            // set height to container to show footer
            const footerHeight = $('.fixed_footer').height();
            $('.main_page_contents .page_container').css('margin-bottom',footerHeight + 'px');
          }

          // footer
          const overviewOffsetTop = $('.overview_section').offset().top;

          if (window.matchMedia("(min-width: 992px)").matches) {
            if($(this).scrollTop() > overviewOffsetTop){
              $('.fixed_footer').show();
              $('.hero_section').hide();
            }else{
              $('.fixed_footer').hide();
              $('.hero_section').show();
            }
          }
          
          
          // change slider

          // var st = $(this).scrollTop();
          // var isScrollingDown = st > lastScrollTop;

          // $('.change_slider').each(function(index) {
          //     if (isInViewport($(this))) {
          //       // console.log('$this',$(this), index);
          //       // console.log('lastElementInViewport', lastElementInViewport !== this);
          //         if (lastElementInViewport !== this) {
          //             if (isScrollingDown) {
          //                 // Trigger owlCarousel to go to the next item
          //                 services_owl.trigger('next.owl.carousel');
          //             } else {
          //                 // Trigger owlCarousel to go to the previous item
          //                 services_owl.trigger('prev.owl.carousel');
          //             }
          //             lastElementInViewport = this;
          //         }
          //         return false; // Break the each loop after triggering once
          //     }

          //     if (index < 0) {
          //       services_owl.trigger('to.owl.carousel', [0]);
          //       return false; // Break the each loop after resetting
          //     }
          // });

          // lastScrollTop = st;
        });

        // add class to custom section

        $(window).on('scroll resize', function() {
          $('.custom_section').each(function() {
            // if ($(this).position().top == 0) {
            //   de
            //      $(this).addClass('in_viewport');
            //   } 
              if (isInViewport($(this))) {
                  $(this).addClass('in_viewport');
              }
              //  else {
              //     $(this).removeClass('in_viewport');
              // }
          });
        });

        $(window).trigger('scroll');

        $('.an_row').each(function(){
          var timing = 0;
          $(this).find('.fadeUp').each(function(){
            $(this).css('transition-delay',timing+'s');

            timing += 0.3;
          })
        })

      })




    </script>

</body>

<!-- Mirrored from gtftechnologies.com/real-estate-landing-page-pune/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Aug 2024 07:30:01 GMT -->
</html>