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
    <title>Property List</title>

    <link rel="stylesheet" href="css/pune.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>'
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


</head>

<style>
#pune-properties {
    padding-top: 50px;
    background-color: #050f17;
    width: 100%;
    overflow-x: hidden;
}

/* Container */
.pune-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 20px 10px;
}

/* Row */
.pune-row {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

/* Property Card */
.pune-property-card {
    background-color: #f4f4f4;
    overflow: hidden;
    transition: transform 0.3s ease-in-out;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    position: relative;
    width: 350px;
    flex-shrink: 0;
    border-radius: 8px;
}

.pune-property-card:hover {
    transform: scale(1.02);
}

.pune-property-card img {
    width: 100%;
    height: 300px;
    object-fit: cover;
}

/* Promo Badge */
.pune-promo-badge {
    position: absolute;
    top: 10px;
    left: 10px;
    background-color: #050f17;
    color: #ffffff;
    padding: 8px 20px;
    font-size: 14px;
    font-family: 'Lexend', sans-serif;
    border-radius: 4px;
}

/* Property Info */
.pune-property-info {
    padding: 20px;
    background-color: #f2ddc4;
}

/* Property Title */
.pune-property-title {
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 10px;
    color: #222;
    font-family: "Italiana", Sans-serif;
    word-break: break-word;
}

.pune-property-title:hover {
    text-decoration: none;
    color: #A8894D;
    font-weight: 800;
}

/* Property Meta */
.pune-property-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: 'Lexend', sans-serif;
    font-size: 16px;
    color: #050f17;
    margin-bottom: 15px;
    flex-wrap: wrap;
}

/* Card Location */
.pune-card-location {
    font-size: 16px;
    font-weight: 400;
    color: #866a35;
}

/* Button Container */
.pune-button-container {
    display: flex;
    justify-content: center;
    gap: 10px;
}

/* View More Button */
.pune-view-more-btn {
    font-family: "Lexend", Sans-serif;
    font-size: 16px;
    text-transform: uppercase;
    color: #ffffff;
    background-color: #050f17;
    padding: 12px 40px;
    border-radius: 4px;
}

.pune-view-more-btn:hover {
    background-color: #A8894D;
    color: #fff;
    text-decoration: none;
}

/* WhatsApp Button */
.whatsapp-btn {
    background-color: #25d366;
    border-radius: 4px;
}

.whatsapp-btn:hover {
    background-color: #128c7e;
    color: #fff;
}

/* Call Button */
.call-btn {
    background-color: #4285f4;
    border-radius: 4px;
}

.call-btn:hover {
    background-color: #1a73e8;
    color: #fff;
}

/* Icon Button */
.btn-icon {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 48px;
    height: 48px;
    font-size: 20px;
    color: #fff;
    transition: background-color 0.3s;
}

/* Responsive Design */

/* For Tablets */
@media (max-width: 1024px) {
    .pune-property-card img {
        height: 250px;
    }
}

/* For Mobile */
@media (max-width: 768px) {
    .pune-row {
        flex-wrap: nowrap;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        padding-bottom: 20px;
    }

    .pune-property-card {
        flex: 0 0 auto;
        scroll-snap-align: start;
        margin-right: 15px;
        width: 300px;
    }

    .pune-property-card img {
        height: 220px;
    }

    .pune-property-title {
        font-size: 24px;
    }

    .pune-property-meta {
        font-size: 14px;
        flex-direction: row;
        gap: 10px;
    }

    .pune-button-container {
        flex-direction: row;
        justify-content: center;
    }

    .btn-icon {
        width: 40px;
        height: 40px;
        font-size: 18px;
    }
}

/* For Smallest Devices */
@media (max-width: 480px) {
    .pune-property-card {
        width: 280px;
    }

    .pune-property-card img {
        height: 180px;
    }

    .pune-property-title {
        font-size: 20px;
    }

    .pune-property-meta {
        font-size: 13px;
    }

    .btn-icon {
        width: 36px;
        height: 36px;
        font-size: 16px;
    }
}

#cta-main {
    padding: 50px 30px 80px;
    background-color: #050f17;
    width: 100%;
    overflow: hidden;
}

/* Background wrapper */
.cta-background {
    position: relative;
    max-width: 100%;
    max-height: 700px;
}

/* Background Image */
.cta-bg-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
}

/* Hero Section */
.cta-hero {
    position: relative;
    z-index: 2;
    height: 80vh;
    display: flex;
    justify-content: center;
    align-items: center;
    max-width: 100%;
    padding: 0 20px;
}

/* Overlay Content */
.cta-overlay {
    background-color: rgba(0, 0, 0, 0.6);
    text-align: center;
    padding: 50px;
    border-radius: 10px;
}

/* Title */
.cta-title {
    color: #E8E8E8;
    font-family: "Italiana", sans-serif;
    font-size: 50px;
    font-weight: 400;
    line-height: 1.3em;
    margin-bottom: 20px;
}

