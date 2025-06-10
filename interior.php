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

    <!-- <link rel="stylesheet" href="css/knowabout.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/interiorcss.css">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>


</head>

<style>
    /* amenities */
/* Background color and text alignment */
.services-section {
    background-color: #050f17;
    color: white;
    text-align: center;
    padding-top: 100px;
    padding: 100px;
}

.services-section h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.services-section p {
    font-size: 16px;
    margin-bottom: 30px;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.service-item {
    background-color: #050f17;
    color: white;
    border-radius: 8px;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    transition: transform 0.3s, box-shadow 0.3s;
    border: 1px solid #A8894D;
}

.service-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.service-item img {
    width: 50px;
    height: 50px;
    margin-bottom: 10px;
    /* filter: invert(46%) sepia(30%) saturate(431%) hue-rotate(315deg) brightness(95%) contrast(83%); */
}

.service-item p {
    margin: 0;
    font-weight: 500;
    color: white;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .services-section h2 {
        font-size: 20px;
    }

    .services-section p {
        font-size: 14px;
    }
}
/* services end */

/* turnkey services */

/* General Styling */
.turnkey-services-section {
    background-color: #050f17;
    color: white;
    padding: 40px 20px;
    text-align: center;
}

.turnkey-services-intro {
    background-color: #fce8e8;
    color: #050f17;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
}

.turnkey-services-intro h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.turnkey-services-intro p {
    font-size: 16px;
    margin-bottom: 15px;
}

.know-more {
    color: #e74c3c;
    font-weight: bold;
    text-decoration: none;
    font-size: 14px;
}

.turnkey-services-grid {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.service-box {
    background-color: white;
    color: #050f17;
    border-radius: 10px;
    padding: 20px;
    width: 250px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.service-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.service-box img {
    width: 80px;
    height: 80px;
    margin-bottom: 15px;
}

.service-box h3 {
    font-size: 18px;
    margin-bottom: 10px;
}

.service-box p {
    font-size: 14px;
}

/* Responsive Styling */
@media (max-width: 768px) {
    .turnkey-services-intro h2 {
        font-size: 20px;
    }
    
    .turnkey-services-intro p {
        font-size: 14px;
    }

    .turnkey-services-grid {
        flex-direction: column;
        align-items: center;
    }

    .service-box {
        width: 100%;
        max-width: 300px;
    }
}

@media (max-width: 480px) {
    .turnkey-services-intro h2 {
        font-size: 18px;
    }

    .turnkey-services-intro p {
        font-size: 13px;
    }

    .service-box h3 {
        font-size: 16px;
    }

    .service-box p {
        font-size: 12px;
    }
}

/* turnkey serives end */

.about-content button {
    background-color: #A8894D    ;
    color: #140f0f;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 0.9rem;
    cursor: pointer;
}

.about-content button:hover {
    background-color: #ffffff;
    color: #1d1f27;
}

/* gallery end */

 /* get in touch */
 .contact-section {
    padding: 115px 0;
    background-color: #050F17;
}

.contact-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.form-container {
    flex: 1;
    padding: 40px;
    border: 1px solid #6c6c6c;
    max-width: 550px;
}

.input-group {
    display: flex;
    gap: 20px; /* Adjust the gap between first and last name fields */
    margin-bottom: 20px;
    
}

.email-group{
    margin-bottom: 20px;
}

.input-group input {
    width: 47%; /* Make both input fields take up equal space */
    font-size: 14px;
    font-family: 'Lexend', sans-serif;
    font-weight: 300;
    line-height: 1.7em;
}

input, textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    background: transparent;
    border: none;
    border-bottom: 1px solid #fff;
    color: #fff;
    font-family: 'Lexend', sans-serif;
    font-size: 14px;
}

input::placeholder, textarea::placeholder {
    color: #fff;
}

textarea {
    height: 120px; /* Adjust the height of the message box */
    resize: vertical; /* Make the textarea resizable */
}

button {
    padding: 15px 30px; /* Increase the padding for a larger button */
    background-color: #a38755;
    color: #050F17;
    border: none;
    cursor: pointer;
    margin-top: 20px; /* Adjust margin for space between form elements */
    font-family: 'Lexend', sans-serif;
}

button:hover {
    background-color: #fff;
}

.contact-info {
    flex: 1;
    padding: 20px;
    max-width: 555px;
}

.contact-info h2 {
    font-size: 50px;
    font-weight: 400;
    line-height: 1.3em;
    margin-bottom: 20px;
    color: #e8e8e8;
    font-family: "Italiana", Sans-serif;
}

.contact-info p {
    margin-bottom: 20px;
    font-size: 14px;
    line-height: 1.7em;
    font-weight: 300;
    font-family: "Lexend", Sans-serif;
    text-align: left;
}

.contact-info ul {
    list-style: none;
    padding-left: 0;

}

.contact-info ul li {
    color: #e8e8e8  ;
    margin-bottom: 10px;
    font-size: 14px;
    font-family: "Lexend", Sans-serif;
    font-weight: 300;
    line-height: 1.7em;
}

.contact-info ul li i {
    margin-right: 10px;
}

/* Responsive Design */
@media screen and (max-width: 768px) {
    .contact-container {
        flex-direction: column;
    }

    .form-container, .contact-info {
        width: 100%;
    }

    .input-group {
        flex-direction: column; /* Make first and last name stack on top of each other on mobile */
    }

    .contact-info h2 {
        font-size: 28px;
    }
}

#commercial-form-section {
  padding: 20px 20px;
  background-color: #050f17;
  color: #ffffff;
  text-align: center;
  font-family: 'Poppins', sans-serif;
}

#commercial-form-section h2 {
  font-size: 32px;
  color: #a8894d;
  margin-bottom: 30px;
}

