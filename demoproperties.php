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
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <style>
 /* Card and layout styling */
.card {
    border-radius: 10px;
    margin: 0 auto;
    width: 100%;
    max-width: 650px;
}

.card img {
    border-radius: 10px 0 0 10px;
    padding: 15px;
    width: 400px;
}

.property-details {
    padding-left: 20px;
}

/* Price styling */
.price-info h6 {
    color: #6f42c1;
    font-weight: bold;
}

/* Button styling */
.btn {
    border-radius: 10px;
}

/* Sticky contact form */
.position-sticky {
    position: -webkit-sticky;
    position: sticky;
    top: 40px;
}
.position-sticky1 {
    position: -webkit-sticky;
    position: sticky;
    top: 40px;
}
.position-sticky2 {
    position: -webkit-sticky;
    position: sticky;
    top: 40px;
}

/* Responsive styling */
@media (max-width: 991px) {
    .col-lg-8 {
        margin-bottom: 20px;
    }
    
    .card {
        max-width: 100%;
    }

    .property-details {
        padding-left: 10px;
    }

    .card img {
        width: 100%;
        height: auto;
    }
}

/* Sticky search bar container */
.search-bar-container {
    position: sticky; /* Makes the search bar stick to the top */
    top: 0; /* Position from the top of the viewport */
    border-radius:20px;
    z-index: 1000; /* Ensures the search bar stays above other content */
    background-color: white; /* Background color to match the rest of your site */
    /* padding: 10px 0; Add padding for spacing */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Optional: Adds a shadow for a subtle effect */
    width: 100%; /* Make sure the container takes full width */
    /* You can add additional styling as needed */
}

.search-bar-container form {
    background-color: white;
    padding: 15px;
    border-radius: 30px;
    display: flex;
    gap: 10px;
    max-width: 1000px; /* Adjust based on page width */
    margin: 0 auto;
}

.input-group {
    display: flex;
    gap: 10px;
}

