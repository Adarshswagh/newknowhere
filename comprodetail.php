<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");

// Get the pid from the request
$id = $_REQUEST['pid'];

// Fetch from the residential_projects table
$query = mysqli_query($con, "SELECT * FROM commercial_projects WHERE pid='$id'");

// Check if any data is found
if(mysqli_num_rows($query) > 0) {
    // Data found, fetch the row
    $row = mysqli_fetch_array($query);
} else {
    // No data found in residential_projects
    echo "No project found with the given pid.";
    exit;
}

// Check if property is shortlisted
$isShortlisted = false;
if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
    $checkQuery = mysqli_query($con, "SELECT * FROM user_wishlist WHERE user_id = $userId AND property_id = $id");
    $isShortlisted = mysqli_num_rows($checkQuery) > 0;
}

// Fetch similar projects based on location
$location = $row['3']; // Assuming '3' is the index for location in your database
$similar_query = mysqli_query($con, "SELECT * FROM commercial_projects WHERE project_location='$location' AND pid != '$id' LIMIT 5"); // Adjust the query as needed

$similar_projects = [];
while ($similar_row = mysqli_fetch_array($similar_query)) {
    $similar_projects[] = $similar_row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property List</title>

    <link rel="stylesheet" href="css/prodetail.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- SwiperJS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<style>
    /* Responsive Design */

@media (max-width: 1200px) {
    .amenities-list-wrapper {
        width: 100%;
        flex-wrap: wrap;
        gap: 20px;
    }
}

@media (max-width: 992px) {
    .detail-grid {
        grid-template-columns: 1fr; /* Stack fields vertically */
        margin-left: 20px;
    }

    .container {
        flex-direction: column;
    }

    .floor-plan {
        width: 100%;
    }

    .form-group input,
    .form-group textarea {
        font-size: 14px;
    }

    .icon-btn1 {
        font-size: 16px;
        padding: 6px 10px;
    }
}

@media (max-width: 768px) {
    .prodetail-heading {
        flex-direction: column;
        align-items: flex-start;
    }

    .action-buttons {
        margin-top: 10px;
        justify-content: flex-start;
    }

    .price-info h2 {
        font-size: 26px;
    }

    .price-info .discount {
        font-size: 18px;
    }

    .property-details {
        flex-direction: column;
        gap: 10px;
        margin-left: 0;
    }

    .properties-details h3,
    .unit-details h3,
    .amenities-heading,
    .location-heading {
        font-size: 20px;
    }

    .description {
        font-size: 16px;
        margin-left: 0;
    }

    .amenities-list-wrapper {
        flex-direction: column;
        gap: 10px;
    }

    .amenities-column {
        width: 100%;
    }

    .google-map {
        height: 250px;
    }
}

@media (max-width: 576px) {
    .prodetail-heading {
        font-size: 28px;
    }

    .location {
        font-size: 14px;
    }

    .property-details {
        gap: 8px;
    }

    .detail-item p {
        font-size: 16px;
    }

    .detail-grid div {
        font-size: 14px;
    }

    .field-title {
        font-size: 16px;
    }

    .form-group input,
    .form-group textarea {
        padding: 8px;
        font-size: 14px;
    }

    button[type="submit"] {
        font-size: 14px;
    }

    .icon-btn {
        font-size: 14px;
        padding: 5px 8px;
    }

    .download-btn {
        font-size: 14px;
        padding: 8px 16px;
    }

    table th,
    table td {
        font-size: 14px;
        padding: 6px;
    }
}

.project-section {
  padding: 40px 20px;
  background-color: #050F17;
  width: 100%;
}
.section-title {
  text-align: center;
  font-size: 28px;
  margin-bottom: 30px;
  font-weight: bold;
}

.auto-carousel {
  overflow: hidden;
}
.auto-track {
  overflow: hidden;
}
.auto-wrapper {
  display: flex;
}

.auto-slide {
  flex: 0 0 300px;
  margin: 0 10px;
}

.custom-card {
  background-color: #f4d7a9;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
  display: flex;
  flex-direction: column;
  transition: transform 0.3s;
}
.custom-card:hover {
  transform: translateY(-5px);
}

.image-section {
  position: relative;
  height: 150px;
  overflow: hidden;
}
.image-section img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.custom-badge {
  position: absolute;
  top: 10px;
  left: 10px;
  background: #000;
  color: #fff;
  font-size: 13px;
  padding: 5px 12px;
  border-radius: 5px;
  font-weight: bold;
}

.info-section {
  padding: 20px;
}
.project-name {
  font-size: 22px;
  font-weight: bold;
  margin-bottom: 10px;
  font-family: 'lexend', sans-serif;
}
.meta-data span {
  display: inline-block;
  margin-right: 15px;
  font-size: 14px;
  color: #333;
}
.meta-data i {
  margin-right: 5px;
}
.unit-count {
  font-size: 14px;
  color: #333;
  margin: 10px 0;
}

.cta-buttons {
  display: flex;
  gap: 10px;
  margin-top: 10px;
}
.main-btn {
  flex: 1;
  background: #111;
  color: #fff;
  padding: 10px 14px;
  border-radius: 6px;
  text-decoration: none;
  font-weight: 600;
  text-align: center;
}
.icon-btn {
  width: 40px;
  height: 40px;
  border-radius: 6px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  text-decoration: none;
}
.icon-btn.whatsapp {
  background-color: #25D366;
}
.icon-btn.call {
  background-color: #007BFF;
}

/* Responsive */
@media (max-width: 768px) {
  .auto-slide {
    flex: 0 0 80%;
  }
}
@media (max-width: 480px) {
  .auto-slide {
    flex: 0 0 95%;
  }
}

.action-buttons {
    display: flex;
    gap: 10px; /* Space between buttons */
}

.icon-btn1 {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background-color: #f8f9fa; /* Light background */
    color: #333; /* Text color */
    border: 1px solid #ddd; /* Border for button */
    border-radius: 20px; /* Rounded corners */
    padding: 7px 12px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-family: 'Lexend', sans-serif;
    margin-top: 0px;
}

.icon-btn1 i {
    margin-right: 5px; /* Spacing for the icon */
}

.icon-btn1:hover {
    background-color: #a8894d; /* Hover effect */
    color: #fff;
}

.icon-btn1:active {
    background-color: #5a4b31; /* Active button feel */
}


#popupOverlay {
    display: none;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 107%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
}

