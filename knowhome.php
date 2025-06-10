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
    <title>Document</title>

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



</head>
<body>

<!-- navbar -->

<?php include("include/header.php");?>

 <!-- end navbar -->

 <!-- banner -->
    <section id="hero-main">
        <section class="hero-section1">
            <div class="content1">
                <h1 class="banner-heading">The Keys to Your Home</h1>
                <p class="banner-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullam corper luctus, lacus ex consequat ipsum, ultricies interdum ex ante sit amet tellus. Quisque faucibus iaculis quam a aliquet.</p>
                <a href="#" class="btn-home">View Our Projects</a>
            </div>
        </section>
    </section>
<!--end banner  -->


<!-- services -->
<section id="service-home">
    <div class="container-service">
        <div class="logo">
            <img src="./images/service/s1.png" alt="Building Logo 1">
            <p>Real Property<br>Living Solutions</p>
        </div>
        <div class="logo">
            <img src="./images/service/s2.png" alt="Building Logo 2">
            <p>Real Property<br>Living Solutions</p>
        </div>
        <div class="logo">
            <img src="./images/service/s3.png" alt="Building Logo 3">
            <p>Real Property<br>Living Solutions</p>
        </div>
        <div class="logo">
            <img src="./images/service/s4.png" alt="Building Logo 4">
            <p>Real Property<br>Living Solutions</p>
        </div>
        <div class="logo">
            <img src="./images/service/s5.png" alt="Building Logo 5">
            <p>Real Property<br>Living Solutions</p>
        </div>
        <div class="logo">
            <img src="./images/service/s6.png" alt="Building Logo 5">
            <p>Real Property<br>Living Solutions</p>
        </div>
    </div>
</section>
 <!--end  services -->
 <!-- property type  -->

<section class="project-section">
    <div class="content-wrapper">
        <h2 class="section-title">Explore Properties</h2>
        <p class="section-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus, lacus ex consequat ipsum, ultricies interdum ex ante.
        </p>
    </div>

</section>
    <section class="property-section">
        <div class="property-container">
            <div class="property-card1 property-card-small property-info1">
                <img src="./images/commercial_property.png" alt="Property 1">
                <div class="property-overlay">
                    <div class="property-details1">
                        <h2 class="property-type-detail">Residential Property</h2>
                        <p>25 Property</p>
                    </div>
                </div>
            </div>
            <div class="property-card1 property-card-large property-info1">
                <img src="./images/residential_property.png" alt="Property 2">
                <div class="property-overlay">
                    <div class="property-details1">
                        <h2 class="property-type-detail">Commercial Property</h2>
                        <p>25 Property</p>
                    </div>
                </div>
            </div>
            <div class="property-card1 property-card-small property-info1">
                <img src="./images/plotting_property.png" alt="Property 3">
                <div class="property-overlay">
                    <div class="property-details1">
                        <h2 class="property-type-detail">Plots/ Vills Property</h2>
                        <p>25 Property</p>
                    </div>
                </div>
            </div>
        </div>
    </section>  
<!-- end property type -->




<!-- real estate  -->
<section id="real-estate">
    <div class="container-real">
        <div class="featured-project">
            <div class="project-details">
                <h3>Featured Project</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="see-more-btn">See More</a>
            </div>
        </div>
        <div class="main-content">
            <h1>Real Estate Without the Hassle</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euis mod, nibh eu ullam corper luctus, lacus ex consequat ipsum, ultricies interdum ex ante sit amet tellus. Quisque faucibus iaculis quam a aliquet.</p>
            <p>Etiam a justo lectus. Donec eu nisl vel nibh vehicula tincidunt nec ut mi. Morbi porta felis sit amet quam efficitur condimentum. Donec porta.</p>
            <a href="#" class="view-projects-btn">View All Projects</a>
        </div>
    </div>
</section>

<!--end real esatte  -->


<!-- details -->
<section class="about-section">
        <div class="content">
            <div class="text">
                <h1>About Mansion</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus, lacus ex consequat ipsum, ultricies interdum ex ante sit amet tellus. Quisque faucibus iaculis quam a aliquet.</p>
                <ul class="checklist">
                    <div class="list-left">
                        <li><span>✔</span> Phasellus rutrum</li>
                        <li><span>✔</span> Donec at quam</li>
                        <li><span>✔</span> Phasellus tristique</li>
                        <li><span>✔</span> Quisque rhoncus</li>
                    </div>
                    <div class="list-right">
                        <li><span>✔</span> Phasellus rutrum</li>
                        <li><span>✔</span> Donec at quam</li>
                        <li><span>✔</span> Phasellus tristique</li>
                        <li><span>✔</span> Quisque rhoncus</li>
                    </div>
                </ul>
                <button class="cta-btn">Get Started</button>
            </div>
            <div class="images">
                <div class="image">
                    <img src="./images/ab1.jpg" alt="Mansion Interior 1">
                </div>
                <div class="image" style="margin-top:-50px;">
                    <img src="./images/ab2.jpg" alt="Mansion Interior 2">
                    
                </div>
            </div>
        </div>
