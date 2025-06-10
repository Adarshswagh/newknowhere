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
    <link rel="stylesheet" href="css/rent.css">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>


</head>
<style>
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
    gap: 20px; 
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




/*end  get in touch */



/* business loan */

/* Default styles (for desktop view) */
.business-loan {
    display: flex;
    align-items: center;
    max-width: 100%;
    background-color: #050f17;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    /* border-radius: 8px; */
    overflow: hidden;
    width: 100%;
    margin: 20px;
    padding: 50px 100px;
    padding-top: 100px;
}

.image-container {
    flex: 1;
}

.image-container img {
    width: 80%;
    height: 100%;
    object-fit: cover;
}

.content {
    flex: 1;
    padding: 20px;
}

.content h2 {
    font-size: 40px;
    color: #A8894D;
    margin: 0 0 10px;
}



button {
    padding: 12px 24px;
    background-color: #ff9900;
    color: #ffffff;
    border: none;
    /* border-radius: 4px; */
    cursor: pointer;
    font-size: 14px;
    font-weight: bold;
}

/* button:hover {
    background-color: #e68a00;
} */

/* Responsive Styles for Tablet */
@media (max-width: 1024px) {
    .business-loan {
        flex-direction: column;
        padding: 30px 50px;
        text-align: center;
    }

    .image-container {
        width: 100%;
        height: 300px;
        padding:20px;
    }

    .content h2 {
        font-size: 30px;
    }

    .content p {
        font-size: 14px;
    }

    .checklist {
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .checklist .list-left, .checklist .list-right {
        display: inline-block;
        text-align: left;
        color:#fff;
    }
}

/* Responsive Styles for Mobile */
@media (max-width: 768px) {
    .business-loan {
        flex-direction: column;
        padding: 20px;
        text-align: center;
    }

    .image-container {
        width: 100%;
        height: 250px;
    }

    .content h2 {
        font-size: 24px;
    }

    .content p {
        font-size: 13px;
    }

    .checklist {
        display: block;
        text-align: left;
        padding-left: 20;
    }

    .checklist .list-left, .checklist .list-right {
        display: block;
    }

    button {
        width: 100%;
        padding: 12px;
        font-size: 16px;
    }
}

@media (max-width: 768px) {
    .how-it-works-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px; /* Space between items */
        padding: 20px 15px; /* Some padding around */
    }

    .how-it-works-item {
        width: 100%;
        max-width: 500px;
        text-align: center;
        padding: 15px;
        box-sizing: border-box;
        border: 1px solid #ffffff14; /* Optional: light border */
        border-radius: 8px;
        background-color: #0a0a0a; /* Optional: match theme */
    }

    .how-it-works-item h3 {
        font-size: 18px;
        margin-bottom: 10px;
        color: #A8894D;
    }

    .how-it-works-item p {
        font-size: 14px;
        color: #ffffff;
        line-height: 1.5;
    }

    .how-it-works-item .icon {
        font-size: 32px;
        color: #A8894D;
        margin-bottom: 10px;
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

/* animation */

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


/* Add to your existing CSS */
.card1, .how-it-works-item, .faq-question {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card1:hover, .how-it-works-item:hover {
  transform: translateY(-5px);
}

.faq-question:hover {
  transform: translateX(5px);
}

.home-loan-button, .cta-button {
  transition: all 0.3s ease;
}

.home-loan-button:hover, .cta-button:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}


#rent-benefits-section {
  padding: 40px 20px;
  background-color: #fff;
  text-align: center;
}

.rent-benefits-title {
  color: #A8894D;
  font-family: 'lexend', sans-serif;
  font-size: 48px;
  /* font-weight: 400; */
  line-height: 1.3;
  margin-bottom: 40px;
  text-align:center;
}

.benefits-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  justify-content: center;
  max-width: 1200px;
  margin: 0 auto;
}

.benefit-card {
  background: #212529;
  padding: 25px 20px;
  border-radius: 12px;
  width: 250px;
  text-align: center;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
  transition: transform 0.3s ease;
}

.benefit-card:hover {
  transform: translateY(-5px);
}

.benefit-icon img {
  width: 60px;
  height: auto;
}

.benefit-title {
  font-size: 20px;
  margin-top: 15px;
  margin-bottom: 10px;
  color: #A8894D;
  
}