#popupContent {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #050F17;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
    height: 80% !important;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    z-index: 1001;
    overflow-y: auto;
    max-width: 90%;
    max-height: 90%;
    border-radius: 10px;
}

#closePopup {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

#contactform {
    flex: 1;
    padding: 40px;
    border: 1px solid #6c6c6c;
    max-width: 550px;
    margin: 0 auto;
}

#closePopup:hover,
#closePopup:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

input, textarea {
    width: 100% !important;
    padding: 10px !important;
    margin: 10px 0 !important;
    background: transparent !important;
    border: none !important;
    border-bottom: 1px solid #fff !important;
    color: #fff !important;
    font-family: 'Lexend', sans-serif !important;
    font-size: 14px !important;
}

textarea {
    height: 80px !important; /* Reduce default height */
    resize: vertical !important; /* Allow resizing if needed */
    margin: 5px 0 !important; /* Reduce vertical margin */
    padding: 8px !important; /* Slightly tighter padding */
    font-size: 13px !important;
}


#enquiryForm input::placeholder,
#enquiryForm textarea::placeholder {
    color: #fff !important;
}

button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #A8894D;
    color: white;
    border: none;
    cursor: pointer;
    margin-top: 10px;
}

.popup-form {
    color: #a8894d;
    text-align: center;
}