</section>
 <!-- end details -->


 <!-- property crad carousel -->
 <section class="project-section">
    <div class="content-wrapper">
        <h2 class="section-title">Projects by Mansion</h2>
        <p class="section-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus, lacus ex consequat ipsum, ultricies interdum ex ante.
        </p>
    </div>

</section>

<section id="project-card">
    <div class="card-container">
        <div class="card-items">
            <?php 
                // Fetching properties from the database
                $query = mysqli_query($con, "SELECT property.*, user.uname, user.utype, user.uimage FROM `property`, `user` WHERE property.uid=user.uid");
                while ($row = mysqli_fetch_array($query)) {
            ?>
            <div class="card-entry">
                <div class="overlay-black">
                    <img src="admin/property/<?php echo $row['18']; ?>" alt="Property Image">
                    <div class="promo-badge">END YEAR PROMO</div>
                </div>
                <div class="property-info">
                    <h3 class="property-title">
                        <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="property-title">
                            <?php echo $row['1']; ?>
                        </a>
                    </h3>
                    <p class="price">$<?php echo $row['13']; ?></p>
                    <p class="property-details"><?php echo $row['14']; ?>, <?php echo $row['12']; ?> Sq ft</p>
                    <div class="property-meta">
                        <span><span style="font-size:20px">🛁</span><?php echo $row['7'];?> Bathrooms</span>
                        <span><span style="font-size:20px">🛏️</span> <?php echo $row['6'];?> Bedrooms</span>
                        <span><span style="font-size:20px">🏠</span> <?php echo $row['12'];?> sq ft</span>
                    </div>
                    <div class="button-container">
                        <!-- "Know More" button -->
                        <a href="knowpropertydetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>
                        
                        <!-- WhatsApp Button -->
                        <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        
                        <!-- Call Button -->
                        <a href="tel:+1234567890" class="btn-icon call-btn">
                            <i class="fas fa-phone"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- end property cad acrousel -->





 <!-- property crad carousel -->
 <section class="project-section">
    <div class="content-wrapper">
        <h2 class="section-title">Best Sellers</h2>
        <p class="section-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus, lacus ex consequat ipsum, ultricies interdum ex ante.
        </p>
    </div>

</section>

<section id="project-card">
    <div class="card-container">
        <div class="card-items">
            <?php 
                // Fetching properties from the database
                $query = mysqli_query($con, "SELECT property.*, user.uname, user.utype, user.uimage FROM `property`, `user` WHERE property.uid=user.uid");
                while ($row = mysqli_fetch_array($query)) {
            ?>
            <div class="card-entry">
                <div class="overlay-black">
                    <img src="admin/property/<?php echo $row['18']; ?>" alt="Property Image">
                    <div class="promo-badge">END YEAR PROMO</div>
                </div>
                <div class="property-info">
                    <h3 class="property-title">
                        <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="property-title">
                            <?php echo $row['1']; ?>
                        </a>
                    </h3>
                    <p class="price">$<?php echo $row['13']; ?></p>
                    <p class="property-details"><?php echo $row['14']; ?>, <?php echo $row['12']; ?> Sq ft</p>
                    <div class="property-meta">
                        <span><span style="font-size:20px">🛁</span><?php echo $row['7'];?> Bathrooms</span>
                        <span><span style="font-size:20px">🛏️</span> <?php echo $row['6'];?> Bedrooms</span>
                        <span><span style="font-size:20px">🏠</span> <?php echo $row['12'];?> sq ft</span>
                    </div>
                    <div class="button-container">
                        <!-- "Know More" button -->
                        <a href="knowpropertydetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>
                        
                        <!-- WhatsApp Button -->
                        <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        
                        <!-- Call Button -->
                        <a href="tel:+1234567890" class="btn-icon call-btn">
                            <i class="fas fa-phone"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- end property cad acrousel -->

 <!-- call to action -->
 <section id="main-call">
    <div class="call-to-action">
        <div class="hero-section">
            <div class="overlay">
                <h2>Your Dream Home Awaits</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullam corper luctus, lacus ex consequat ipsum, ultricies interdum ex ante.</p>
                <a href="#contact" class="btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>
  <!-- end call to action -->

 <!-- property crad carousel -->
 <section class="project-section">
    <div class="content-wrapper">
        <h2 class="section-title">Best ROI Investment</h2>
        <p class="section-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus, lacus ex consequat ipsum, ultricies interdum ex ante.
        </p>
    </div>

</section>

<section id="project-card">
    <div class="card-container">
        <div class="card-items">
            <?php 
                // Fetching properties from the database
                $query = mysqli_query($con, "SELECT property.*, user.uname, user.utype, user.uimage FROM `property`, `user` WHERE property.uid=user.uid");
                while ($row = mysqli_fetch_array($query)) {
            ?>
            <div class="card-entry">
                <div class="overlay-black">
                    <img src="admin/property/<?php echo $row['18']; ?>" alt="Property Image">
                    <div class="promo-badge">END YEAR PROMO</div>
                </div>
                <div class="property-info">
                    <h3 class="property-title">
                        <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="property-title">
                            <?php echo $row['1']; ?>
                        </a>
                    </h3>
                    <p class="price">$<?php echo $row['13']; ?></p>
                    <p class="property-details"><?php echo $row['14']; ?>, <?php echo $row['12']; ?> Sq ft</p>
                    <div class="property-meta">
                        <span><span style="font-size:20px">🛁</span><?php echo $row['7'];?> Bathrooms</span>
                        <span><span style="font-size:20px">🛏️</span> <?php echo $row['6'];?> Bedrooms</span>
                        <span><span style="font-size:20px">🏠</span> <?php echo $row['12'];?> sq ft</span>
                    </div>
                    <div class="button-container">
                        <!-- "Know More" button -->
                        <a href="knowpropertydetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>
                        
                        <!-- WhatsApp Button -->
                        <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        
                        <!-- Call Button -->
                        <a href="tel:+1234567890" class="btn-icon call-btn">
                            <i class="fas fa-phone"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- end property cad acrousel -->

<!-- team -->

<section class="project-section">
    <div class="content-wrapper">
        <h2 class="section-title">Expert Team Behind knowhere</h2>
        <p class="section-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus, lacus ex consequat ipsum, ultricies interdum ex ante.
        </p>
    </div>

</section>
<section class="custom-team-section">
        <div class="custom-container">
            
            <div class="custom-team-grid">
                <div class="custom-team-card">
                    <img src="./images/girl.jpg" alt="Sarah Jhon" class="custom-team-img">
                    <h3 class="custom-team-name">Sarah Jhon</h3>
                    <p class="custom-team-role">Mansion Team</p>
                    <div class="custom-social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="custom-team-card">
                    <img src="./images/boy.jpg" alt="Mike Morales" class="custom-team-img">
                    <h3 class="custom-team-name">Mike Morales</h3>
                    <p class="custom-team-role">Mansion Team</p>
                    <div class="custom-social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="custom-team-card">
                    <img src="./images/girl.jpg" alt="Steve Irwin" class="custom-team-img">
                    <h3 class="custom-team-name">Steve Irwin</h3>
                    <p class="custom-team-role">Mansion Team</p>
                    <div class="custom-social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="custom-team-card">
                    <img src="./images/boy.jpg" alt="Manda Jean" class="custom-team-img">
                    <h3 class="custom-team-name">Manda Jean</h3>
                    <p class="custom-team-role">Mansion Team</p>
                    <div class="custom-social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- end team -->


 <!-- blog -->

 
<section class="project-section">
    <div class="content-wrapper">
        <h2 class="section-title">Blog & News</h2>
        <p class="section-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus, lacus ex consequat ipsum, ultricies interdum ex ante.
        </p>
    </div>

</section>
<section id="blogs">
    <section class="blog-carousel">
        <div class="carousel-container">
            <div class="carousel-track">
                <div class="blog-card">
                    <img src="./images/blog1.jpg" alt="Blog Image 1">
                    <h3>‘Best beach in Australia’ to shake QLD coastal records</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <a href="#" class="read-link">Read More →</a>
                </div>
                <div class="blog-card">
                    <img src="./images/blog2.jpg" alt="Blog Image 2">
                    <h3>Burnt house in shocking condition gets the top price</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <a href="#" class="read-link">Read More →</a>
                </div>
                <div class="blog-card">
                    <img src="./images/blog3.jpg" alt="Blog Image 3">
                    <h3>QLD’s hoarder house attracts 39 registered bidders</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <a href="#" class="read-link">Read More →</a>
                </div>
            </div>
        </div>
    </section>
</section>


    
 <!-- end blog -->

 <!-- get in touch -->


 <section class="contact-section">
    <div class="contact-container">
        <div class="form-container">
            <form style="text-align:center">
                <div class="input-group" style="width:102%">
                    <input type="text" name="first-name" placeholder="First Name" required>
                    <input type="text" name="last-name" placeholder="Last Name" required>
                </div>
                <input type="email" name="email" placeholder="Email" required class="email-group">
                <textarea name="message" placeholder="Message" required></textarea>
                <button type="submit" style="margin-top:30px">SEND MESSAGE</button>
            </form>
        </div>
        <div class="contact-info">
            <h2>Get In Touch</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus, lacus ex consequat ipsum.</p>
            <ul>
                <li><i class="fas fa-map-marker-alt"></i> 918 Abner Road, Hudson</li>
                <li><i class="fas fa-envelope"></i> example@mail.com</li>
                <li><i class="fas fa-phone-alt"></i> +1 234 567 890</li>
                <li><i class="fas fa-clock"></i> 07.00 AM - 23.00 PM</li>
            </ul>
        </div>
    </div>
</section>


 <!-- end get iin touch -->


 <!--	Footer   start-->
 <?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>