/* Subtitle */
.cta-subtitle {
    color: #e8e8e8;
    font-size: 16px;
    font-family: "Lexend", sans-serif;
    max-width: 700px;
    margin: 0 auto 30px;
}

/* Button */
.cta-button {
    background-color: #A8894d;
    color: #050f17;
    padding: 15px 40px;
    font-size: 16px;
    font-family: 'Lexend', sans-serif;
    border-radius: 0;
    text-decoration: none;
    display: inline-block;
    transition: background-color 0.3s ease;
}

.cta-button:hover {
    background-color: #ffffff;
    color: #050f17;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .cta-title {
        font-size: 42px;
    }
    .cta-subtitle {
        font-size: 15px;
    }
}

@media (max-width: 768px) {
    .cta-hero {
        height: auto;
        padding: 60px 20px;
    }
    .cta-title {
        font-size: 32px;
    }
    .cta-subtitle {
        font-size: 14px;
    }
    .cta-overlay {
        padding: 30px 20px;
    }
    .cta-button {
        padding: 12px 30px;
    }
}

@media (max-width: 480px) {
    .cta-title {
        font-size: 28px;
    }
    .cta-subtitle {
        font-size: 13px;
    }
    .cta-button {
        padding: 10px 25px;
    }
}

#banner-main {
    padding: 0 20px;
    background-color: #050f17;
}

.banner {
    position: relative;
    height: 200px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
}

.banner-img {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    top: 0;
    left: 0;
    z-index: 0;
    opacity: 0.8;
}

.banner::after {
    content: '';
    position: absolute;
    inset: 0;
    background-color: rgba(0, 0, 0, 0.73);
    z-index: 1;
}

.banner-content {
    position: relative;
    text-align: center;
    z-index: 2;
    padding: 0 20px;
}

.banner h2 {
    color: #E8E8E8;
    font-family: "Italiana", sans-serif;
    font-size: 50px;
    font-weight: 400;
    margin: 0;
}

.banner p {
    font-size: 16px;
    font-family: 'Lexend', sans-serif;
    margin-top: 10px;
}

.banner p a {
    color: #e8e8e8;
    text-decoration: none;
}

.banner p a:hover {
    text-decoration: underline;
    color: #A8894D;
}

/* Responsive */
@media (max-width: 992px) {
    .banner {
        height: 320px;
    }
    .banner h2 {
        font-size: 48px;
    }
}

@media (max-width: 576px) {
    .banner {
        height: 260px;
    }
    .banner h2 {
        font-size: 32px;
    }
    .banner p {
        font-size: 13px;
    }
}

</style>
<body>

<!-- navbar -->
<?php include("include/header.php");?>
<!-- end navbar -->

<!-- banner -->
<section id="banner-main">
    <div class="banner">
        <img src="images/banner/5.png" alt="Banner" class="banner-img">
        <div class="banner-content">
            <h2>Delhi-Ncr Projects List</h2>
            <p class="banner-bread">
                <a href="index.php">Home</a> &gt; 
                <a href="#">Delhi-Ncr Projects List</a>
            </p>
        </div>
    </div>
</section>
<!--end banner -->