.popup-form-p {
    color: #f1f1f1;
    text-align: center;
}

/* Responsive Styles */
@media (max-width: 768px) {
    #popupContent {
        width: 90%;
        height: 90% !important;
        padding: 15px;
    }

    #contactform {
        padding: 20px;
    }

    input, textarea {
        font-size: 13px !important;
    }

    button[type="submit"] {
        padding: 12px;
        font-size: 16px;
    }

    #closePopup {
        font-size: 24px;
    }
}

@media (max-width: 480px) {
    #popupContent {
        width: 95%;
        height: 95% !important;
        padding: 10px;
    }

    #contactform {
        padding: 15px;
    }

    input, textarea {
        font-size: 12px !important;
    }

    button[type="submit"] {
        font-size: 14px;
    }
}

.unit-details {
    margin-top: 100px; /* Adjust based on your header height */
    position: relative;
    z-index: 1;
}

header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000; /* Ensure header is on top */
}


#banner-main {
    padding: 0 20px;
    background-color: #050f17;
}

.banner {
    position: relative;
    height: 400px;
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
    font-size: 64px;
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
        <h2><?php echo htmlspecialchars($row['1']); ?></h2>
            <p class="banner-bread">
                <a href="index.php">Home</a> &gt; 
                <a href="#">Projects List</a>
            </p>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- property detail -->
<section id="prodetail">
    <div class="container">
        <!-- Left Side: Property Content -->
        <div class="left-content">
            <div class="w3-content w3-section" style="max-width:100%;">
                <?php if (!empty($row['9'])): ?>
                    <img class="mySlides" src="admin/property/<?php echo $row['9']; ?>" style="width:100%">
                <?php endif; ?>
                
                <?php if (!empty($row['10'])): ?>
                    <img class="mySlides" src="admin/property/<?php echo $row['10']; ?>" style="width:100%">
                <?php endif; ?>
                
                <?php if (!empty($row['11'])): ?>
                    <img class="mySlides" src="admin/property/<?php echo $row['11']; ?>" style="width:100%">
                <?php endif; ?>
                
                <?php if (!empty($row['12'])): ?>
                    <img class="mySlides" src="admin/property/<?php echo $row['12']; ?>" style="width:100%">
                <?php endif; ?>
                
                <?php if (!empty($row['13'])): ?>
                    <img class="mySlides" src="admin/property/<?php echo $row['13']; ?>" style="width:100%">
                <?php endif; ?>
            </div>

            <script>
                let slideIndex = 0;
                function showSlides() {
                    let slides = document.querySelectorAll(".mySlides");
                    for (let i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none"; // Hide all images
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) { slideIndex = 1; } // Reset to first slide
                    slides[slideIndex - 1].style.display = "block"; // Show current slide
                    setTimeout(showSlides, 5000); // Change image every 2 seconds
                }

                document.addEventListener("DOMContentLoaded", showSlides); // Start when page loads
            </script>


            <h1 class="prodetail-heading">
                <?php echo htmlspecialchars($row['1']); ?>
                <span class="action-buttons">
                    <button id="shortlistButton" onclick="shortlistProperty(<?php echo $id; ?>)" class="icon-btn1">
                        <i class="fa fa-heart" <?php echo $isShortlisted ? 'style="color:red;"' : ''; ?>></i> 
                        <?php echo $isShortlisted ? 'Shortlisted' : 'Shortlist'; ?>
                    </button>
                    <button id="shareButton" onclick="copyShareUrl()" class="icon-btn1">
                        <i class="fa fa-share"></i> Share
                    </button>
                </span>
            </h1>

            <h3 class="prodetail-heading3">Description :</h3>
            <p class="description"><?php echo  htmlspecialchars($row['2']); ?></p>
            <div class="property-details">
                <div class="detail-item">
                    <i class="fa-solid fa-map-pin" style="color: #a8894d; height:30px;"></i>
                    <p class="project-detail"><?php echo htmlspecialchars($row['3']); ?>, <?php echo htmlspecialchars($row['19']); ?></p>
                </div>
                <div class="divider"></div>
                <div class="detail-item">
                    <i class="fa-solid fa-house" style="color: #a8894d; height:30px;"></i>
                    <p><?php echo htmlspecialchars($row['4']); ?></p>
                </div>
            </div>

            <div class="property-details-section">
                <div class="properties-details">
                    <h3>Project Details :</h3>
                    <div class="detail-grid">
                        <div><strong class="field-title">Project Developer :</strong> <span style="color:#A8894D; font-ize:20px;"><?php echo htmlspecialchars($row['21']); ?></span></div>
                        <div><strong class="field-title">Typology PSF :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['20']); ?></span></div>
                        <div><strong class="field-title">Total Floor :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['18']); ?></span></div>
                        <div><strong class="field-title">Total Towers :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['5']); ?></span></div>
                        <div><strong class="field-title">Total Units :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['6']); ?></span></div>
                        <div><strong class="field-title">Possession :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['7']); ?></span></div>
                        <div><strong class="field-title">Project area :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['4']); ?></span></div>
                        <div><strong class="field-title">Status :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['14']); ?></span></div>
                        <!-- <div><strong class="field-title">Type :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['23']); ?></span></div> -->
                    </div>
                </div>

                <div class="unit-details">
                    <h3>Typology Details :</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>UNIT NAME</th>
                                <th>UNIT PRICE</th>
                                <th>UNIT SIZE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($unit_details)): ?>
                                <?php foreach ($unit_details as $unit): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($unit['name']); ?></td>
                                        <td><?php echo htmlspecialchars($unit['price']); ?></td>
                                        <td><?php echo htmlspecialchars($unit['size']); ?> SqFt.</td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr><td colspan="3">No units available</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <div class="unit-details">
                    <h3>Floor Plan :</h3>
                    <div class="container">
                        <div class="floor-plan">
                            <div class="blur-overlay">
                                <button id="enquireButton3" class="download-btn" onclick="openEnquiryForm()">DOWNLOAD</button>
                            </div>
                            <img src="images/floor/f1.png" alt="2 BHK Floor Plan">
                        </div>

                        <div class="floor-plan">
                            <div class="blur-overlay">
                                <button id="enquireButton1" class="download-btn" onclick="openEnquiryForm()">DOWNLOAD</button>
                            </div>
                            <img src="images/floor/f2.jpg" alt="3 BHK Floor Plan">
                        </div>
                        <div class="floor-plan">
                            <div class="blur-overlay">
                                <button id="enquireButton2" class="download-btn" onclick="openEnquiryForm()">DOWNLOAD</button>
                            </div>
                            <img src="images/floor/f3.png" alt="Master Layout">
                        </div>
                    </div>
                </div>


              <!-- Swiper CDN -->