.form-select, .form-control {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.btn {
    background-color: #e74c3c;
    color: black;
    border: none;
    padding: 2px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #c0392b;
}

input::placeholder {
    color: #999;
}

.custom-card {
    width: 90%; /* Adjust the width as needed */
    max-width: 800px; /* Set a maximum width */
}

.custom-btn {
    height: 35px; /* Set button height */
    width: 150px; /* Set a fixed width for both buttons */
    display: flex;
    justify-content: center; /* Center text horizontally */
    align-items: center; /* Center text vertically */
    padding: 0; /* Remove padding */
    text-align: center; /* Center the text */
}

.whatsapp-btn {
    background-color: #28a745; /* Light green for WhatsApp */
    border-color: #28a745; /* Match border color */
}

.call-btn {
    background-color: #007bff; /* Blue for Call Now */
    border-color: #007bff; /* Match border color */
}

.whatsapp-btn:hover {
    background-color: #218838; /* Darker green on hover */
    border-color: #1e7e34; /* Match border color on hover */
}

.call-btn:hover {
    background-color: #0056b3; /* Darker blue on hover */
    border-color: #004085; /* Match border color on hover */
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
              <a class="nav-link target_scroll_btn" href="example.php">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link target_scroll_btn" href="about.php">About US</a>
            </li>
            <li class="nav-item ">
              
              <a class="nav-link target_scroll_btn" href="property.php">Properties</a> 
            </li>
            <!-- <li class="nav-item ">
              <a class="nav-link target_scroll_btn" href="#services">Our Services</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link target_scroll_btn" href="#why-gtf">Why GTF?</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link target_scroll_btn" href="#awards">Awards</a>
            </li> -->
            <li class="nav-item ">
              <a class="nav-link target_scroll_btn" href="#connect_with_us">Contact Us</a>
              <a class="nav-link target_scroll_btn" href="contact.php">Contact</a>
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


    <!-- <div class="main_page_contents"> -->
    <section style="margin-top:30px;" class="position-sticky1">
        <div class="container search-bar-container" style="width:1000px;">
            <form method="post" action="propertygrid.php">
                <div class="input-group">
                    <!-- Select Type Dropdown -->
                    <select class="form-select" name="type">
                    <option value="">Select Type</option>
															<option value="RESIDENTIAL PROPERTY">RESIDENTIAL PROPERTY</option>
															<option value="COMMERCIAL PROPERTY">COMMERCIAL PROPERTY</option>
															<option value="PLOTTING PROPERTY">PLOTTING PROPERTY</option>
                    </select>

                    <!-- Select Status Dropdown -->
                    <select class="form-select" name="stype">
                        <option value="">Select Status</option>
                        <option value="rent">Rent</option>
                        <option value="sale">Sale</option>
                    </select>

                    <!-- City Input -->
                    <input type="text" class="form-control" name="city" placeholder="Enter City" required>

                    <!-- Search Button -->
                    <button type="submit" name="filter" class="btn btn-danger">
                        <i class="fas fa-search"></i> Search Property
                    </button>
                </div>
            </form>
        </div>
    </section>

       
      <section id="" style="margin-top:50px;" class="position-sticky2">
        <div class="container">
              <div class="row justify-content-center">
                  <!-- Left Section (Property Cards) -->
                  <div class="col-lg-7">
                      <div class="row">
                          <?php 
                          $query = mysqli_query($con, "SELECT property.*, user.uname, user.utype, user.uimage FROM `property`, `user` WHERE property.uid=user.uid");
                          while ($row = mysqli_fetch_array($query)) {
                          ?>
                              <div class="col-md-12 mx-auto mb-4">
                                  <div class="card shadow-sm custom-card">
                                      <div class="row no-gutters">
                                          <!-- Property Image -->
                                          <div class="col-md-6"> <!-- Changed from col-md-5 to col-md-6 -->
                                              <div class="position-relative h-100">
                                                  <img src="admin/property/<?php echo $row['18'];?>" alt="Property Image" class="img-fluid" style="border-radius: 10px 0 0 10px; height: 100%; object-fit: cover;">
                                              </div>
                                          </div>
                                          
                                          <!-- Property Details -->
                                          <div class="col-md-6 property-details" style=""> <!-- Changed from col-md-7 to col-md-6 -->
                                              <div class="p-4">
                                                  <h5 class="text-primary">
                                                      <a href="propertydetail.php?pid=<?php echo $row['0'];?>" class="text-decoration-none">
                                                          <?php echo $row['1']; ?>
                                                      </a>
                                                  </h5>
                                                  <p class="text-muted mb-1"><?php echo $row['14']; ?></p>
                                                  <div class="price-info">
                                                      <h6 class="text-purple">₹<?php echo $row['13'];?> Cr</h6>
                                                  </div>
                                                  <div class="mt-2">
                                                      <div class="d-flex justify-content-start align-items-center">
                                                          <div class="me-3">
                                                              <i class="fas fa-building text-primary"></i> 
                                                              <span>Project Size: <?php echo $row['12'];?> Sqft</span>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="mt-3 d-flex justify-content-between">
                                                      <span><i class="fas fa-user text-success"></i> By: <?php echo $row['uname']; ?></span>
                                                  </div>
                                                  <div class="mt-3 d-flex justify-content-center">
                                                    <a href="https://api.whatsapp.com/send?phone=" class="btn btn-success btn-sm me-2 custom-btn whatsapp-btn">
                                                        WhatsApp
                                                    </a>&nbsp&nbsp&nbsp&nbsp
                                                    <a href="tel:+91 9136211332" class="btn btn-outline-primary btn-sm custom-btn call-btn">
                                                        Call Now
                                                    </a>
                                                </div>



                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>


                          <?php } ?>
                      </div>
                  </div>

                  <!-- Right Section (Sticky Contact Form) -->
                  <div class="col-lg-4">
                      <div class="position-sticky" style="top: 120px;">
                          <div class="card shadow-sm">
                              <div class="card-body">
                                  <h5>Contact our Real Estate Experts</h5>
                                  <form action="contact_form_handler.php" method="POST">
                                      <div class="mb-3">
                                          <label for="name" class="form-label">Name</label>
                                          <input type="text" class="form-control" id="name" name="name" required>
                                      </div>
                                      <div class="mb-3">
                                          <label for="email" class="form-label">Email ID</label>
                                          <input type="email" class="form-control" id="email" name="email" required>
                                      </div>
                                      <div class="mb-3">
                                          <label for="phone" class="form-label">Phone Number</label>
                                          <div class="input-group">
                                              <span class="input-group-text">+91</span>
                                              <input type="text" class="form-control" id="phone" name="phone" required>
                                          </div>
                                      </div>
                                      <button type="submit" class="btn btn-success w-100">Contact Now</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
        </div>
      </section>

            
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