<!-- properties -->
<section id="pune-properties">
    <div class="pune-container">
        <!-- Left Section (Property Listings) -->
        <div class="pune-left-section">
            <div class="pune-row">

                <!-- Residential Properties -->
                <?php 
                    $residential_query = mysqli_query($con, "SELECT * FROM `residential_projects` WHERE city='Delhi-Ncr'");
                    while ($row = mysqli_fetch_array($residential_query)) {
                ?>
                <br><div class="pune-col-md-6 pune-col-sm-10">
                        <a href="Prodetail.php?pid=<?php echo $row['0']; ?>" class="pune-property-card-link">
                            <div class="pune-property-card">
                                <div class="pune-overlay-black">
                                    <img src="admin/property/<?php echo $row['9'];?>" alt="Residential Property Image">
                                    <div class="pune-promo-badge">Residential Projects</div>
                                </div>
                                <div class="pune-property-info">
                                    <h3 class="pune-property-title">
                                        <a href="Prodetail.php?pid=<?php echo $row['0']; ?>" class="pune-property-title">
                                            <?php echo $row['1']; ?>
                                        </a>
                                    </h3>
                                    <div class="pune-property-meta">
                                        <span class="pune-location pune-card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                        <span class="pune-land-area pune-card-location"><i class="fas fa-vector-square"></i> <?php echo $row['4']; ?></span>
                                        <span class="pune-land-area pune-card-location"><i class="fa-solid fa-building" style="color: #a8894d;"></i> <?php echo $row['5']; ?>Towers</span>
                                    </div>
                                    <div class="pune-property-meta">
                                        <span class="pune-total-units pune-card-location1">Total Units: <?php echo $row['total_units']; ?></span>
                                    </div>
                                    <div class="pune-button-container">
                                        <a href="Prodetail.php?pid=<?php echo $row['0']; ?>" class="pune-view-more-btn">Know More</a>
                                        <a href="https://wa.me/1234567890" target="_blank" class="pune-btn-icon pune-whatsapp-btn">
                                            <i class="fab fa-whatsapp"></i>
                                        </a>
                                        <a href="tel:+1234567890" class="pune-btn-icon pune-call-btn">
                                            <i class="fas fa-phone"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>

                <!-- Commercial Properties -->
                <?php 
                    $commercial_query = mysqli_query($con, "SELECT * FROM `commercial_projects` WHERE city='Delhi-Ncr'");
                    while ($row = mysqli_fetch_array($commercial_query)) {
                ?>
                <div class="pune-col-md-6 pune-col-sm-10">
                    <a href="comprodetail.php?pid=<?php echo $row['0']; ?>" class="pune-property-card-link">
                        <div class="pune-property-card">
                            <div class="pune-overlay-black">
                                <img src="admin/property/<?php echo $row['15']; ?>" alt="Commercial Property Image">
                                <div class="pune-promo-badge">Commercial Projects</div>
                            </div>
                            <div class="pune-property-info">
                                <h3 class="pune-property-title">
                                    <a href="comprodetail.php?pid=<?php echo $row['0']; ?>">
                                        <?php echo $row['1']; ?>
                                    </a>
                                </h3>
                                <div class="pune-property-meta">
                                    <span class="pune-location pune-card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $row['8'];?></span>
                                    <span class="pune-location pune-card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                    <span class="pune-land-area pune-card-location"><i class="fas fa-vector-square"></i> <?php echo $row['4']; ?></span>
                                </div>
                                <div class="pune-property-meta">
                                    <span class="pune-total-units pune-card-location1">Typology : <?php echo $row['5']; ?></span>
                                </div>    
                                <div class="pune-button-container">
                                    <a href="comprodetail.php?pid=<?php echo $row['0']; ?>" class="pune-view-more-btn">Know More</a>
                                    <a href="https://wa.me/91122 11291" target="_blank" class="pune-btn-icon pune-whatsapp-btn">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    <a href="tel:+91 91122 11291" class="pune-btn-icon pune-call-btn">
                                        <i class="fas fa-phone"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>

                <!-- Plotting Properties -->
                <?php 
                    $plotting_query = mysqli_query($con, "SELECT * FROM `plotting_projects` WHERE city='Delhi-Ncr'");
                    while ($row = mysqli_fetch_array($plotting_query)) {
                ?>
                <div class="pune-col-md-6 pune-col-sm-10">
                    <a href="plotdetail.php?pid=<?php echo $row['0']; ?>" class="pune-property-card-link">
                        <div class="pune-property-card">
                            <div class="pune-overlay-black">
                                <img src="admin/property/<?php echo $row['13']; ?>" alt="Plotting Property Image">
                                <div class="pune-promo-badge">Plotting Project</div>
                            </div>
                            <div class="pune-property-info">
                                <h3 class="pune-property-title">
                                    <a href="plotdetail.php?pid=<?php echo $row['0']; ?>">
                                        <?php echo $row['1']; ?>
                                    </a>
                                </h3>
                                <div class="pune-property-meta">
                                    <span class="pune-location pune-card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $row['6'];?></span>
                                    <span class="pune-location pune-card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                    <span class="pune-land-area pune-card-location"><i class="fas fa-vector-square"></i> <?php echo $row['5']; ?></span>
                                </div>
                                <div class="pune-property-meta">
                                    <span class="pune-total-units pune-card-location1">Land Area : <?php echo $row['4']; ?></span>
                                </div>  
                                <div class="pune-button-container">
                                    <a href="plotdetail.php?pid=<?php echo $row['0']; ?>" class="pune-view-more-btn">Know More</a>
                                    <a href="https://wa.me/1234567890" target="_blank" class="pune-btn-icon pune-whatsapp-btn">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    <a href="tel:+1234567890" class="pune-btn-icon pune-call-btn">
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
    </div>
</section>


<!-- end properties -->

<!-- call to action -->
<section id="cta-main">
    <div class="cta-background">
        <img src="images/bannerf.jpg" alt="Banner" class="cta-bg-img">
        <div class="cta-hero">
            <div class="cta-overlay">
                <h2 class="cta-title">Your Gateway to Perfect Spaces</h2>
                <p class="cta-subtitle" style = "text-align:center;">Step into a world of opportunities with properties that inspire</p>
                <a href="contact.php" class="cta-button">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<!-- end call to action -->





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


<!-- footer -->
<?php include("include/footer.php");?>
<!-- end footer -->

</body>
</html>