<!-- Swiper core CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<section class="project-section">
  <h3 class="section-title" style ="color:#A8894D; text-align: left;">Similar Projects :</h3>

  <div class="auto-carousel">
    <div class="auto-track">
      <div class="auto-wrapper">
        <?php foreach ($similar_projects as $project): ?>
          <div class="auto-slide">
            <div class="custom-card">
              <div class="image-section">
                <img src="admin/property/<?php echo $project['9']; ?>" alt="Project Image" />
                <div class="custom-badge">Commercial Projects</div>
              </div>
              <div class="info-section">
                <h2 class="project-name"><?php echo htmlspecialchars($project['1']); ?></h2>
                <div class="meta-data">
                  <span><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($project['3']); ?></span>
                  <span><i class="fas fa-vector-square"></i> <?php echo htmlspecialchars($project['4']); ?> Acre</span>
                  <span><i class="fa-solid fa-building"></i> <?php echo htmlspecialchars($project['5']); ?> Towers</span>
                </div>
                <p class="unit-count">Total Units: <?php echo htmlspecialchars($project['6']); ?> Units</p>
                <div class="cta-buttons">
                  <a href="comprodetail.php?pid=<?php echo $project['0']; ?>" class="main-btn">KNOW MORE</a>
                  <a href="https://wa.me/1234567890" target="_blank" class="icon-btn whatsapp"><i class="fab fa-whatsapp"></i></a>
                  <a href="tel:+1234567890" class="icon-btn call"><i class="fas fa-phone"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>



            </div>
        </div>
    </div>
