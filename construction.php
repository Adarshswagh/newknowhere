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
    <link rel="stylesheet" href="css/construction.css">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>


</head>
<style>

.service-card:hover{
    background-color: #A8894D;
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

.construction-cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
}

/* Individual Card Styling */
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
            <h2>Construction</h2>
            <p class="banner-bread">
                <a href="index.php">Home</a> &gt; 
                <a href="#">Construction</a>
            </p>
        </div>
    </div>
</section>


<!-- about section -->
<section class="premium-section section-hidden" style = "padding-top:70px">
    <div class="premium-content">
        <h2>About Construction</h2>
        <p>
        Experience the future of construction with Pune's leading tech-driven building innovators. At Knowhere, we don't just construct buildings; we craft dreams into tangible realities. As India's premier tech-enabled construction firm, we seamlessly blend cutting-edge technology with timeless craftsmanship to redefine the art of building.
        </p>
        <!-- <ul class="premium-checklist">
            <div class="checklist-column">
                <li><span>✔</span> Turning Dreams into Reality</li>
                <li><span>✔</span> Industry Leadership</li>
                <li><span>✔</span> Lasting Relationships</li>
                <li><span>✔</span> Client-Centered Approach</li>
                <li><span>✔</span> Transparency and Trust</li>

            </div>
            
        </ul> -->
        <a href="#construction" class="banner-bread"><button class="apply-btn">Read More →</button></a>
    </div>

        <div class="premium-form-container" style="height:400px;">
            <img src="images/construction.png" alt="People in a business setting">
        </div>
</section>

    <!-- how we work -->
    <div class="timeline-container section-hidden" style = "padding-top:70px">
        <h2 class="timeline-heading">Our Construction Process</h2>
        <div class="timeline">
            <div class="timeline-step" data-step="1">
                <div class="step-circle">1</div>
                <div class="step-content">
                    <h3>consultation of your vision with expert architects of our own firm
                    </h3>
                    <p>Discuss your vision with our expert architects and bring your dream project to life.</p>
                </div>
            </div>
            <div class="timeline-step" data-step="2">
                <div class="step-circle">2</div>
                <div class="step-content">
                    <h3>booking amount of 1% of the project cost
                    </h3>
                    <p>Secure your project with a booking amount of just 1% of the total cost.</p>
                </div>
            </div>
            <div class="timeline-step" data-step="3">
                <div class="step-circle">3</div>
                <div class="step-content">
                    <h3>Designing and planning by our expert architects 
                    </h3>
                    <p>Our expert architects craft detailed designs and plans tailored to your needs.</p>
                </div>
            </div>
            <div class="timeline-step" data-step="4">
                <div class="step-circle">4</div>
                <div class="step-content">
                    <h3>Construction with live tracking activities 
                    </h3>
                    <p style = "text-align: center;">Experience seamless construction with live tracking of all activities.</p>
                </div>
            </div>
            <div class="timeline-step" data-step="5">
                <div class="step-circle">5</div>
                <div class="step-content">
                    <h3>Move in with structural warranty of 10 years</h3>
                    <p>Enjoy your new space with a structural warranty of 10 years.</p>
                </div>
            </div>
        </div>
    </div>



    <script>
        // Add animation for timeline steps
        document.addEventListener('DOMContentLoaded', () => {
            const steps = document.querySelectorAll('.timeline-step');
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('show');
                        }
                    });
                },
                { threshold: 0.5 }
            );

            steps.forEach((step) => observer.observe(step));
        });
    </script>

    <!-- end how we wrork -->







    <!-- property type -->
    <div class="construction-section section-hidden" id="construction">
        <div class="construction-content">
            <h2>Home Construction Services In Pune</h2>
            <p>Flawless construction powered by deep expertise.</p>
        </div>
        <div class="construction-cards">
            <!-- Residential Property -->
            <div class="construction-card" id="consultationButton">
                <img src="images/blog1.jpg" alt="Residential Property">
                <div class="construction-overlay">
                    <div class="circle-arrow">
                        <span class="arrow">↗</span>
                        <span class="explore-text" style ="font-size: 1.2rem;">Explore More</span>
                    </div>
                    <div class="text-content">
                        <h3 style ="font-size: 0.90rem;">Residential Properties</h3>
                    </div>
                </div>
            </div>

            <!-- Commercial Property -->
            <div class="construction-card" id="consultationButton1">
                <img src="images/blog2.jpg" alt="Commercial Property">
                <div class="construction-overlay">
                    <div class="circle-arrow">
                        <span class="arrow">↗</span>
                        <span class="explore-text" style ="font-size: 1.2rem;">Explore More</span>
                    </div>
                    <div class="text-content">
                        <h3 style ="font-size: 0.90rem;">Commercial Properties</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>



 <!-- end property type -->











    <!-- service -->

    <div class="service-section section-hidden">
        <div class="service-container">
            <div class="service-text">
                <h5 style = "color: #A8894D;
        font-family: 'Italiana', Sans-serif;
        font-size: 30px;
        font-weight: 400;
         ">Our Service</h5>
                <h2 style = "color:white;">Solutions for every corner</h2>
                <p>At Knowhere, we offer comprehensive design and construction solutions to transform your space from concept to reality. Our expert team brings creativity, precision, and innovation to every project, ensuring your vision comes to life in the most spectacular way.</p>
            </div>
            <div class="service-cards">
                <div class="service-card">
                    <div class="icon">🏛️</div>
                    <h3>Architecture</h3>
                    <p>Our architectural services blend form and function to create stunning, sustainable structures. From conceptual design to construction documentation, we craft spaces that inspire and endure, tailored to your unique needs and site specifications.</p>
                </div>
                <div class="service-card">
                    <div class="icon">🛋️</div>
                    <h3>Interior</h3>
                    <p>Transform your interiors into captivating environments that reflect your style and enhance your daily life. Our interior design team specializes in creating harmonious, functional spaces that balance aesthetics with practicality, from residential to commercial projects.</p>
                </div>
                <div class="service-card">
                    <div class="icon">🪑</div>
                    <h3>Furniture</h3>
                    <p>Elevate your space with bespoke furniture solutions that combine comfort, style, and functionality. Our custom furniture design and manufacturing services ensure each piece perfectly complements your interior, creating a cohesive and personalized environment.</p>
                </div>
                <div class="service-card">
                    <div class="icon">📐</div>
                    <h3>3D Modelling</h3>
                    <p>Visualize your project before it's built with our advanced 3D modeling services. We bring your ideas to life in stunning detail, allowing for precise planning, design refinement, and immersive virtual walkthroughs of your future space.</p>
                </div>
            </div>
        </div>
    </div>





<!-- gallery -->
<section class="gallery-section section-hidden" style = "margin-top:70px">
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
<div class="modal" id="imageModal" >
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
<section class="testimonials-section section-hidden" style = "padding-top:70px">
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






<!-- call to action -->
<section id="cta-main section-hidden ">
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
    document.getElementById("consultationButton1").onclick = openModal;
    

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
        fetch('construction_submit.php', {
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



<!-- end enquirty -->

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




<!--	Footer   start-->
<?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>
