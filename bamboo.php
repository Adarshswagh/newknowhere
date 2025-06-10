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
    <link rel="stylesheet" href="css/bamboo.css">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>


</head>



<style>
   .content-wrapper {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 80px;
    padding: 50px 100px;
}

.content-wrapper.reverse {
    flex-direction: row-reverse;
}

.text-content {
    flex: 1;
}

.image-content {
    flex: 1;
}

.image-content img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

/* Tablet */
@media (max-width: 1024px) {
    .content-wrapper,
    .content-wrapper.reverse {
        flex-direction: column;
        gap: 40px;
        padding: 40px 30px;
        text-align: center;
    }

    .text-content,
    .image-content {
        width: 100%;
    }

    .description h3 {
        font-size: 30px;
    }

    .description p {
        font-size: 14px;
        line-height: 1.6;
    }

    .book-consultation {
        font-size: 14px;
        padding: 12px 20px;
        width: 100%;
    }
}

/* Mobile */
@media (max-width: 768px) {
    .content-wrapper,
    .content-wrapper.reverse {
        padding: 20px 15px;
        gap: 30px;
    }

    .description h3 {
        font-size: 24px;
    }

    .description p {
        font-size: 13px;
    }

    .book-consultation {
        font-size: 14px;
        width: 100%;
    }
}

.certificate-wrapper {
  text-align: center;
}

.certificate-img {
  width: 100%;
  max-width: 700px;
  height: auto;
  border-radius: 10px;
  border: 1px solid #A8894D;
}

/* Section Wrapper */
.main-verticals-section {
  /* padding: 80px 20px; */
}

/* Header Styling */
.post-guide-header {
  padding-top: 50px;
  text-align: center;
  max-width: 800px;
  margin: 0 auto 40px;
}

.post-guide-header h2 {
  color: #A8894D;
  font-family: 'Italiana', Sans-serif;
  font-size: 50px;
  font-weight: 400;
  line-height: 1.3em;
}

.bamboo-about {
  font-family: "Lexend", Sans-serif;
  font-size: 26px;
  font-weight: 300;
  line-height: 1.5em;
  color: #E8E8E8;
  margin-top: 20px;
}

/* Layout Flexbox */
.content-wrapper {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
  max-width: 1200px;
  margin: auto;
}

.reverse {
  flex-direction: row-reverse;
}

/* Text and Image Styling */
.text-content {
  flex: 1;
  min-width: 300px;
}

.description h3 {
  color: #A8894D;
  font-family: 'Italiana', Sans-serif;
  font-size: 40px;
  font-weight: 400;
  line-height: 1.3em;
}

.description p {
  color: #E8E8E8;
  font-size: 16px;
  line-height: 1.6em;
  margin-top: 10px;
}

.image-content img {
  width: 100%;
  max-width: 500px;
  height: auto;
  border-radius: 10px;
}