</section>
<!-- end property detail -->

<!-- Similar Projects Section -->


<!-- SwiperJS Script -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  new Swiper('.auto-track', {
    slidesPerView: 'auto',
    spaceBetween: 20,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    grabCursor: true,
  });
</script>


<!-- Popup HTML -->
<div id="popupOverlay">
    <div id="popupContent">
        <span id="closePopup" style="color:#fff; ">&times;</span>
        <h2 class="popup-form">Enquire Now</h2>
        <p class="popup-form-p">Let's Connect – Your Queries, Our Priority!</p>

        <div id="thankYouMessage" style="display: none; text-align: center;">
            <h3>Thank You!</h3>
            <p>Your enquiry has been received. We'll get back to you soon.</p>
        </div>

        <form id="enquiryForm">
            <input type="text" name="name" id="name" placeholder="Your Name" required>
            <input type="email" name="email" id="email" placeholder="Your Email" required>
            <input type="text" name="contact" id="contact" placeholder="Your Contact Number" required pattern="[0-9]{10}" title="Enter a valid 10-digit phone number">
            <textarea name="message" id="message" placeholder="Your Message" required></textarea>
            
            <!-- Captcha Section -->
            <div style="display: flex; justify-content: center; align-items: center; width: 100%; padding: 10px;">
                <label id="captchaLabel" style="color: #fff; font-size: 18px; margin-right: 10px;"></label>
                <input type="text" id="captchaInput" placeholder="Enter result" required style="width: 100%; max-width: 200px; text-align: center; padding: 8px; border:1px solid #fff; border-radius: 5px;">
            </div>



            <button type="submit">Send Message</button>
        </form>
    </div>
</div>

<script>

     // Show enquiry modal
     document.getElementById("enquireButton3").onclick = function() {
        document.getElementById("popupOverlay").style.display = "block";
    };

      // Show enquiry modal
      document.getElementById("enquireButton1").onclick = function() {
        document.getElementById("popupOverlay").style.display = "block";
    };

      // Show enquiry modal
      document.getElementById("enquireButton2").onclick = function() {
        document.getElementById("popupOverlay").style.display = "block";
    };


    document.addEventListener("DOMContentLoaded", function() {
        var popup = document.getElementById("popupOverlay");
        var closeBtn = document.getElementById("closePopup");
        var form = document.getElementById("enquiryForm");
        var thankYouMessage = document.getElementById("thankYouMessage");
        var captchaLabel = document.getElementById("captchaLabel");
        var captchaInput = document.getElementById("captchaInput");

        // Generate random captcha
        function generateCaptcha() {
            var num1 = Math.floor(Math.random() * 10) + 1;
            var num2 = Math.floor(Math.random() * 10) + 1;
            captchaLabel.textContent = `Solve: ${num1} + ${num2} = ?`;
            captchaLabel.dataset.answer = num1 + num2;
        }
        
        generateCaptcha(); // Initial captcha

        function showPopup() {
            if (!sessionStorage.getItem("formSubmitted")) {
                popup.style.display = "block";
            }
        }

        function hidePopup() {
            popup.style.display = "none";
        }

        // Show popup when page loads
        showPopup();

        // Close popup when the close button is clicked
        closeBtn.onclick = function() {
            hidePopup();
        };

        // Close popup when clicking outside of the popup content
        window.onclick = function(event) {
            if (event.target == popup) {
                hidePopup();
            }
        };

        // Handle form submission via AJAX
        form.addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent default form submission

            // Validation
            var name = document.getElementById("name").value.trim();
            var email = document.getElementById("email").value.trim();
            var contact = document.getElementById("contact").value.trim();
            var message = document.getElementById("message").value.trim();
            var captchaAnswer = parseInt(captchaInput.value);

            // Email validation regex
            var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            var contactRegex = /^[0-9]{10}$/;

            if (!name || !email || !contact || !message || isNaN(captchaAnswer)) {
                alert("All fields are required.");
                return;
            }

            if (!emailRegex.test(email)) {
                alert("Enter a valid email address.");
                return;
            }

            if (!contactRegex.test(contact)) {
                alert("Enter a valid 10-digit phone number.");
                return;
            }

            if (captchaAnswer !== parseInt(captchaLabel.dataset.answer)) {
                alert("Incorrect CAPTCHA answer. Try again.");
                generateCaptcha();
                captchaInput.value = "";
                return;
            }

            var formData = new FormData(form);

            fetch("submit_form.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                console.log(data); // Log response from the server

                // Hide form and show thank you message
                form.style.display = "none";
                thankYouMessage.style.display = "block";

                // Set session flag to prevent popup from appearing again
                sessionStorage.setItem("formSubmitted", "true");

                // Reset form fields after 3 seconds
                setTimeout(function() {
                    form.reset();
                    form.style.display = "block";
                    thankYouMessage.style.display = "none";
                    hidePopup();
                }, 3000);
            })
            .catch(error => console.error("Error:", error));
        });
    });
