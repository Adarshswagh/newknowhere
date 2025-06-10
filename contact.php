<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/knowcontact.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">




    <title>Document</title>
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


/* ctc */

/* Main CTA Section */
#cta-main {
    padding: 120px 30px 80px;
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
            <h2>Contact Us</h2>
            <p class="banner-bread">
                <a href="index.php">Home</a> &gt; 
                <a href="#">Contact Us</a>
            </p>
        </div>
    </div>
</section>

<!--end banner  -->

 <!-- get in touch -->


 <section class="contact-section">
    <div class="contact-container">
    <div class="form-container">
            <form id="contactForm" style="text-align:center">
                <input type="text" name="name" placeholder="First Name" required>
                <input type="text" name="contact" placeholder="contact" required>
                <input type="email" name="email" placeholder="Email" required class="email-group">
                <textarea name="message" placeholder="Message" required></textarea>
                <button type="submit" style="margin-top:30px">SEND MESSAGE</button>
            </form>
        </div>

    <!-- Thank You Modal -->
    <div id="thankYouModal" style="display:none; position:fixed; top:20%; left:50%; transform:translate(-50%, -50%); background:#d4edda; padding:20px; border-radius:8px; box-shadow:0 4px 8px rgba(0,0,0,0.2); z-index:1000;">
        <span id="closeThankYouModal" style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 20px;">&times;</span>
        <h3>Thank You!</h3>
        <p style="text-align: left; color: #050f17; font-size: 14px; font-family: 'Lexend', Sans-serif; max-width: 700px;">
            Thank you for your interest. We will get back to you soon.
        </p>
    </div>

            <script>
                        document.getElementById("contactForm").onsubmit = function(event) {
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
                            // Close the form and show the Thank You modal
                            document.getElementById("contactForm").reset();  // Reset the form fields
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

                // Close Thank You modal and reset the form
                document.getElementById("closeThankYouModal").onclick = function() {
                    document.getElementById("thankYouModal").style.display = "none";
                    document.getElementById("contactForm").reset(); // Reset the form when closing the modal
                };

        </script>


        <div class="contact-info">
            <h2>Get In Touch</h2>
            <p style="color: white;">Ready to make your real estate dreams a reality? Get in touch with Knowhere for trusted guidance, tailored solutions, and a seamless property experience.</p>
            <ul>
            <li style="color:#fff;">
                <i class="fas fa-map-marker-alt"></i>
                <a href="https://maps.app.goo.gl/2Sxk7Gus97hJMNT7A" target="_blank" style="color:#fff; text-decoration:none;">
                    Wakad, Pimpri-Chinchwad, Pune 411057
                </a>
            </li>

                <li style="color:#fff;">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:info@knowhere.in" style="color:#fff; text-decoration:none;">
                        info@knowhere.in
                    </a>
                </li>
                <li style="color:#fff;">
                    <i class="fas fa-phone"></i>
                    <a href="tel:+919112211291" style="color:#fff; text-decoration:none;">
                        +91 91122 11291
                    </a>
                </li>
            </ul>

            <div class="social-icon facebook">
             <a href="https://www.facebook.com/knowhererealestate/">   <i class="fab fa-facebook-f"></i></a>
            </div>
            <div class="social-icon twitter">
             <a href="https://www.instagram.com/knowhere_realestate/">   <i class="fab fa-instagram"></i></a>
            </div>
            

        </div>

        

    </div>
</section>


 <!-- end get iin touch -->

 <!-- map -->
 <div class="map-container">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121059.85175304397!2d73.69835373134883!3d18.52346201558182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9c942ac6da1%3A0xaf0c3b2d5db3b890!2sKnowhere%20Real%20Estate%20Pvt.Ltd.!5e0!3m2!1sen!2sin!4v1729160471039!5m2!1sen!2sin" width="1400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
        width="100%"
        height="450"
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

  <!-- end map -->




   <!--	Footer   start-->
 <?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>