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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>

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

                <div class="property-input-group">
                    <input type="text" name="location" id="location" placeholder="Enter location" class="property-input">
                </div>

                <div class="property-select-group">
                    <select name="project_type" id="projectType" class="property-select" onchange="updateSubtypeOptions()">
                        <option value="">Select Project Type</option>
                        <option value="residential">Residential</option>
                        <option value="commercial">Commercial</option>
                        <option value="plotting">Plotting</option>
                    </select>
                </div>

                <div class="property-select-group">
                    <select name="project_subtype" id="projectSubtype" class="property-select">
                        <option value="">Select Project Subtype</option>
                    </select>
                </div>

                <div class="property-input-group">
                    <select name="budget" id="budget" class="property-input">
                        <option value="">Select maximum budget</option>
                        <optgroup label="₹50 Lakh - ₹1 Crore">
                            <option value="5000000">₹50 Lakhs</option>
                            <option value="6000000">₹60 Lakhs</option>
                            <option value="7000000">₹70 Lakhs</option>
                            <option value="8000000">₹80 Lakhs</option>
                            <option value="9000000">₹90 Lakhs</option>
                            <option value="10000000">₹1 Crore</option>
                        </optgroup>
                        <optgroup label="₹1 Crore - ₹5 Crore">
                            <option value="10000000">₹1 Crore</option>
                            <option value="12000000">₹1.20 Crore</option>
                            <option value="14000000">₹1.40 Crore</option>
                            <option value="16000000">₹1.60 Crore</option>
                            <option value="18000000">₹1.80 Crore</option>
                            <option value="20000000">₹2 Crore</option>
                            <option value="23000000">₹2.30 Crore</option>
                            <option value="26000000">₹2.60 Crore</option>
                            <option value="29000000">₹2.90 Crore</option>
                            <option value="32000000">₹3.20 Crore</option>
                            <option value="35000000">₹3.50 Crore</option>
                            <option value="38000000">₹3.80 Crore</option>
                            <option value="41000000">₹4.10 Crore</option>
                            <option value="44000000">₹4.40 Crore</option>
                            <option value="47000000">₹4.70 Crore</option>
                            <option value="50000000">₹5 Crore</option>
                        </optgroup>
                    </select>
                </div>

                <div class="property-submit-group">
                    <button type="submit" class="property-search-btn">
                        <i class="fas fa-search"></i> Search
                    </button>
                </div>
            </form>

            <button class="slider-btn prev" onclick="prevSlide()">&#10094;</button>
            <button class="slider-btn next" onclick="nextSlide()">&#10095;</button>
        </div>
    </section>
</section>
<!--end banner -->

<!-- services -->
<section id="service-home">
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

            <!-- Duplicate logos -->
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
<!--end services -->

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
                        <img src="images/cities/pune.png" alt="Ready to Move">
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
                        <img src="images/cities/goa.jpg" alt="Under Construction">
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
                                        <a href="comprodetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>
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
                                        <a href="plotdetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>
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
        </div>
    </div>
</section>
<!-- end property cad acrousel -->

<!-- property crad carousel -->
<section class="project-section">
    <div class="content-wrapper">
        <h2 class="section-title animate-up">Best Sellers</h2>
        <p class="section-description animate-up">
            Explore our Best Sellers - the top choices trusted by customers for quality and value. Find your perfect fit among our most popular picks, crafted to meet every need!
        </p>
    </div>
</section>

<section id="project-card">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php 
            // Query for fetching featured projects
            $queryResidential = mysqli_query($con, "SELECT * FROM residential_projects WHERE featured = 1");
            $queryCommercial = mysqli_query($con, "SELECT * FROM commercial_projects WHERE featured = 1");
            $queryPlotting = mysqli_query($con, "SELECT * FROM plotting_projects WHERE featured = 1");

            // Display featured residential projects
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
                                        <a href="comprodetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>
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
                                        <a href="plotdetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>
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
        </div>
    </div>
</section>
<!-- end property cad acrousel -->

<!-- gallery -->
<section class="gallery-section section-hidden" style="margin-top:70px">
    <h3>Our Clients</h3>
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
<!-- end gallery -->

<!-- blog -->
<section class="project-section">
    <div class="content-wrapper">
        <h2 class="section-title animate-up">Blog & News</h2>
        <p class="section-description animate-up">
            Explore our Blog & News section for the latest updates, trends, and expert insights in real estate. Stay informed to make the best decisions for your property journey.
        </p>
    </div>
</section>

<section id="blogs">
    <section class="blog-carousel">
        <div class="carousel-container">
            <div class="carousel-track">
                <?php
                // Query to fetch the latest 3 blogs from the database
                $query = "SELECT * FROM blogs ORDER BY created_at DESC LIMIT 3";
                $result = mysqli_query($con, $query);

                // Check if there are any blog posts
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Display each blog as a card
                        ?>
                        <div class="blog-card">
                            <a href="blog_detail.php?id=<?php echo $row['id']; ?>" class="read-link"><img src="./admin/property/<?php echo $row['image']; ?>" alt="Blog Image" /></a>
                            <a href="blog_detail.php?id=<?php echo $row['id']; ?>" class="read-link"><h3><?php echo $row['title']; ?></h3></a>
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

        <div class="contact-info">
            <h2>Get In Touch</h2>
            <p style="color:white;">Ready to make your real estate dreams a reality? Get in touch with Knowhere for trusted guidance, tailored solutions, and a seamless property experience.</p>
            <ul>
                <li style="color:#fff;">
                    <i class="fas fa-map-marker-alt"></i>
                    <a href="https://maps.app.goo.gl/2Sxk7Gus97hJMNT7A" target="_blank" style="color:#fff; text-decoration:none;">
                        &nbsp; Wakad, Pimpri-Chinchwad, Pune 411057
                    </a>
                </li>
                <li><a href="mailto:info@knowhere.in" style="color:#fff; text-decoration:none;"><i class="fas fa-envelope"></i>&nbsp;&nbsp; info@knowhere.in </a></li>
                <li> <a href="tel:+919112211291" style="color:#fff; text-decoration:none;"><i class="fas fa-phone"></i>&nbsp;&nbsp;&nbsp;+91 91122 11291</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- end get in touch -->

<!-- Thank You Modal -->
<div id="thankYouModal" style="display:none; position:fixed; top:25%; left:50%; transform:translate(-50%, -50%); background:#d4edda; padding:20px; border-radius:8px; box-shadow:0 4px 8px rgba(0,0,0,0.2); z-index:1000;">
    <span id="closeThankYouModal" style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 20px;">&times;</span>
    <h3>Thank You!</h3>
    <p style="text-align: left; color: #050f17; font-size: 14px; font-family: 'Lexend', Sans-serif; max-width: 700px;">Thank you for your interest. We will get back to you soon.</p>
</div>

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

<!-- Footer -->
<?php include("include/footer.php");?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/knowscript.js"></script>
</body>
</html>