.section-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
  margin-bottom: 30px;
}

.item {
  width: 200px;
  background-color: #a38755;
  /* border-radius: 10px; */
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0,0,0,0.2);
  text-align: center;
  padding: 15px;
  transition: transform 0.3s ease;
}

.item img {
  width: 100%;
  height: auto;
  object-fit: cover;
  margin-bottom: 10px;
}

.interior-box-p {
  font-size: 16px;
  color: #ffffff;
}

/* Responsive */
@media (max-width: 768px) {
  .item {
    width: 60%;
  }
}

@media (max-width: 480px) {
  .item {
    width: 100%;
  }
}

.how-we-work {
  padding: 60px 20px;
  background:#050f17;
  color: #fff;
  text-align: center;
  font-family: 'Poppins', sans-serif;
}

.how-we-work .title {
  font-size: 2.5rem;
  color: #a8894d;
}

.how-we-work .subtitle {
  margin-top: 10px;
  margin-bottom: 30px;
  font-size: 1.1rem;
  color: #c4c4c4;
}

.timeline-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 40px;
}

.timeline-steps {
  position: relative;
  display: flex;
  justify-content: center;
  width: 100%;
  max-width: 800px;
  flex-wrap: nowrap;
}

.line-progress-track {
  position: absolute;
  top: 20px;
  left: 0;
  right: 0;
  height: 4px;
  background: #2c3e50;
  z-index: 0;
}

.line-progress {
  height: 4px;
  background: #a8894d;
  width: 0%;
  transition: width 0.4s ease;
}

.steps-wrapper {
  display: flex;
  justify-content: space-between;
  width: 100%;
  position: relative;
  z-index: 1;
}

.step {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: #2c3e50;
  color: white;
  font-weight: bold;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: background 0.3s ease;
}

.step.active {
  background: #a8894d;
  transform: scale(1.1);
}

.step-details {
  max-width: 600px;
  text-align: center;
  transition: all 0.3s ease;
}

.step-details h3 {
  font-size: 1.8rem;
  color: #fff;
  margin-bottom: 10px;
}

.step-details p {
  font-size: 1rem;
  color: #ccc;
  text-align: center;
}

