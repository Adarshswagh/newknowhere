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

    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>'
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


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
            <h2>FAQ</h2>
            <p class="banner-bread">
                <a href="index.php">Home</a> &gt; 
                <a href="#">FAQ</a>
            </p>
        </div>
    </div>
</section>
<!--end banner -->

<!-- properties -->
<section id="faq-section" class="faq-container">
    <div class="faq-left">
        
        <div class="faq-item">
            <div class="faq-question">
                <!-- <span class="faq-icon">+</span> -->
                <h3 class="faq-heading">What types of properties do you offer?</h3>
                <span class="faq-icon">+</span>
            </div>
            <div class="faq-answer">
                <p>We specialize in a wide range of properties, including residential apartments, commercial spaces, plots, and leasing opportunities. Whether you’re looking to buy, lease, or invest, we have the perfect options for you.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <!-- <span class="faq-icon">+</span> -->
                <h3 class="faq-heading">Can I schedule a site visit for a property I'm interested in?</h3>
                <span class="faq-icon">+</span>
            </div>
            <div class="faq-answer">
                <p>Yes, we encourage site visits to help you make informed decisions. Contact us, and we’ll arrange a visit at your convenience.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <!-- <span class="faq-icon">+</span> -->
                <h3 class="faq-heading">Do you assist with legal documentation and property registration?</h3>
                <span class="faq-icon">+</span>
            </div>
            <div class="faq-answer">
                <p>Absolutely. Our team will guide you through the legal processes, from verifying documents to completing property registration.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <!-- <span class="faq-icon">+</span> -->
                <h3 class="faq-heading">What financing options are available for purchasing properties?</h3>
                <span class="faq-icon">+</span>
            </div>
            <div class="faq-answer">
                <p>We collaborate with leading banks and financial institutions to offer home loans and commercial property financing with competitive rates.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <!-- <span class="faq-icon">+</span> -->
                <h3 class="faq-heading">How can I lease my property through Knowhere Real Estate?</h3>
                <span class="faq-icon">+</span>
            </div>
            <div class="faq-answer">
                <p>If you own a property and want to lease it, our team can help you list, market, and find reliable tenants quickly and efficiently.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <!-- <span class="faq-icon">+</span> -->
                <h3 class="faq-heading">Do you offer customized solutions for plotting projects?</h3>
                <span class="faq-icon">+</span>
            </div>
            <div class="faq-answer">
                <p>Yes, we provide tailor-made solutions for plotting projects, including assistance with layout planning, approvals, and marketing.</p>
            </div>
        </div>

        <!-- Add more FAQ items as needed -->
    </div>

    <div class="faq-right">
        <h3 class="form-heading">Still Have Any Question ?</h3>
        <form id="enquiryForm">
            <div class="input-group">
                <!-- <label for="first-name" class="form-label">First Name</label> -->
                <input type="text" id="first-name" name="first-name" placeholder="First Name" required>
            </div>

            <div class="input-group">
                <!-- <label for="email" class="form-label">Email</label> -->
                <input type="email" id="email" name="email" placeholder="Your Email" required>
            </div>

            <div class="input-group">
                <!-- <label for="contact" class="form-label">Contact Number</label> -->
                <input type="text" id="contact" name="contact" placeholder="Your Contact Number" required pattern="[0-9]{10}" title="Enter a valid 10-digit phone number">
            </div>

            <div class="input-group">
                <!-- <label for="message" class="form-label">Message</label> -->
                <textarea id="message" name="message" placeholder="Message" required></textarea>
            </div>

            <button type="submit" class="form-button">SEND MESSAGE</button>
        </form>
    </div>
</section>


<script>
// JavaScript to toggle FAQ answers (only one open at a time)
const faqItems = document.querySelectorAll('.faq-item');

faqItems.forEach((item) => {
    const question = item.querySelector('.faq-question');

    question.addEventListener('click', () => {
        // First, close all faq items
        faqItems.forEach((otherItem) => {
            if (otherItem !== item) {
                otherItem.classList.remove('active');
            }
        });
        // Then toggle the clicked one
        item.classList.toggle('active');
    });
});
</script>






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

<!-- footer -->
<?php include("include/footer.php");?>
<!-- end footer -->

</body>
</html>
