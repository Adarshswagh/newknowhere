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
    <link rel="stylesheet" href="css/digital.css">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>


</head>

<style>

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

/* Modal and form container styling */
#enquiryModal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 1000;
}

#enquiryModal .form-container {
    position: relative;
    max-width: 500px;
    margin: 40px auto;
    background: #5c5c5c;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

#enquiryModal h3 {
    margin-bottom: 15px;
    font-size: 24px;
    color: #333333;
    text-align: center; /* Centering the h3 */
}

/* Input fields styling with black placeholder */
#enquiryForm input[type="text"],
#enquiryForm input[type="email"],
#enquiryForm input[type="tel"],
#enquiryForm textarea,
#enquiryForm select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #000000;
    border-radius: 5px;
    font-size: 16px;
    color: #333;
    transition: border-color 0.3s ease;
    background: #fff !important;
}

/* Dropdown styling */
#enquiryForm select {
    appearance: none; /* Removes default dropdown arrow */
    /* background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="black" d="M7 10l5 5 5-5z"/></svg>') no-repeat right 10px center; */
    background-size: 16px;
    padding-right: 30px;
    cursor: pointer;
}

/* Placeholder color styling */
#enquiryForm input::placeholder,
#enquiryForm textarea::placeholder {
    color: #000000; /* Black placeholder text */
    opacity: 1; /* Ensures placeholder is fully opaque */
}

/* Focus effect */
#enquiryForm input:focus,
#enquiryForm textarea:focus,
#enquiryForm select:focus {
    border-color: #000000;
    outline: none;
}

/* Submit and close buttons styling */
#enquiryForm button[type="submit"],
#enquiryForm button#closeModal {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

#enquiryForm button[type="submit"] {
    background-color: #A8894D;
    color: #ffffff;
    width: 100%;
}

#enquiryForm button[type="submit"]:hover {
    background-color: #050F17;
}

#enquiryForm button#closeModal {
    color: #333;
    margin-left: 10px;
}

#enquiryForm button#closeModal:hover {
    background-color: #999;
}










/* button */
/* Container for the button */
#enquireButtonContainer {
    position: fixed;
    top: 50%;
    right: -60px;
    transform: translateY(-50%) rotate(90deg);
    transform-origin: center;
    z-index: 999;
}

/* Button styling */
#enquireButton {
    padding: 10px 20px;
    background-color: #A8894d;
    color: #000000;
    border: none;
    cursor: pointer;
    border-radius: 0px;
    font-weight: 100;
    font-family: Arial, sans-serif;
    transition: background-color 0.3s ease; /* Smooth transition for background color */
}

/* Hover effect */
#enquireButton:hover {
    background-color: #f5f5f5; /* Darker shade of the original color */
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
/* end enquire */

/* end enquire */

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
            <h2>DIgital Marketing</h2>
            <p class="banner-bread">
                <a href="index.php">Home</a> &gt; 
                <a href="#">Digital Marketing</a>
            </p>
        </div>
    </div>
</section>

<!-- About section -->
<section class="premium-section section-hidden">
    <div class="premium-content">
        <h2>About Digitalize The Globe</h2>
        <p>
            Embrace complete digital transformation with our powerhouse digital marketing company. 
            One of Pune’s top digital marketing agencies, we provide all services – Branding, Marketing, 
            Advertising – that will propel your business towards success on full speed. 
            We fuel comprehensive Online Presence, from SEO, SMM, and web development to graphic design, 
            content, and email marketing.
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
        <!-- <button class="apply-btn">APPLY FOR A LOAN →</button> -->
    </div>

    <div class="premium-form-container">
        <form>
            <div class="form-group">
                <input type="text" name="first-name" placeholder="First Name" required>
                <input type="text" name="last-name" placeholder="Last Name" required>
            </div>
            <input type="email" name="email" placeholder="Email" required>
            <textarea name="message" placeholder="Message" required></textarea>
            <button type="submit">SEND MESSAGE</button>
        </form>
    </div>
</section>


