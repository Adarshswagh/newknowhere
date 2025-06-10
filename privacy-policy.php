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
    <link rel="stylesheet" href="css/knowprivacy.css">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>

 <!-- end navbar -->

 <?php include("include/header.php");?>
  <!-- banner -->
  <section id="banner-main">
    <div class="banner1" >
        <div class="banner-content">
            <h2>Privacy Policy</h2>
            <p style="text-align:center;"><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Privacy Policy</a></p>
        </div>
    </div>
</section>
<br>

<!--end banner  -->
</head>
<body>
<div class="privacy-container">
        <h1 class="privacy-title">Privacy Policy</h1>
        <h2 class="company-title">Knowhere Property Consultancy</h2>

        <p class="section-text">At Knowhere, we prioritize your privacy and are committed to handling personal information with care and responsibility. This Privacy Policy explains how we collect, use, and protect the information we gather from our clients and website visitors.</p>

        <h3 class="section-title">Acceptance of Use</h3>
        <p class="section-text">By accessing this Site, you consent to our collection, use, and storage of your personal information as outlined in this Privacy Policy.</p>

        <h3 class="section-title">Information We Collect</h3>
        <p class="section-text">We collect information necessary to provide you with comprehensive real estate services, including:</p>
        <ul class="section-text">
            <li><strong>Personal Information:</strong> Name, contact information, property preferences, and other relevant details.</li>
            <li><strong>Property Data:</strong> Information about the properties you are interested in or currently own.</li>
            <li><strong>Browsing Data:</strong> Technical data about your interactions with our website to improve user experience and offer relevant content.</li>
        </ul>

        <h3 class="section-title">Use of Personal Information</h3>
        <p class="section-text">Your personal information is used to deliver our services, such as property searches, valuations, and legal documentation assistance. We also use this information to communicate with you regarding potential properties, respond to inquiries, and provide updates on our services and promotions.</p>

        <h3 class="section-title">Information Sharing</h3>
        <p class="section-text">We do not sell or rent your personal information. Your data is only shared with third parties essential for our services, such as legal consultants or assessors, or as required by law. We ensure these parties are committed to protecting your data.</p>

        <h3 class="section-title">Cookies and Tracking</h3>
        <p class="section-text">We use cookies to personalize your browsing experience and gather aggregated site usage data. Cookies help us enhance the functionality and effectiveness of our site. You can manage cookie settings in your browser preferences.</p>

        <h3 class="section-title">Security Measures</h3>
        <p class="section-text">We employ industry-standard security measures to protect your information from unauthorized access. However, no online transmission is fully secure, and we encourage clients to use caution when sharing sensitive information online.</p>

        <h3 class="section-title">Your Rights</h3>
        <p class="section-text">You have the right to access, update, or request deletion of your personal information. Please contact us at [Your Contact Email] if you wish to exercise these rights.</p>

        <h3 class="section-title">Policy Updates</h3>
        <p class="section-text">Knowhere reserves the right to update this Privacy Policy periodically. Any changes will be posted on this page, and we encourage you to review it regularly to stay informed.</p>

        <h3 class="section-title">Contact Us</h3>
        <p class="section-text">If you have any questions or concerns regarding this Privacy Policy, please contact us at [Your Contact Email]. We are committed to addressing your privacy inquiries and ensuring transparency in our practices.</p>
    </div>


     <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>