/* Mobile view */
@media (max-width: 768px) {
  .timeline-steps {
    flex-direction: column;
    align-items: center;
    position: relative;
  }

  .line-progress-track {
    position: absolute;
    left: 50%;
    top: 0;
    transform: translateX(-50%);
    width: 4px;
    height: 100%;
    background: #2c3e50;
    z-index: 0;
  }

  .line-progress {
    position: absolute;
    left: 50%;
    top: 0;
    transform: translateX(-50%);
    width: 4px;
    background: #a8894d;
    height: 0%;
    transition: height 0.4s ease;
    z-index: 1;
  }

  .steps-wrapper {
    flex-direction: column;
    gap: 40px;
    align-items: center;
    position: relative;
    z-index: 2;
  }

  .step {
    background: #2c3e50;
    z-index: 3;
    width: 50px;
    height: 50px;
    line-height: 50px;
    border-radius: 50%;
    color: white;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
  }

  .step.active {
    background: #a8894d;
    transform: scale(1.1);
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

.construction-card {
    position: relative;
    flex: 1 1 calc(33.333% - 30px); /* 3 cards per row with gap */
    max-width: calc(33.333% - 30px);
    overflow: hidden;
    border-radius: 12px;
    min-width: 280px;
}

/* Responsive Image */
.construction-card img {
    width: 100%;
    height: 100%;
    max-height: 400px;
    object-fit: cover;
    border-radius: 12px;
    transition: transform 0.3s ease;
}

/* Responsive Layout */
@media (max-width: 1024px) {
    .construction-card {
        flex: 1 1 calc(50% - 30px); /* 2 cards per row on tablets */
        max-width: calc(50% - 30px);
    }
}

@media (max-width: 768px) {
    .construction-cards {
        flex-direction: column;
        align-items: center;
        gap: 20px;
    }

    .construction-card {
        flex: 1 1 100%;
        max-width: 100%;
    }

    .text-content {
        text-align: center;
        right: auto;
        left: auto;
        bottom: 15px;
    }

    .circle-arrow {
        left: 50%;
        transform: translateX(-50%);
    }

    .explore-btn {
        width: auto;
    }
}


.gallery-section h2 {
    font-size: 32px;
    /* font-weight: 700; */
    margin-bottom: 40px;
}


/* Add this to your existing CSS */
/* Animation Classes */
.section-hidden {
  opacity: 0;
  transform: translateY(50px);
  transition: all 1s ease-out;
}

.section-visible {
  opacity: 1;
  transform: translateY(0);
}

/* Slide-in animations */
.slide-in-left {
  transform: translateX(-50px);
  opacity: 0;
  transition: all 0.8s ease-out;
}

.slide-in-right {
  transform: translateX(50px);
  opacity: 0;
  transition: all 0.8s ease-out;
}

.slide-in-left.visible,
.slide-in-right.visible {
  transform: translateX(0);
  opacity: 1;
}

/* Fade-in delay for child elements */
.delay-1 { transition-delay: 0.2s; }
.delay-2 { transition-delay: 0.4s; }
.delay-3 { transition-delay: 0.6s; }
.delay-4 { transition-delay: 0.8s; }
.delay-5 { transition-delay: 1s; }

/* For the features */
.how-it-works-item {
  transition: all 0.8s ease-out;
}

/* For cards */
.card1 {
  transition: all 0.8s ease-out;
}

/* For FAQ items */
.faq-item {
  transition: all 0.5s ease-out;
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
            <h2>Interior</h2>
            <p class="banner-bread">
                <a href="index.php">Home</a> &gt; 
                <a href="#">Interior</a>
            </p>
        </div>
    </div>
</section>


<!--  -->


<!-- about section -->

<section class="premium-section section-hidden">
    <div class="premium-content">
        <h2>About Interior</h2>
        <p>
            
At Knowhere Interiors, we believe in creating spaces that reflect your personality and lifestyle. Our team of skilled designers and craftsmen work tirelessly to bring your dream interiors to life, whether it's a cozy home, a chic office, or a stylish commercial space. With our innovative designs and attention to detail, we ensure that every project is a masterpiece of functionality and beauty.

        </p>
        <ul class="premium-checklist">
            <div class="checklist-column">
                <li><span>✔</span> Turning Dreams into Reality</li>
                <li><span>✔</span> Industry Leadership</li>
                <li><span>✔</span> Lasting Relationships</li>
                <li><span>✔</span> Client-Centered Approach</li>
                <li><span>✔</span> Transparency and Trust</li>

            </div>
            
        </ul>
        <button class="apply-btn" id="consultationButton">Read More →</button>
    </div>

        <div class="premium-form-container" style="height:400px;">
            <img src="images/interior.png" alt="People in a business setting">
        </div>
</section>
<!-- about section end -->


<!-- why choose us -->
<div class="why-choose-us section-hidden">
    <h2 style= " color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 35px;
    font-weight: 400;
    line-height: 1.3em; text-align:center;">Why Choose Us</h2>
    <p style = "text-align:center;">We work to an extremely high standard of customer satisfaction</p>
    <div class="features">
        <div class="feature">
            <div class="icon">💡</div>
            <h3>Full Service</h3>
            <p style = "text-align:center;">Not sure where to start? Let us help. We can handle all aspects of your real estate needs.</p>
        </div>
        <div class="feature">
            <div class="icon">💲</div>
            <h3>Deliver Value</h3>
            <p style = "text-align:center;">We pledge to always provide optimal value for each and every client.</p>
        </div>
        <div class="feature">
            <div class="icon">🤝</div>
            <h3>Partners</h3>
            <p style = "text-align:center;">We view our stakeholders as partners in our mission to make real estate seamless.</p>
        </div>
        <div class="feature">
            <div class="icon">🛡️</div>
            <h3>Integrity</h3>
            <p style = "text-align:center;">Our integrity forms the bedrock of our relationships and business success.</p>
        </div>
    </div>
</div>

<!-- end why choose us -->


<!-- property type -->
<div class="construction-section section-hidden">
    <div class="construction-content">
        <h2>Home Construction Services In Pune</h2>
        <p>Flawless construction powered by deep expertise.</p>
    </div>
    <div class="construction-cards">
        <!-- Residential Property -->
        <div class="construction-card" onclick="showForm('residential')">
            <img src="images/blog1.jpg" alt="Residential Property">
            <div class="construction-overlay">
                <div class="circle-arrow">
                    <span class="arrow">↗</span>
                    <span class="explore-text" >Explore More</span>
                </div>
                <div class="text-content">
                    <h3 style ="font-size: 0.90rem;">Residential Properties</h3>
                </div>
            </div>
        </div>

        <!-- Commercial Property -->
        <div class="construction-card" onclick="showForm('commercial')">
            <img src="images/blog2.jpg" alt="Commercial Property">
            <div class="construction-overlay">
                <div class="circle-arrow">
                    <span class="arrow">↗</span>
                    <span class="explore-text">Explore More</span>
                </div>
                <div class="text-content">
                    <h3 style ="font-size: 0.90rem;">Commercial Properties</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Residential Form Section -->
<div id="residential-form-section section-hidden" class="form-section">
    <h2>Residential Property Inquiry</h2>
    <div class="section-container">
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\home design.png" alt="Sofas">
            <p class="interior-box-p" >Design</p>
        </div>
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\modular furniturre.png" alt="Sofas">
            <p class="interior-box-p" >Modular Furniture</p>
        </div>
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\carpentary work.png" alt="Coffee Tables">
            <p class="interior-box-p" >Carpentery Work</p>
        </div>
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\modular kithcen.png" alt="Beds">
            <p class="interior-box-p" >Modular Kitchen</p>
        </div>
    </div>
    <div class="section-container">
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\Painting.png" alt="Beds">
            <p class="interior-box-p" >Painting</p>
        </div>
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\tiles work.png" alt="Beds">
            <p class="interior-box-p" >Tiles Work</p>
        </div>
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\gypsum work.png" alt="Beds">
            <p class="interior-box-p" >Gypsum Work</p>
        </div>
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\electrical work.png" alt="Beds">
            <p class="interior-box-p" >Electrical Work</p>
        </div>
    </div>
    <div class="section-container">
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\smart lock.png" alt="Beds">
            <p class="interior-box-p" >Smart Lock System</p>
        </div>
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\plumbing.png" alt="Beds">
            <p class="interior-box-p" >Plumbing Work</p>
        </div>
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\deep cleanign.png" alt="Beds">
            <p class="interior-box-p" >Deep Cleaning</p>
        </div>
    </div>

    
</div>

<!-- Commercial Form Section -->
<div id="commercial-form-section section-hidden" class="form-section">
  <h2>Commercial Property Inquiry</h2>

  <div class="section-container">
    <div class="item">
      <img src="images/interiorservice/office design.png" alt="Design">
      <p class="interior-box-p">Design</p>
    </div>
    <div class="item">
      <img src="images/interiorservice/office work station.png" alt="Office Work Station">
      <p class="interior-box-p">Office Work Station</p>
    </div>
    <div class="item">
      <img src="images/interiorservice/chairs.png" alt="Chairs">
      <p class="interior-box-p">Chairs</p>
    </div>
    <div class="item">
      <img src="images/interiorservice/network.png" alt="Networking">
      <p class="interior-box-p">Networking</p>
    </div>
    <div class="item">
      <img src="images/interiorservice/electrical in office.png" alt="Electrical">
      <p class="interior-box-p">Electrical</p>
    </div>
    <div class="item">
      <img src="images/interiorservice/ac installation.png" alt="AC Installation">
      <p class="interior-box-p">AC Installation</p>
    </div>
    <div class="item">
      <img src="images/interiorservice/bio metric.png" alt="Bio Metric">
      <p class="interior-box-p">Bio Metric</p>
    </div>
    <div class="item">
      <img src="images/interiorservice/cctv installation.png" alt="CCTV Installation">
      <p class="interior-box-p">CCTV Installation</p>
    </div>
    <div class="item">
      <img src="images/interiorservice/modular furniturre.png" alt="Modular Furniture">
      <p class="interior-box-p">Modular Furniture</p>
    </div>
  </div>

  <!-- <div class="section-container">
    <div class="item">
      <img src="images/interiorservice/ac installation.png" alt="AC Installation">
      <p class="interior-box-p">AC Installation</p>
    </div>
    <div class="item">
      <img src="images/interiorservice/bio metric.png" alt="Bio Metric">
      <p class="interior-box-p">Bio Metric</p>
    </div>
    <div class="item">
      <img src="images/interiorservice/cctv installation.png" alt="CCTV Installation">
      <p class="interior-box-p">CCTV Installation</p>
    </div>
    <div class="item">
      <img src="images/interiorservice/modular furniturre.png" alt="Modular Furniture">
      <p class="interior-box-p">Modular Furniture</p>
    </div>
  </div> -->
</div>



<script>
    function showForm(type) {
    // Hide both forms first
    document.getElementById("residential-form-section").style.display = "none";
    document.getElementById("commercial-form-section").style.display = "none";

    // Get the target section
    let targetSection = null;

    // Show the relevant form and set the target section
    if (type === "residential") {
        targetSection = document.getElementById("residential-form-section");
    } else if (type === "commercial") {
        targetSection = document.getElementById("commercial-form-section");
    }

    if (targetSection) {
        targetSection.style.display = "block";

        // Smooth scroll to the form section
        targetSection.scrollIntoView({ behavior: "smooth", block: "start" });
    }
}


</script>

 <!-- end property type -->



<!-- how we work -->
<!-- How We Work -->
<section class="how-we-work section-hidden">
  <div class="content">
    <h2 class="title">The Way We Work</h2>
    <p class="subtitle" style = "text-align:center;">Five steps is all it takes to elevate your style of living.</p>

    <div class="timeline-container">
      <div class="timeline-steps">
        <div class="line-progress-track">
          <div class="line-progress"></div>
        </div>

        <!-- Dynamic Step Circles -->
        <div class="steps-wrapper">
          <div class="step" data-index="0">1</div>
          <div class="step" data-index="1">2</div>
          <div class="step" data-index="2">3</div>
          <div class="step" data-index="3">4</div>
          <div class="step" data-index="4">5</div>
        </div>
      </div>

      <!-- Step Description -->
      <div class="step-details">
        <h3 id="step-title">Meet Us</h3>
        <p id="step-description">Initial meeting to understand your requirements and expectations.</p>
      </div>
    </div>
  </div>
</section>








<script>
const steps = document.querySelectorAll(".step");
const title = document.getElementById("step-title");
const description = document.getElementById("step-description");
const lineProgress = document.querySelector(".line-progress");

const stepData = [
  {
    title: "Meet Us",
    description: "Our journey begins with an initial meeting to understand your requirements, vision, and expectations. Let’s plan your dream together.",
  },
  {
    title: "Scope of Work",
    description: "We define the project scope, deliverables, and timelines while ensuring we’re aligned with your goals and preferences.",
  },
  {
    title: "Seal the Deal",
    description: "Once we agree on the scope, terms, and conditions, we finalize the deal and move to execution with confidence.",
  },
  {
    title: "Execution",
    description: "Our expert team brings your vision to life with precision and excellence. We keep you updated at every step of the process.",
  },
  {
    title: "Stamp of Approval",
    description: "After completing the project, we ensure everything meets your expectations. Your satisfaction is our final seal of approval.",
  },
];

let currentStep = 0;

function updateStep(index) {
  steps.forEach((step, idx) => {
    step.classList.toggle("active", idx === index);
  });

  title.textContent = stepData[index].title;
  description.textContent = stepData[index].description;

  // Progress update for horizontal or vertical layout
  const isMobile = window.innerWidth < 768;
  const progressPercentage = (index / (steps.length - 1)) * 100;
  if (isMobile) {
    lineProgress.style.height = `${progressPercentage}%`;
  } else {
    lineProgress.style.width = `${progressPercentage}%`;
  }
}

function autoRotateSteps() {
  currentStep = (currentStep + 1) % stepData.length;
  updateStep(currentStep);
}

let interval = setInterval(autoRotateSteps, 5000);

steps.forEach((step, index) => {
  step.addEventListener("click", () => {
    clearInterval(interval);
    updateStep(index);
    currentStep = index;
    interval = setInterval(autoRotateSteps, 5000);
  });
});

window.addEventListener("resize", () => updateStep(currentStep));
updateStep(currentStep);
</script>


<!-- end how we worl -->

<!-- points -->

<!-- <h2 style= " color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 35px;
    font-weight: 400;
    line-height: 1.3em; text-align:center; padding-top:100px;">Discover Your Dream Home: Dive into Our Decor & Furniture Collection!</h2>
<div class="section-container">
    <div class="item" style="border-raius:0px;">
        <img src="images\interiorservice\home design.png" alt="Sofas">
        <p class="interior-box-p" >Design</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images\interiorservice\modular furniturre.png" alt="Sofas">
        <p class="interior-box-p" >Modular Furniture</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images\interiorservice\carpentary work.png" alt="Coffee Tables">
        <p class="interior-box-p" >Carpentery Work</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images\interiorservice\modular kithcen.png" alt="Beds">
        <p class="interior-box-p" >Modular Kitchen</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images\interiorservice\Painting.png" alt="Beds">
        <p class="interior-box-p" >Painting</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images\interiorservice\tiles work.png" alt="Beds">
        <p class="interior-box-p" >Tiles Work</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images\interiorservice\gypsum work.png" alt="Beds">
        <p class="interior-box-p" >Gypsum Work</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images\interiorservice\electrical work.png" alt="Beds">
        <p class="interior-box-p" >Electrical Work</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images\interiorservice\smart lock.png" alt="Beds">
        <p class="interior-box-p" >Smart Lock System</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images\interiorservice\plumbing.png" alt="Beds">
        <p class="interior-box-p" >Plumbing Work</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images\interiorservice\deep cleanign.png" alt="Beds">
        <p class="interior-box-p" >Deep Cleaning</p>
    </div>
</div>

<div class="section-container">
    <div class="item" style="border-raius:0px;">
        <img src="images/kids.png" alt="Beds">
        <p class="interior-box-p">Kids Storage</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images/chair.png" alt="Coffee Tables">
        <p class="interior-box-p">Lounges Chairs</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images/kids2.png" alt="Beds">
        <p class="interior-box-p">Kids Beds</p>
    </div>
    <div class="item" style="border-raius:0;">
        <img src="images/wall.png" alt="Beds">
        <p class="interior-box-p">Wall Scones</p>
    </div>
  
</div> -->


<!-- points end -->



<!-- gallery -->
<section class="gallery-section section-hidden" style="margin-top:70px;">
    <h3>Our Gallery</h3>
    <h2 style = "color : white;">Don't just take our word for it</h2>
        <div class="gallery-slider">
            <div class="gallery-container">
                <div class="gallery-item">
                    <img src="./images/digital/d1.png" alt="Gallery Image 1" data-index="0">
                </div>
                <div class="gallery-item">
                    <img src="./images/digital/d2.png" alt="Gallery Image 2" data-index="1">
                </div>
                <div class="gallery-item">
                    <img src="./images/digital/d3.png" alt="Gallery Image 3" data-index="2">
                </div>
                <div class="gallery-item">
                    <img src="./images/digital/d4.png" alt="Gallery Image 4" data-index="3">
                </div>
                <div class="gallery-item">
                    <img src="./images/digital/d5.png" alt="Gallery Image 5" data-index="4">
                </div>
            </div>
        </div>
</section>


<!-- Modal for Fullscreen View -->
<div class="modal" id="imageModal">
    <div class="modal-content">
        <div class="main-image">
            <img id="largeImage" src="" alt="Large Image">
        </div>
        <div class="thumbnails">
            <div class="thumbnail-slider">
                <img src="./images/digital/d1.png" alt="Thumbnail 1" data-index="0">
                <img src="./images/digital/d2.png" alt="Thumbnail 2" data-index="1">
                <img src="./images/digital/d3.png" alt="Thumbnail 3" data-index="2">
                <img src="./images/digital/d4.png" alt="Thumbnail 4" data-index="3">
                <img src="./images/digital/d5.png" alt="Thumbnail 5" data-index="4">
            </div>
        </div>
    </div>
    <button class="close-modal">✖</button>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const galleryContainer = document.querySelector('.gallery-container');
    const galleryItems = document.querySelectorAll('.gallery-item');
    const modal = document.getElementById('imageModal');
    const largeImage = document.getElementById('largeImage');
    const thumbnailImages = document.querySelectorAll('.thumbnail-slider img');
    const closeModal = document.querySelector('.close-modal');

    let currentIndex = 0;

    // Clone gallery items for infinite scroll
    galleryItems.forEach((item) => {
        const clone = item.cloneNode(true);
        galleryContainer.appendChild(clone);
    });

    // Modal Functionality
    galleryItems.forEach((item, index) => {
        item.addEventListener('click', () => {
            modal.style.display = 'flex';
            largeImage.src = item.querySelector('img').src;
            currentIndex = index;
            updateActiveThumbnail();
        });
    });

    // Close Modal
    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    // Thumbnail Click in Modal
    thumbnailImages.forEach((thumbnail, index) => {
        thumbnail.addEventListener('click', () => {
            largeImage.src = thumbnail.src;
            currentIndex = index;
            updateActiveThumbnail();
        });
    });

    // Update Active Thumbnail in Modal
    function updateActiveThumbnail() {
        thumbnailImages.forEach((img, idx) => {
            img.classList.toggle('active', idx === currentIndex);
        });
    }

    // Automatic Sliding in Modal
    setInterval(() => {
        if (modal.style.display === 'flex') {
            currentIndex = (currentIndex + 1) % galleryItems.length;
            largeImage.src = galleryItems[currentIndex].querySelector('img').src;
            updateActiveThumbnail();
        }
    }, 3000); // 3-second interval
});

    </script>
 <!-- end gallery -->







<!-- testimonial section -->
<section class="testimonials-section section-hidden" style="padding-top:70px;">
    <h3>Our Clients</h3>
    <h2>Don't just take our word for it</h2>
    <div class="testimonials-slider">
        <div class="testimonials-container">
            <div class="testimonial">
                <div class="stars">★★★★★</div>
                <p>The DTG team has been a reliable partner for a variety of needs as my business has developed...</p>
                <h4>Radiovision Diagnostics</h4>
                <p class="title">CEO/Founder</p>
            </div>
            <div class="testimonial">
                <div class="stars">★★★★★</div>
                <p>Our whole digital marketing plan is executed by DTG with remarkable competence...</p>
                <h4>Motilal Talera English Medium School, Moshi</h4>
                <p class="title">CEO/Founder</p>
            </div>
            <div class="testimonial">
                <div class="stars">★★★★★</div>
                <p>Due to DTG's creativity and willingness to take on challenges, we hired them...</p>
                <h4>Choose realtywise, Pune</h4>
                <p class="title">CEO/Founder</p>
            </div>
            <!-- Additional testimonials can be added here -->
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.testimonials-container');
    const cards = document.querySelectorAll('.testimonial');

    // Clone cards for seamless infinite scroll
    cards.forEach((card) => {
        const clone = card.cloneNode(true);
        container.appendChild(clone);
    });
});

