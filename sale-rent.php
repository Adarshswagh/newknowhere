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
    <link rel="stylesheet" href="css/sale-rent.css">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>


</head>

<style>
   .container {
  background-color: #050f17;
}

.business-loan {
  padding: 20px 20px;
}

.content-row {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: nowrap;
  gap: 30px;
}

.content-row.reverse {
  flex-direction: row-reverse;
}

.image-container {
  flex: 1;
  max-width: 640px;
}

.image-container img {
  width: 100%;
  height: auto;
  display: block;
}

.content {
  flex: 1;
  max-width: 562px;
  color: white;
}

.content h2 {
  color: #A8894D;
  font-family: 'Italiana', sans-serif;
  font-size: 40px;
  font-weight: 400;
  line-height: 1.3em;
}

.content p {
  font-size: 15px;
  text-align: left;
}

/* Responsive: maintain zig-zag layout in mobile too */
@media (max-width: 768px) {
  .content-row {
    flex-direction: column;
  }

  .content-row.reverse {
    flex-direction: column-reverse;
  }

  .content h2 {
    font-size: 26px;
    text-align: center;
  }

  .content p {
    font-size: 14px;
    text-align: center;
  }

  .image-container, .content {
    max-width: 100%;
  }
}

.section-divider {
  border: none;
  height: 3px;
  background-color: #A8894D; /* matches the gold accent */
  margin: 40px auto;
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
            <h2>Sale or Rent</h2>
            <p class="banner-bread">
                <a href="index.php">Home</a> &gt; 
                <a href="#">Sale or Rent</a>
            </p>
        </div>
    </div>
</section>
<!-- end banner -->



<!-- first section -->
<section class="premium-section section-hidden">
    <div class="premium-content">
        <h2>About Sale or Rent</h2>
        <p>
            Embrace complete digital transformation with our powerhouse digital marketing company. 
            One of Pune’s top digital marketing agencies, we provide all services – Branding, Marketing, 
            Advertising – that will propel your business towards success on full speed. 
            We fuel comprehensive Online Presence, from SEO, SMM, and web development to graphic design, 
            content, and email marketing.
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
        <a href="rentproject.php" ><button class="apply-btn">Rent property →</button></a>
        <a href="saleproject.php" ><button class="apply-btn">Sell property →</button></a>

    </div>

    <div class="property-selection-container">
        <img id="property-image" src="images/sale-rent.png" alt="Select an option" class="property-img">
    </div>

</section>

<!-- end -->

<!-- post guide section -->

<section class="post-guide-section section-hidden">
    <div class="post-guide-header">
        <h2 style=" color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 50px;
    font-weight: 400;
    line-height: 1.3em; color:#A8894D; font size: 20px;">How to post to get the most?</h2>
        <p>Selling/renting property is no more a challenge with knohwere. Renting / Selling a house has become easy with the internet and easier with us! We will handle the process of selling your property from start to finish. Follow these steps to begin your home selling journey.</p>
    </div>
    <div class="post-guide-grid">
        <div class="post-step">
            <img src="images/house (1).png" alt="Show off your property" >
            <h3 style="color:#A8894D; font-size: 20px;">Show off your property</h3>
            <p>Sign up or log in to knohwere and create a free property ad post with good pictures, detailed video, and other important information like the type, price, size, location, etc.</p>
        </div>
        <div class="post-step">
            <img src="images/assets.png" alt="Property Proposal">
            <h3 style="color:#A8894D; font-size: 20px;">Property Proposal</h3>
            <p>To attract buyers or renters, you have to put your best info forward. Jot down all the advantages and benefits of your property that the renter or buyer may want to avail.</p>
        </div>
        <div class="post-step">
            <img src="images/property.png" alt="Needful Negotiations">
            <h3 style="color:#A8894D; font-size: 20px;">Needful Negotiations</h3>
            <p>No one can sell your property better than you. Price is the most important factor. We suggest you inspect, negotiate, and seal the deal. Do Not Under-Price!</p>
        </div>
    </div>
</div>
<!-- post guide section end-->



<section class="container">

  <!-- Section 1 -->
  <section class="business-loan">
  <div class="content-row normal section-hidden">
      <div class="image-container">
        <img src="images/bannerabout.jpg" alt="Property View">
      </div>
      <div class="content">
        <h2>Let Us Show Off Your Property.</h2>
        <p>Millions of property buyers and renters check listings on Square Yards every day! We will highlight your property to them and if they find your property suitable, they can contact you immediately and directly. Tip: Clients love true info on listings.</p>
      </div>
    </div>
  </section>


  <hr class="section-divider">

  <!-- Section 2 -->
  <section class="business-loan">
  <div class="content-row reverse section-hidden">
      <div class="image-container">
        <img src="images/bannerabout.jpg" alt="Property Listing">
      </div>
      <div class="content">
        <h2>Create a Killer Property Listing.</h2>
        <p>For Rocket Fast Deals, create a listing with every detail, like the property type, your expected price and other advantages of the property. Property pictures are very important. Tip: Listings with at least 5 great pics get maximum enquiries.</p>
      </div>
    </div>
  </section>

  <hr class="section-divider">

  <!-- Section 3 -->
  <section class="business-loan">
  <div class="content-row normal section-hidden">
      <div class="image-container">
        <img src="images/bannerabout.jpg" alt="Client Proposal">
      </div>
      <div class="content">
        <h2>Your Property. Your Proposal.</h2>
        <p>When an interested party finds your listed property truly suitable and shows deep interest to buy or rent it out, we will share the client’s detail with you over phone or email instantly. Tip: When property owners make proposals, deals happen faster.</p>
      </div>
    </div>
  </section>

  <hr class="section-divider">

  <!-- Section 4 -->
  <section class="business-loan">
  <div class="content-row reverse section-hidden">
      <div class="image-container">
        <img src="images/bannerabout.jpg" alt="Negotiation">
      </div>
      <div class="content">
        <h2>Showing, Negotiating, Closing.</h2>
        <p>We know that no one can sell your property better than you. After all, only you know everything that a buyer or renter needs to know to close the deal. Its time for site inspections, negotiations, paperwork checks and deal closure. Tip: Don’t under-price.</p>
      </div>
    </div>
  </section>

  <hr class="section-divider">

  <!-- Section 5 -->
  <section class="business-loan">
  <div class="content-row reverse section-hidden">
      <div class="image-container">
        <img src="images/bannerabout.jpg" alt="Sell or Rent">
      </div>
      <div class="content">
        <h2>Sell or Rent with Knowhere</h2>
        <p>Our property listing site allows you to post property profiles ad for free or you can sell property online and close deals at lightning speed! So, what are you waiting for? Just follow these simple steps, and voila, your property is sold or rented.</p>
      </div>
    </div>
  </section>

</section>


<!-- end -->






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

<!-- end call to action -->



 <!-- Enquire Button -->
 <div id="enquireButtonContainer">
    <button id="enquireButton">
        Book A Demo
    </button>
</div>

<!-- Enquiry Modal -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
<script type="text/javascript">
   (function(){
      emailjs.init({
        publicKey: "T0yb7stlayE2PO5Hv",
      });
   })();
</script>

<div id="enquiryModal" style="display:none;">
    <div class="form-container" style="position: relative; padding: 20px; background: #eaeaea; border-radius: 8px;">
        <span id="closeModal" style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 20px;">&times;</span>
        <h3>Enquiry Form</h3>
        
        <!-- Feedback Message -->
        <div id="feedbackMessage" style="color: #007bff; font-size: 14px; margin-bottom: 10px; display: none;"></div>
        
        <form id="enquiryForm" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="contact" placeholder="Your Contact Number" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</div>

<script>
document.getElementById("enquireButton").onclick = function() {
    document.getElementById("enquiryModal").style.display = "block";
};

document.getElementById("closeModal").onclick = function() {
    document.getElementById("enquiryModal").style.display = "none";
    document.getElementById("feedbackMessage").style.display = "none";
};

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('enquiryForm');
    const feedback = document.getElementById('feedbackMessage');

    if (form) {
        form.addEventListener('submit', function (event) {
            event.preventDefault();

            const formData = new FormData(form);

            fetch('sale_rent_demo.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(result => {
                feedback.style.display = 'block';
                feedback.innerText = result;

                if (result.toLowerCase().includes("success")) {
                    form.reset();
                    setTimeout(() => {
                        document.getElementById("enquiryModal").style.display = "none";
                        feedback.style.display = "none";
                    }, 2000);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                feedback.style.display = 'block';
                feedback.innerText = 'Something went wrong. Please try again.';
            });
        });
    }
});
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