.benefit-description {
  font-size: 16px;
  color: white;
  text-align:center;
}

/* Responsive Styling */
@media (max-width: 768px) {
  .benefits-grid {
    flex-direction: column;
    align-items: center;
  }

  .benefit-card {
    width: 90%;
  }

  .rent-benefits-title {
    font-size: 36px;
  }
}


.rent-agreement-section {
  background-color: #050f17;
  padding: 40px 20px;
  color: #fff;
}

.rent-agreement-wrapper {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 30px;
  max-width: 1200px;
  margin: 0 auto;
}

.rent-image img {
  width: 100%;
  height: auto;
  max-height: 400px;
  object-fit: cover;
  border-radius: 10px;
}

.rent-image {
  flex: 1 1 45%;
}

.rent-content {
  flex: 1 1 50%;
}

.rent-content h2 {
  color: #A8894D;
  font-family: 'Italiana', sans-serif;
  font-size: 48px;
  font-weight: 400;
  line-height: 1.3;
  margin-bottom: 20px;
}

.rent-content p {
  margin-bottom: 16px;
  font-size: 16px;
  line-height: 1.6;
}

.rent-list {
  list-style-type: disc;
  padding-left: 20px;
  margin-bottom: 16px;
}

.rent-button {
  background-color: #A8894D;
  color: #fff;
  padding: 12px 25px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-weight: bold;
  font-size: 16px;
  transition: background 0.3s ease;
}

.rent-button:hover {
  background-color: #8a703b;
}

/* Responsive Styles */
@media (max-width: 991px) {
  .rent-agreement-wrapper {
    flex-direction: column;
  }

  .rent-image,
  .rent-content {
    flex: 1 1 100%;
  }

  .rent-content h2 {
    font-size: 36px;
  }

  .rent-content p,
  .rent-list {
    font-size: 15px;
  }
}

.how-it-works-section {
    background-color: #050f17;
    padding: 0px 10px;
    text-align: center;
    font-family: 'lexend', sans-serif;
}


.faq-section {
    background-color: #050f17;
    color: #ffffff;
    padding: 2px 20px;
    font-family: Arial, sans-serif;
    padding-top: 70px;
}