</script>
<!-- end testimonial -->




<!-- call to action -->
<section id="cta-main section-hidden">
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
<!-- <h2 class="test-tag">Your Dream Home Awaits</h2> -->
</section>

<!-- end call to action -->


 <!-- Enquire Button -->
 <div id="enquireButtonContainer">
    <button id="enquireButton">
        Book A Demo
    </button>
</div>


<!-- Enquire Button -->
<div id="enquiryModal" style="display:none;">
    <div class="form-container" style="position: relative; padding: 20px; background: #eaeaea; border-radius: 8px;">
        <span id="closeModal" style="position: absolute; top: 10px; color:#000; right: 15px; cursor: pointer; font-size: 20px;">&times;</span>
        <h3>Enquiry Form</h3>
        
        <div id="feedbackMessage" style="color: #007bff; font-size: 14px; margin-bottom: 10px; display: none;"></div>
        
        <form id="enquiryForm" method="POST">
            <input type="text" id="name" name="name" placeholder="Your Name" required>
            <small class="error-message" id="nameError"></small>

            <input type="email" id="email" name="email" placeholder="Your Email" required>
            <small class="error-message" id="emailError"></small>

            <input type="text" id="contact" name="contact" placeholder="Your Contact Number" required maxlength="10">
            <small class="error-message" id="contactError"></small>

            <textarea id="message" name="message" placeholder="Your Message" required></textarea>
            <small class="error-message" id="messageError"></small>

            <div style="position: relative; display: flex; align-items: center;">
                <select id="type" name="type" required>
                    <option value="">Select Type</option>
                    <option value="Residential">Residential</option>
                    <option value="Commercial">Commercial</option>
                </select>
                <i class="fas fa-angle-down" style="position: absolute; top: 15px; right: 10px; color: #555;"></i>
            </div>
            <small class="error-message" id="typeError"></small>

            <!-- CAPTCHA Section -->
            <div style="display: flex; align-items: center; gap: 10px; margin-bottom:20px;">
                <span id="captchaQuestion" style="font-size: 16px; color:#000; font-weight: bold; width : 18%; align:center;"></span>
                <input type="text" id="captchaAnswer" name="captchaAnswer" placeholder="Enter Answer" required style="width: 100%;  margin-bottom:0px;">
            </div>
            <small class="error-message" id="captchaError"></small>

            <button type="submit">Send Message</button>
        </form>
    </div>