/* Button Styling */
.book-consultation {
  margin-top: 20px;
  padding: 12px 30px;
  background-color: #A8894D;
  color: white;
  border: none;
  font-weight: 600;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.book-consultation:hover {
  background-color: #8c6e3d;
}

/* Responsive */
@media (max-width: 768px) {
  .content-wrapper {
    flex-direction: column;
    text-align: center;
  }

  .reverse {
    flex-direction: column;
  }

  .image-content img {
    max-width: 100%;
    margin-bottom: 20px;
  }

  .book-consultation {
    width: 100%;
  }
}

.section-divider {
  border: none;
  height: 3px;
  background-color: #A8894D; /* matches the gold accent */
  margin: 20px auto;
  width: 80%;
  opacity: 0.3;
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

/* Main Section */
.post-guide-section {
    padding: 80px 30px;
    background-color: #050f17;
}

/* Header */
.post-guide-header {
    text-align: center;
    margin-bottom: 50px;
}

.post-guide-title {
    color: #A8894D;
    font-family: 'lexend', sans-serif;
    font-size: 50px;
    font-weight: 400;
    line-height: 1.3em;
}

/* Grid */
.post-guide-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

/* Each Card */
/* Each Card - Add Border */
.post-step {
    /* background-color: #0b1b28; */
    padding: 30px 20px;
    border: 1px solid #A8894D; /* 🆕 Border added */
    border-radius: 12px;
    text-align: center;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}

/* Grid Parent - Reduce Max Width and Center */
.post-guide-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    max-width: 1200px; /* 🆕 Set maximum width */
    margin: 0 auto;     /* 🆕 Center the grid */
}


.post-step:hover {
    /* background-color: #132634; */
    transform: translateY(-5px);
}

/* Images */
.post-step img {
    width: 80px;
    height: 80px;
    margin: 0 auto 20px;
    object-fit: contain;
}

/* Step Titles */
.post-step h3 {
    color: #A8894D;
    font-family: 'Lexend', sans-serif;
    font-size: 20px;
    margin-bottom: 15px;
    min-height: 60px;
}

/* Step Descriptions */
.post-step p {
    color: #e8e8e8;
    font-size: 14px;
    font-family: 'Lexend', sans-serif;
}

/* Responsive Styles */
@media (max-width: 1024px) {
    .post-guide-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .post-guide-grid {
        grid-template-columns: 1fr;
        gap: 20px;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        padding-bottom: 20px;
    }
    .post-step {
        scroll-snap-align: start;
        min-width: 300px;
        margin: 0 auto;
    }
}

@media (max-width: 480px) {
    .post-guide-title {
        font-size: 36px;
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

/* For the post guide steps */
.post-step {
  transition: all 0.8s ease-out;
}

/* For content rows */
.content-row {
  transition: all 0.8s ease-out;
}

/* For buttons */
.apply-btn {
  transition: all 0.3s ease;
}

/* Hover effects */
.apply-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.post-step:hover {
  transform: translateY(-5px);
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
            <h2>Bamboo</h2>
            <p class="banner-bread">
                <a href="index.php">Home</a> &gt; 
                <a href="#">Bamboo</a>
            </p>
        </div>
    </div>
</section>



<!-- post guide section -->

<section class="post-guide-section section-hidden">
    <div class="post-guide-header">
        <h2 class="post-guide-title">How to post to get the most?</h2>
    </div>

    <div class="post-guide-grid">
        <div class="post-step">
            <img src="images/biodegradable.png" alt="Comprehensive Eco-Friendly Solutions">
            <h3>Comprehensive Eco-Friendly Solutions</h3>
            <p>Our holistic approach extends beyond bamboo, integrating mud architecture and solar energy to offer sustainable solutions that cater to the needs of modern living.</p>
        </div>

        <div class="post-step">
            <img src="images/artist.png" alt="Artistic Excellence">
            <h3>Artistic Excellence</h3>
            <p>To attract buyers or renters, you have to put your best info forward. Jot down all the advantages and benefits of your property that the renter or buyer may want to avail.</p>
        </div>

        <div class="post-step">
            <img src="images/house.png" alt="Innovative Design and Construction">
            <h3>Innovative Design and Construction</h3>
            <p>We merge traditional craftsmanship with modern sustainability principles, delivering innovative bamboo constructions that are as visually stunning as they are unique.</p>
        </div>

        <div class="post-step">
            <img src="images/quality.png" alt="Focus on Quality and Sustainability">
            <h3>Focus on Quality and Sustainability</h3>
            <p>Every material sourced, every technique employed, and every design created reflects our dedication to environmental responsibility and excellence.</p>
        </div>

        <div class="post-step">
            <img src="images/partners.png" alt="Community Empowerment">
            <h3>Community Empowerment</h3>
            <p>We provide fair wages, training, and growth opportunities to bamboo farmers and artisans, fostering social and economic development.</p>
        </div>

        <div class="post-step">
            <img src="images/education.png" alt="Educational Outreach and Advocacy">
            <h3>Educational Outreach and Advocacy</h3>
            <p>We are a movement. Through educational outreach and advocacy, we promote the benefits of bamboo and sustainable living, inspiring a wave of eco-friendly change.</p>
        </div>
    </div>
</section>

<!-- post guide section end-->




<div class="post-guide-header section-hidden">
  <h2>Our Main Vertical</h2>
  <p class="bamboo-about">
    We blend traditional craftsmanship with modern design to transform bamboo into functional art and architecture.
  </p>
</div>

<div class="main-verticals-section">
  <div class="content-wrapper section-hidden">
    <div class="text-content">
      <div class="description">
        <h3>Bamboo Constructions</h3>
        <p>
          Crafted from bamboo, our sustainable sanctuaries – serene villas, breathtaking resorts, charming cafes, and cozy homes – elevate eco-consciousness into an art form.
        </p>
        <div class="buttons">
          <button id="consultationButton" class="book-consultation">Book a Consultation</button>
        </div>
      </div>
    </div>
    <div class="image-content">
      <img src="images/bamboo1.png" alt="Bamboo Constructions">
    </div>
  </div>
</div>
<hr class="section-divider">


<div class="main-verticals-section">
  <div class="content-wrapper reverse section-hidden">
    <div class="text-content">
      <div class="description">
        <h3>Bamboo Sculpture</h3>
        <p>
          Skilled artisans transform bamboo into stunning, eco-friendly sculptures that elevate any space with a touch of green elegance.
        </p>
        <div class="buttons">
          <button id="consultationButton2" class="book-consultation">Book a Consultation</button>
        </div>
      </div>
    </div>
    <div class="image-content">
      <img src="images/bamboo2.png" alt="Bamboo Sculpture">
    </div>
  </div>
</div>

<hr class="section-divider">

<div class="main-verticals-section">
    <div class="content-wrapper section-hidden">
        <div class="text-content">
            <!-- <p class="section-intro">···· Our Main Verticals ····</p> -->
            <!-- <h2>We blend traditional craftsmanship with modern design to transform bamboo into functional art and architecture.</h2> -->
            <div class="description">
                <h3 style = " color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 40px;
    font-weight: 400;
    line-height: 1.3em;">Bamboo Products</h3>
                <p>Embrace sustainable living with our bamboo haven – furniture for rustic charm, kitchenware for organic beauty, all designed to elevate your life and our planet.</p>
                <div class="buttons">
                    <!-- Button HTML -->
                    <button id="consultationButton3" class="book-consultation">Book a Consultation</button>
                </div>
            </div>
        </div>
        <div class="image-content">
            <img src="images/bamboo3.png" alt="Bamboo Constructions">
        </div>
    </div>
</div>


<section class="post-guide-section section-hidden" style = "padding-top:0px;">
  <div class="post-guide-header">
    <h2>Startup India Recognition</h2>
  </div>
  <div class="certificate-wrapper">
    <img src="images/certificate.png" alt="Startup India Certificate" class="certificate-img">
  </div>
</section>



<section class="testimonials-section section-hidden">
    <h3>Our Clients</h3>
    <h2>Don't just take our word for it</h2>
    <div class="testimonials-container">
        <div class="testimonial">
            <div class="stars">★★★★★</div>
            <p>The bamboo Buddha sculpture created by Bamboo Moshai is a masterpiece. The artistry and attention to detail are truly remarkable. It has become the centerpiece of our garden, admired by everyone who visits. Their work exceeded all our expectations.</p>
            <h4>ANANYA DESAI</h4>
            <p class="title">Art Collector</p>
        </div>
        <div class="testimonial">
            <div class="stars">★★★★★</div>
            <p>Partnering with Bamboo Moshai to create our bamboo café was an excellent decision. Their innovative design and quality work have made our café a local hotspot, admired for its unique bamboo structure. The process was smooth and enjoyable.</p>
            <h4>RAJESH SINGH</h4>
            <p class="title">Partner in Premium Bamboo Café</p>
        </div>
        <div class="testimonial">
            <div class="stars">★★★★★</div>
            <p>Bamboo Moshai's bamboo products have transformed my interior design projects. The quality and craftsmanship of their furniture and decor items are exceptional. Each piece adds a touch of elegance and sustainability, making my clients fall in love with their spaces.</p>
            <h4>SUNITA PATEL</h4>
            <p class="title">Interior Designer</p>
        </div>
    </div>
</section>



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

<!-- end call to action -->


 <!-- Enquire Button -->
 <div id="enquireButtonContainer">
    <button id="enquireButton">
        Book A Demo
    </button>
</div>

<!-- Enquiry Modal -->
<div id="enquiryModal" style="display:none;">
    <div class="form-container" style="position: relative; padding: 20px; background: #eaeaea; border-radius: 8px;">
        <span id="closeModal" style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 20px;">&times;</span>
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
                    <option value="Bamboo Constructions">Bamboo Constructions</option>
                    <option value="Bamboo Sculpture">Bamboo Sculpture</option>
                    <option value="Bamboo Products">Bamboo Products</option>
                </select>
                <i class="fas fa-angle-down" style="position: absolute; top: 15px; right: 10px; color: #555;"></i>
            </div>
            <small class="error-message" id="typeError"></small>

            <!-- CAPTCHA Section -->
            <div style="display: flex; align-items: center; gap: 10px;">
                <span id="captchaQuestion" style="font-size: 16px; font-weight: bold; width : 15%;"></span>
                <input type="text" id="captchaAnswer" name="captchaAnswer" placeholder="Enter Answer" required style="width: 100%;">
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
    document.getElementById("consultationButton2").onclick = openModal;
    document.getElementById("consultationButton3").onclick = openModal;

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
        fetch('bamboo_submit.php', {
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

<script>
// Scroll animation function
function animateOnScroll() {
  // Get all sections with animation classes
  const sections = document.querySelectorAll('.section-hidden, .slide-in-left, .slide-in-right, .post-step, .content-row, .premium-section');
  
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
  
  // Special handling for post guide steps (staggered animation)
  const postSteps = document.querySelectorAll('.post-step');
  if (postSteps.length > 0) {
    postSteps.forEach((step, index) => {
      step.style.transitionDelay = `${index * 0.2}s`;
      step.classList.add('section-hidden');
      observer.observe(step);
    });
  }
  
  // Special handling for content rows (alternate directions)
  const contentRows = document.querySelectorAll('.content-row');
  if (contentRows.length > 0) {
    contentRows.forEach((row, index) => {
      row.style.transitionDelay = `${index * 0.3}s`;
      row.classList.add('section-hidden');
      observer.observe(row);
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

<!-- end enquirty -->




<!--	Footer   start-->
<?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>
