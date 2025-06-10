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

    <link rel="stylesheet" href="css/career.css">
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>'
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


</head>


<style>
    .job-section {
  display: flex;
  flex-direction: column;
  gap: 2rem;
  padding: 2rem;
  max-width: 1100px;
  margin: auto;
  margin-top:50px;
}

.job-card {
  background: #a8894d;
  border-radius: 15px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
  padding: 2rem;
  transition: transform 0.3s;
}

.job-card:hover {
  transform: translateY(-5px);
}

.job-card h3 {
  margin-bottom: 1rem;
}

.job-card p {
  color: white;
  margin-bottom: 1.5rem;
}

.read-more {
  background: linear-gradient(45deg,rgb(30, 19, 11),rgb(31, 29, 20));
  border: none;
  border-radius: 25px;
  padding: 0.6rem 1.5rem;
  color: white;
  font-weight: bold;
  cursor: pointer;
  transition: background 0.3s;
}

.read-more:hover {
  opacity: 0.9;
}

/* Responsive */
@media (max-width: 768px) {
  .job-section {
    padding: 1rem;
  }

  .job-card {
    padding: 1.5rem;
  }
}


.life-at-careerly {
  display: flex;
  flex-wrap: wrap;
  padding: 4rem 2rem;
  gap: 3rem;
  max-width: 1200px;
  margin: auto;
  align-items: flex-start;
}

.left-content {
  flex: 1;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 2rem;
}

.feature {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.feature img {
  width: 40px;
  margin-bottom: 1rem;
}

.feature h4 {
  color: #a8894d;
  font-size: 1.1rem;
  margin-bottom: 0.5rem;
}

.feature p {
  color: white;
  font-size: 0.95rem;
  line-height: 1.5;
}

.right-content {
  flex: 1;
  max-width: 500px;
}

.right-content h2 {
  font-size: 2rem;
  margin-bottom: 1rem;
  color: #a8894d;
}

.right-content h2 span {
  color: #a8894d;
}

.right-content p {
  margin-bottom: 1rem;
  color: white;
  font-size: 1rem;
  line-height: 2.0;
}

.learn-more {
  background-color: #a8894d;
  color: white;
  border: none;
  padding: 0.8rem 2rem;
  font-size: 1rem;
  border-radius: 30px;
  cursor: pointer;
  transition: background 0.3s ease;
}

.learn-more:hover {
  background-color:rgb(255, 255, 255);
  color:black;
}

/* Responsive */
@media (max-width: 992px) {
  .life-at-careerly {
    flex-direction: column;
  }

  .left-content {
    grid-template-columns: 1fr;
  }

  .right-content {
    max-width: 100%;
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
            <h2>Career</h2>
            <p class="banner-bread">
                <a href="index.php">Home</a> &gt; 
                <a href="#">Career</a>
            </p>
        </div>
    </div>
</section>
<!--end banner -->




 <section class="life-at-careerly">
  <div class="left-content">
    <div class="feature">
      <img src="images/office.gif" alt="Office Icon" />
      <h4>Large Beautiful Office</h4>
      <p>Enjoy a comfortable office environment with the most modern and stylish furnishing.</p>
    </div>
    <div class="feature">
      <img src="images/worker.gif" alt="Co-workers Icon" />
      <h4>Great Co-Workers</h4>
      <p>Work with some of the best talent in the industry and build strong networks with them.</p>
    </div>
    <div class="feature">
      <img src="images/location.gif" alt="Location Icon" />
      <h4>Easy Location</h4>
      <p>Commute easily to work at your convenience and enjoy compensation for transport costs.</p>
    </div>
    <div class="feature">
      <img src="images/book.gif" alt="Education Icon" />
      <h4>Education Opportunities</h4>
      <p>Get resources for developing your skills and knowledge to kickstart your career.</p>
    </div>
  </div>

  <div class="right-content">
    <h2>Your Life At <span>Knowhere</span></h2>
    <p>At Knowhere we believe in working together and working hard. With over 800,000 happy clients, we are looking for dynamic and creative individuals who are willing to dedicate themselves to providing innovative products and services for our clients.</p>
    <p>At Knowhere, you’ll unlock your true potential, connect with top industry talent, enjoy annual international picnics, and benefit from a range of exciting perks.</p>
    <button class="learn-more">Learn More</button>
  </div>
</section>


<!-- career section -->


<section class="job-section">
  <div class="job-card">
    <h3>Community Manager</h3>
    <p>As a community manager, you will be working with a small and agile team made up of talented people from all around the world. We work with git, chat…</p>
    <button class="read-more">Read More</button>
  </div>

  <div class="job-card">
    <h3>Video Editor</h3>
    <p>As a video editor, you will be working with a small and agile team made up of talented people from all around the world. We work with git, chat on…</p>
    <button class="read-more">Read More</button>
  </div>

  <div class="job-card">
    <h3>Online Content Creator</h3>
    <p>As an online content creator, you will be working with a small and agile team made up of talented people from all around the world. We work with…</p>
    <button class="read-more">Read More</button>
  </div>
</section>

 <!-- end career section -->



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