<!-- counter -->
<section class="stats-section section-hidden" style ="padding-bottom:0px;">
    <div class="stat-box">
        <h1 class="count" data-target="100">0+</h1>
        <p style = "text-align:center;">Happy Customers</p>
    </div>
    <div class="stat-box">
        <h1 class="count" data-target="400">0+</h1>
        <p style = "text-align:center;">Successful Projects</p>
    </div>
    <div class="stat-box">
        <h1 class="count" data-target="9">0+</h1>
        <p style = "text-align:center;">Years Experience</p>
    </div>
    <div class="stat-box">
        <h1 class="count" data-target="20">0+</h1>
        <p style = "text-align:center;">Team</p>
    </div>
</section>

  <!-- end counter -->

<!-- post guide section -->

<div class="post-guide-section section-hidden">
    <div class="post-guide-header">
        <h2
        style = " color: #A8894D;
        font-family: 'Italiana', Sans-serif;
        font-size: 50px;
        font-weight: 400;
        line-height: 1.3em; padding-top:0px;">Our Speciality</h2>
            <p style = text-align:center;>Adjust your design through a wide range of theme options in the
            development and instantly.</p>
    </div>
    <div class="post-guide-grid">
        <div class="post-step">
            <img src="images/h1.png" alt="Show off your property">
            <h3 style ="color: #A8894D;">Search Engine Optimization</h3>
            <p style="text-align:center;">Optimize your website to rank higher in search engine results, driving more organic traffic and increasing visibility for your target audience.</p>
        </div>
        <div class="post-step">
            <img src="images/h2.png" alt="Property Proposal">
            <h3 style ="color: #A8894D;">Data Analysis</h3>
            <p style="text-align:center;">Data analysis is most important part of better optimization.</p>
        </div>
        <div class="post-step">
            <img src="images/h3.png" alt="Needful Negotiations">
            <h3 style ="color: #A8894D;">Keywords Research</h3>
            <p style="text-align:center;">DTG believes that keyword research is the crucial step of any campaign</p>
        </div>
        
        <div class="post-guide-grid">
        <div class="post-step">
            <img src="images/h1.png" alt="Show off your property">
            <h3 style ="color: #A8894D;">Speed Optimization</h3>
            <p style="text-align:center;">Every material sourced, every technique employed, and every design created reflects our dedication to environmental responsibility and excellence.</p>
        </div>
        <div class="post-step">
            <img src="images/h2.png" alt="Property Proposal">
            <h3 style ="color: #A8894D;">Market Research</h3>
            <p style="text-align:center;">Our experts analyze the data and create a perfect search algorithm specific to the needs of your audience</p>
        </div>
        <div class="post-step">
            <img src="images/h3.png" alt="Needful Negotiations">
            <h3 style ="color: #A8894D;">Better Conversion</h3>
            <p style="text-align:center;">Our FB & Google ad expert is experienced in field and provides you the better conversion.</p>
        </div>
    </div>
</div></div>
<!-- post guide section end-->



<!-- gallery -->
<section class="gallery-section section-hidden" style="margin-top:70px;">
    <h3>Our Gallery</h3>
    <h2>Don't just take our word for it</h2>
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
    document.addEventListener("DOMContentLoaded", function () {
    // Function to animate the counting
    function animateCounter(element, target) {
        let current = 0;
        const increment = target / 200; // Adjust speed by changing 200

        const updateCounter = () => {
            current += increment;
            if (current >= target) {
                element.textContent = target.toLocaleString(); // Ensures the exact target value
            } else {
                element.textContent = Math.ceil(current).toLocaleString();
                requestAnimationFrame(updateCounter); // Smooth animation
            }
        };

        updateCounter();
    }

    // Detect when the stats section comes into view
    const statSection = document.querySelector('.stats-section');
    const statBoxes = document.querySelectorAll('.count');

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                statBoxes.forEach(box => {
                    const target = +box.getAttribute('data-target');
                    animateCounter(box, target);
                });
                observer.disconnect(); // Trigger only once
            }
        });
    }, { threshold: 0.5 }); // 50% of the section must be in view

    observer.observe(statSection);
});

</script>

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