</script>

<script>
function shortlistProperty(pid) {
    <?php if(isset($_SESSION['user_id'])): ?>
        const isCurrentlyShortlisted = <?php echo $isShortlisted ? 'true' : 'false'; ?>;
        const action = isCurrentlyShortlisted ? 'remove' : 'shortlist';
        const button = document.getElementById('shortlistButton');
        
        // Show loading state
        button.disabled = true;
        button.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Processing...';
        
        fetch('shortlist_handler.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'action=' + action + '&pid=' + pid
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if(data.success) {
                if (action === 'shortlist') {
                    button.innerHTML = '<i class="fa fa-heart" style="color:red;"></i> Shortlisted';
                    // Optional: Show a toast notification instead of alert
                    showToast('Property added to your wishlist!');
                } else {
                    button.innerHTML = '<i class="fa fa-heart"></i> Shortlist';
                    showToast('Property removed from your wishlist!');
                }
            } else {
                showToast(data.message || 'Operation failed');
                console.error('Error:', data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showToast('An error occurred. Please try again.');
        })
        .finally(() => {
            button.disabled = false;
        });
    <?php else: ?>
        // User not logged in - redirect to login
        window.location.href = 'login.php?redirect=' + encodeURIComponent(window.location.href);
    <?php endif; ?>
}

// Helper function for showing notifications
function showToast(message) {
    // You can replace this with a proper toast notification library
    const toast = document.createElement('div');
    toast.style.position = 'fixed';
    toast.style.bottom = '20px';
    toast.style.right = '20px';
    toast.style.backgroundColor = '#A8894D';
    toast.style.color = 'white';
    toast.style.padding = '10px 20px';
    toast.style.borderRadius = '5px';
    toast.style.zIndex = '10000';
    toast.textContent = message;
    document.body.appendChild(toast);
    
    setTimeout(() => {
        document.body.removeChild(toast);
    }, 3000);
}

function copyShareUrl() {
    const shareUrl = window.location.href;
    const tempInput = document.createElement("input");
    document.body.appendChild(tempInput);
    tempInput.value = shareUrl;
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
    alert("Project URL copied to clipboard!");
}
</script>



<!-- footer -->
<?php include("include/footer.php");?>
<!-- end footer -->

</body>
</html>