.faq-content {
    display: flex;
    flex-wrap: wrap;
    max-width: 1400px;
    margin: 0 auto;
    gap: 50px;
    align-items: center;
    justify-content: center;
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
            <h2>Rent Agreement</h2>
            <p class="banner-bread" style = "text-align:center;">
                <a href="index.php">Home</a> &gt; 
                <a href="#" style = "text-align:center;">Rent Agreement</a>
            </p>
        </div>
    </div>
</section>

<!--  rent page about  -->




<section class="rent-agreement-section section-hidden" style="background-color: #050f17; padding: 40px 20px;">
  <div class="rent-agreement-wrapper">
    <div class="rent-image">
      <img src="images/rent.jpg" alt="People in a business setting">
    </div>
    <div class="rent-content">
      <h2>About Rent Agreement</h2>
      <p>Rent Agreement Just as a well-designed bathroom offers comfort and style, a meticulously crafted rent agreement provides security and clarity for both parties. This legally binding document outlines the essential terms of a rental arrangement, including:</p>
      <ul class="rent-list">
        <li>Tenant and landlord information</li>
        <li>Property details</li>
        <li>Payment terms and security deposit</li>
        <li>Tenancy duration</li>
      </ul>
      <button id="consultationButton" class="rent-button">APPLY FOR RENT AGREEMENT →</button>
    </div>
  </div>
</section>

<!-- end rent page aboutb -->


        
        <!-- Button -->
        <!-- <a href="#" class="start-button">Begin Your Rent Agreement Process</a> -->
    </div>
</div>
+
<!-- how it works section -->

<section class="how-it-works-section section-hidden">
    <h2 style=" color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 50px;
    font-weight: 400;
    line-height: 1.3em;">How it Works</h2>
    <p style = "text-align:center;">Typically drafted on stamp paper, these agreements (also called rent or lease deeds) cover both residential and commercial properties. They're often set for 11 months to avoid legal registration requirements.A comprehensive rent agreement forms the foundation for a harmonious landlord-tenant relationship, ensuring a smooth and pleasant rental experience for all involved.</p>
    <!-- <p style = "text-align:center;">A comprehensive rent agreement forms the foundation for a harmonious landlord-tenant relationship, ensuring a smooth and pleasant rental experience for all involved.</p> -->
    <div class="how-it-works-container">
        <div class="how-it-works-item">
            <div class="icon-container">
                <img src="images/h1.png" alt="Step 1 Icon"> <!-- Replace with actual icon URL -->
            </div>
            
            <p style="text-align: center;"> Fill in the details online and make the payment</p>
        </div>
        <div class="how-it-works-item">
            <div class="icon-container">
                <img src="images/h2.png" alt="Step 2 Icon"> <!-- Replace with actual icon URL -->
            </div>
            <p style="text-align: center;">Digitally sign the agreement at your convenience</p>
        </div>
        <div class="how-it-works-item">
            <div class="icon-container">
                <img src="images/h3.png" alt="Step 3 Icon"> <!-- Replace with actual icon URL -->
            </div>
            <p style="text-align: center;">Get an e-stamped agreement in your mail instantly</p>
        </div>
    </div>
</section>








<!-- para -->

<div class="rent-agreement-section" style="padding:50px 100px;">
  <h3 style="font-size: 2.0em;">Why is a rent agreement necessary?</h3>
  <p>
  A registered rent agreement is vital for protecting property, providing legal validation for rental arrangements. This document is often required for official and financial transactions, making it essential for both landlords and tenants.
  </p>
  <p>
  According to the Registration Act of 1908, leases longer than 11 months must be registered, while those under 11 months can be notarized.  </p>
  <p>
  To complete registration, both parties must be present at the sub-registrar’s office. If one party cannot attend, they can authorize the other to sign on their behalf using a Power of Attorney, allowing the attorney to finalize the agreement.
  </p>

  <h3 style="font-size: 2.0em;">Registered Rent Agreement</h3>
  <p>
    Property is a precious asset, and every step should be taken to safeguard it. Formally registering an agreement provides legal validation for the setup. Moreover, a registered rent agreement is often required for various official and financial transactions, making it an essential document for both parties involved in the rental transaction. The Registration Act, 1908, mandates the lease out of all properties for more than 11 months to be legally registered. Properties rented for less than 11 months may not require registration, but can be notarised. Once the draft agreement is prepared, the landlord and the tenant must be present at the sub-registrar’s office. If the two can’t be present simultaneously, the present party can sign a Power of Attorney. This grants the attorney the right to close the agreement.
  </p>
  <h3 style="font-size: 2.0em;">Terms & Conditions for Rent Agreement</h3>
  <p>
  A rent agreement is a crucial legal document that outlines the terms and conditions governing the relationship between a landlord and tenant. It typically includes essential details such as the monthly rent amount, the duration of the lease, and any security deposits required. The agreement specifies the intended use of the property, whether residential or commercial, and may include insurance requirements for commercial properties. Other important elements often covered are maintenance responsibilities, utility payments, and parking arrangements. The document also outlines the procedures for terminating the agreement, including both natural expiration and early termination scenarios. To ensure mutual understanding and legal binding, the agreement concludes with a signature clause for both parties. By clearly defining these terms, a well-crafted rent agreement helps prevent misunderstandings and provides a solid foundation for a harmonious landlord-tenant relationship throughout the duration of the lease.  </p>
</div>


<!-- key benefits -->
<section id="rent-benefits-section section-hidden">
  <h2 class="rent-benefits-title">Key Benefits of a Rent Agreement</h2>
  
  <div class="benefits-grid">
    <div class="benefit-card">
      <div class="benefit-icon"><img src="images/compliant.png" alt="Legal Safeguard Icon"></div>
      <h3 class="benefit-title">Legal Safeguard</h3>
      <p class="benefit-description">Protects landlord and tenant rights if disputes arise.</p>
    </div>
    
    <div class="benefit-card">
      <div class="benefit-icon"><img src="images/terms-and-conditions.png" alt="Defined Terms Icon"></div>
      <h3 class="benefit-title">Defined Terms</h3>
      <p class="benefit-description">Clearly outlines rent, payment, and deposit terms.</p>
    </div>
    
    <div class="benefit-card">
      <div class="benefit-icon"><img src="images/house.png" alt="Rental Period Icon"></div>
      <h3 class="benefit-title">Rental Period</h3>
      <p class="benefit-description">Usually for 11 months to avoid legal registration.</p>
    </div>
    
    <div class="benefit-card">
      <div class="benefit-icon"><img src="images/online-order.png" alt="Online Process Icon"></div>
      <h3 class="benefit-title">Easy Online Process</h3>
      <p class="benefit-description">Services like Knowhere+ enable quick, digital agreements.</p>
    </div>
  </div>
</section>

   <!-- features end -->

<!-- faq section -->

<section class="faq-section slide-in-left">
    <div class="faq-content">
        <div class="faq-text">
            <h2>Your Common Queries <span>Answered</span><br>with Additional FAQs</h2>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel turpis sit amet turpis malesuada imperdiet. Donec facilisis urna sit amet erat consectetur, in tincidunt ligula malesuada.</p> -->
            <div class="faq-items">
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        How long is a typical rent agreement valid?
                        <span class="faq-icon-right">+</span>
                    </div>
                    <div class="faq-answer">Rent agreements are typically drafted for 11 months to avoid legal registration requirements.</div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        What are the key elements of a rent agreement?
                        <span class="faq-icon-right">+</span>
                    </div>
                    <div class="faq-answer"> <ul class="checklist" style="font-size:16px;color:#fff;padding-left:20px;">
                        <ul>
                            <div class="list-left">
                                <li>  Rent amount</li>
                                <li> Lease duration</li>
                                <li> security deposit</li>
                                <li> Property usage (residential or commercial)</li>
                                <li> Insurance details (for commercial properties)</li>
                                <li> Maintenance and repair responsibilities</li>
                                <li> Property usage (residential or commercial)</li>
                                <li> Signature clause</li>
                            </div>
                        </ul>
                    </div>
                </div>
                 
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        Is it necessary to register a rent agreement?                       
                        <span class="faq-icon-right">+</span>
                    </div>
                    <div class="faq-answer">The Registration Act, 1908 mandates that leases for more than 11 months must be legally registered. Agreements for less than 11 months may not require registration but can be notarized.</div>
                </div>
               
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        How can I create an online rent agreement?
                        <span class="faq-icon-right">+</span>
                    </div>
                    <div class="faq-answer">You can create an online rent agreement by following these steps:
                        <ul>
                            <div class="list-left">
                                <li>Fill in the required details online</li>
                                <li> Make the necessary payment</li>
                                <li> Digitally sign the agreement at your convenience</li>
                                <li> Receive an e-stamped agreement via email</li>
                            </div>
                        </ul>
                    </div>

                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        How is the termination policy typically addressed in a rent agreement?   
                        <span class="faq-icon-right">+</span>
                    </div>
                    <div class="faq-answer">The termination policy should elaborate on all possible scenarios for ending the agreement, including natural completion of the lease term and conditions for early termination.</div>
                </div>
            </div>
        </div>
        <div class="faq-image">
            <img src="images/rent1.jpg" alt="Customer Support" />
        </div>
    </div>
</section>
<!-- end faq -->









<!-- call to action -->
<section id="cta-main" class="section-hidden">
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
<!-- end enquire button -->




<!-- Enquiry Modal -->

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

            <!-- New Location Field -->
            <input type="text" id="location" name="location" placeholder="Your Location" required>
            <small class="error-message" id="locationError"></small>

            <!-- CAPTCHA Section -->
            <div style="display: flex; align-items: center; gap: 10px;">
                <span id="captchaQuestion" style="font-size: 16px; font-weight: bold; width: 15%;"></span>
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

        const location = document.getElementById("location").value.trim();
        if (location === "") { showError("locationError", "Location is required"); isValid = false; } 
        else { hideError("locationError"); }

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
        fetch('forms/rent_submit.php', {
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
                generateCaptcha();
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


   <script>
    function toggleAnswer(element) {
    // Toggle the display of the answer
    const answer = element.nextElementSibling;
    const icon = element.querySelector(".faq-icon-right");

    if (answer.style.display === "block") {
        answer.style.display = "none";
        icon.textContent = "+"; // Change to plus icon
    } else {
        answer.style.display = "block";
        icon.textContent = "-"; // Change to minus icon
    }
}

   </script>
</body>
</html>