</div>

<style>
    .error-message {
        color: red;
        font-size: 12px;
        display: none;
    }
</style>

<script>
    let correctCaptchaAnswer = 0;

    function generateCaptcha() {
        let num1 = Math.floor(Math.random() * 10) + 1;
        let num2 = Math.floor(Math.random() * 10) + 1;
        correctCaptchaAnswer = num1 + num2;
        document.getElementById("captchaQuestion").innerText = `${num1} + ${num2} = `;
    }

    function openModal() {
        generateCaptcha();
        document.getElementById("enquiryModal").style.display = "block";
    }
    document.getElementById("enquireButton").onclick = openModal;
    document.getElementById("consultationButton").onclick = openModal;  
    

    document.getElementById("closeModal").onclick = function() {
        document.getElementById("enquiryModal").style.display = "none";
        document.getElementById("feedbackMessage").style.display = "none"; 
    };

    document.getElementById("enquiryForm").addEventListener("submit", function(event) {
        event.preventDefault(); 

        let isValid = true;

        const name = document.getElementById("name").value.trim();
        if (name === "") { showError("nameError", "Name is required"); isValid = false; } else { hideError("nameError"); }

        const email = document.getElementById("email").value.trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email === "") { showError("emailError", "Email is required"); isValid = false; } 
        else if (!emailPattern.test(email)) { showError("emailError", "Enter a valid email"); isValid = false; } 
        else { hideError("emailError"); }

        const contact = document.getElementById("contact").value.trim();
        const contactPattern = /^[0-9]{10}$/;
        if (contact === "") { showError("contactError", "Contact number is required"); isValid = false; } 
        else if (!contactPattern.test(contact)) { showError("contactError", "Enter a valid 10-digit number"); isValid = false; } 
        else { hideError("contactError"); }

        const message = document.getElementById("message").value.trim();
        if (message === "") { showError("messageError", "Message is required"); isValid = false; } 
        else { hideError("messageError"); }

        const type = document.getElementById("type").value;
        if (type === "") { showError("typeError", "Please select a type"); isValid = false; } 
        else { hideError("typeError"); }

        // CAPTCHA Validation
        const captchaInput = document.getElementById("captchaAnswer").value.trim();
        if (captchaInput === "" || parseInt(captchaInput) !== correctCaptchaAnswer) {
            showError("captchaError", "Incorrect CAPTCHA answer");
            isValid = false;
        } else {
            hideError("captchaError");
        }

        if (!isValid) return;

        const formData = new FormData(this);
        fetch('forms/interior_submit.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            const feedbackMessage = document.getElementById("feedbackMessage");
            if (data.success) {
                feedbackMessage.style.color = "green";
                feedbackMessage.innerText = "Enquiry submitted successfully!";
                this.reset();
                generateCaptcha(); // Refresh CAPTCHA
            } else {
                feedbackMessage.style.color = "red";
                feedbackMessage.innerText = "Error submitting enquiry. Please try again.";
            }
            feedbackMessage.style.display = "block";
            setTimeout(() => { document.getElementById("enquiryModal").style.display = "none"; location.reload(); }, 2000);
        })
        .catch(error => {
            console.error("Error:", error);
            alert("Something went wrong. Please try again.");
        });
    });

    function showError(elementId, message) {
        const errorElement = document.getElementById(elementId);
        errorElement.innerText = message;
        errorElement.style.display = "block";
    }

    function hideError(elementId) {
        const errorElement = document.getElementById(elementId);
        errorElement.style.display = "none";
    }
</script>

<!-- end enquiry -->

<script>
// Scroll animation function
function animateOnScroll() {
  // Get all sections with animation classes
  const sections = document.querySelectorAll('.section-hidden, .slide-in-left, .slide-in-right, .how-it-works-item, .card1, .faq-item');
  
  // Options for the Intersection Observer
  const options = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
  };
  
  // Create the observer
  const observer = new IntersectionObserver(function(entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        entry.target.classList.add('section-visible');
        observer.unobserve(entry.target);
      }
    });
  }, options);
  
  // Observe each section
  sections.forEach(section => {
    observer.observe(section);
  });
  
  // Special handling for how-it-works items (staggered animation)
  const howItWorksItems = document.querySelectorAll('.how-it-works-item');
  if (howItWorksItems.length > 0) {
    howItWorksItems.forEach((item, index) => {
      item.style.transitionDelay = `${index * 0.2}s`;
      item.classList.add('section-hidden');
      observer.observe(item);
    });
  }
  
  // Special handling for cards (staggered animation)
  const cards = document.querySelectorAll('.card1');
  if (cards.length > 0) {
    cards.forEach((card, index) => {
      card.style.transitionDelay = `${index * 0.15}s`;
      card.classList.add('section-hidden');
      observer.observe(card);
    });
  }
  
  // Special handling for FAQ items (staggered animation)
  const faqItems = document.querySelectorAll('.faq-item');
  if (faqItems.length > 0) {
    faqItems.forEach((item, index) => {
      item.style.transitionDelay = `${index * 0.1}s`;
      item.classList.add('section-hidden');
      observer.observe(item);
    });
  }
}

// Run when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
  animateOnScroll();
  
  // Re-run on resize to handle any layout changes
  window.addEventListener('resize', animateOnScroll);
});

// Re-run on route changes (for SPAs)
window.addEventListener('hashchange', animateOnScroll);
</script>


 <!--	Footer   start-->
 <?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>
