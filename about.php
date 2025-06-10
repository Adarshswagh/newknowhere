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
    <title>Knowhere</title>

    <link rel="stylesheet" href="css/knowabout.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>


</head>

<style>
.stats-section {
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 50px 0;
    background-color: #050f17;
    color: #e8e8e8;
    flex-wrap: wrap;
}

/* Keep default 4 per row on desktop using margin */
.stat-box {
    flex: 1 1 22%; /* approx. 4 in one line with spacing */
    text-align: center;
    margin: 10px 10px;
    padding: 20px;
    border: 1px solid #A8894D;
    box-shadow: 0 4px 20px rgba(232, 232, 232, 0.2);
    transition: transform 0.3s, box-shadow 0.3s;
    background: linear-gradient(145deg, #050F17, #050F17); 
}

/* Tablet view adjustments */
@media (max-width: 768px) {
    .stat-box {
        flex: 1 1 45%; /* ✅ 2 per row */
    }

    .stat-box h1 {
        font-size: 40px;
    }

    .stat-box p {
        font-size: 16px;
    }
}

/* Small mobile view adjustments */
@media (max-width: 480px) {
    .stat-box {
        flex: 1 1 45%; /* ✅ still 2 per row */
    }

    .stat-box h1 {
        font-size: 32px;
    }

    .stat-box h1 span {
        font-size: 16px;
        top: -8px;
    }

    .stat-box p {
        font-size: 14px;
    }
}

    

/* Responsive for tablets and below */
@media (max-width: 768px) {
    .about-section .content {
        flex-direction: column;
        align-items: center;
    }

    .about-section .text {
        text-align: center;
    }

    .checklist {
        flex-direction: column;
        align-items: center;
    }

    .checklist .list-left,
    .checklist .list-right {
        width: 100%;
        text-align: left;
    }

.image img {
        width: 450px;
        padding: 18px;
    }
}

/* ctc */

/* Main CTA Section */
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

.vision-mission-section .image-box {
    width: 35%;
    height: 315px;
    background-image: url('images/medium-shot-man-working-as-real-estate-agent.jpg');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}
/* ctc */
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
            <h2>About Us</h2>
            <p class="banner-bread">
                <a href="index.php">Home</a> &gt; 
                <a href="#">About Us</a>
            </p>
        </div>
    </div>
</section>

<!--end banner  -->

<!-- details -->
<section class="about-section" id="about-section" style = "padding-bottom:0px;">
    <div class="content">
        <div class="text">
            <h1 class="animate h1-animation">About Knowhere</h1>
            <p class="animate p-animation">At Knowhere, we prioritize your unique needs, providing tailored solutions and fostering lasting client relationships. Our commitment to transparency, integrity, and professionalism has established us as one of the industry’s most trusted consultants.</p>
            <ul class="checklist">
                <div class="list-left">
                    <li class="animate li-animation" style="--delay: 1;"><span>✔</span> Turning Dreams into Reality</li>
                    <li class="animate li-animation" style="--delay: 1;"><span>✔</span> Industry Leadership</li>
                    <li class="animate li-animation" style="--delay: 1;"><span>✔</span> Lasting Relationships</li>
                    <li class="animate li-animation" style="--delay: 1;"><span>✔</span> Client-Centered Approach</li>
                </div>
                <div class="list-right">
                    <li class="animate li-animation" style="--delay: 1;"><span>✔</span> Transparency and Trust </li>
                    <li class="animate li-animation" style="--delay: 1;"><span>✔</span> Trusted Property Consultant</li>
                    <li class="animate li-animation" style="--delay: 1;"><span>✔</span> Core Values</li>
                    <li class="animate li-animation" style="--delay: 1;"><span>✔</span> Experienced Professionals</li>
                </div>
            </ul>
        </div>
        <div class="images">
            <div class="image animate img-animation">
                <img src="./images/aboutmain.jpg" alt="Mansion Interior 1">
            </div>
            
        </div>
    </div>
</section>


 <!-- end details -->


 <!-- counter -->
 <section class="stats-section" style= "margin-top:70px;">
  <div class="stat-box">
      <h1 class="count" data-target="500">0+</h1>
      <p style = text-align:center;>Happy Clients</p>
  </div>
  <div class="stat-box">
      <h1 class="count" data-target="1000">0</h1>
      <p style = text-align:center;>Projects</p>
  </div>
  <div class="stat-box">
      <h1 class="count" data-target="50000">0+</h1>
      <p style = text-align:center;>Sqft Sold</p>
  </div>
  <div class="stat-box">
      <h1 class="count" data-target="4">0+</h1>
      <p style = text-align:center;>Years Experience</p>
  </div>
</section>


<script>
   document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".count");

    counters.forEach(counter => {
        const target = +counter.getAttribute("data-target"); // Target value from data attribute
        const speed = 200; // Speed factor for animation

        const updateCount = () => {
            const current = +counter.innerText.replace("+", ""); // Remove "+" to handle number logic
            const increment = Math.ceil(target / speed); // Increment value per step

            if (current < target) {
                counter.innerText = current + increment + "+"; // Append "+" during animation
                setTimeout(updateCount, 10); // Recursively call to continue incrementing
            } else {
                counter.innerText = target + "+"; // Ensure "+" remains when animation completes
            }
        };

        updateCount(); // Start the counter animation
    });
});


    </script>


  <!-- end counter -->

  <!-- vision & mission -->
<section class="vision-mission-section" style = Padding-top:50px;>
    <div class="container1">
        <div class="section-header">
            <div class="section-title">
                <h2 class="animate-title">Vision & Mission</h2>
            </div>
        </div>
        <div class="content">
            <div class="image-box animate-image"></div>
            <div class="text-boxes">
                <div class="text-box animate-text">
                    <h3 class="animate-h3">Vision</h3>
                    <p class="animate-p">To be a leading real estate consultancy, known for exceptional client service, continuous innovation, and adapting to evolving client needs</p>
                    <ul>
                        <li class="animate-li"><span>&#10003;</span> Adaptability</li>
                        <li class="animate-li"><span>&#10003;</span> Value-Added Services</li>
                        <li class="animate-li"><span>&#10003;</span> Sustainability</li>
                        <li class="animate-li"><span>&#10003;</span> Innovative Solutions</li>
                    </ul>
                </div>
                <div class="text-box animate-text">
                    <h3 class="animate-h3">Mission</h3>
                    <p class="animate-p">To empower clients with informed, personalized, and transparent property solutions tailored to their unique needs</p>
                    <ul>
                        <li class="animate-li"><span>&#10003;</span> Informed Decisions</li>
                        <li class="animate-li"><span>&#10003;</span> Personalized Service</li>
                        <li class="animate-li"><span>&#10003;</span> Transparency</li>
                        <li class="animate-li"><span>&#10003;</span> Client Empowerment </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


   <!-- end vision & mission -->


   <!-- why chose us -->
   <section class="why-choose-us" style= "padding-top:70px;">
    <div class="container-whychoose">
        <div class="title">
            <h2 class="animate-title">Why Choose Us</h2>
            <p class="animate-paragraph">At Knowhere, we prioritize your unique needs, providing tailored solutions and fostering lasting client relationships. Our commitment to transparency, integrity, and professionalism has established us as one of the industry’s most trusted consultants.</p>
            <a href="#" class="discover-more animate-anchor">Discover More</a>
        </div>
        <div class="features">
            <div class="feature-box reliable animate-feature">
                <i class="fas fa-building icon-about"></i> <!-- FontAwesome icon -->
                <h3>Reliable</h3>
            </div>
            <div class="feature-box comfortable animate-feature">
                <i class="fas fa-cloud icon-about"></i> <!-- FontAwesome icon -->
                <h3>Comfortable</h3>
            </div>
            <div class="feature-box guarantee animate-feature">
                <i class="fas fa-thumbs-up icon-about"></i> <!-- FontAwesome icon -->
                <h3>Guarantee</h3>
            </div>
            <div class="feature-box affordable animate-feature">
                <i class="fas fa-tag icon-about"></i> <!-- FontAwesome icon -->
                <h3>Affordable</h3>
            </div>
        </div>
    </div>
</section>


    <!-- why choose us -->


<!-- team -->

<section class="project-section">
    <div class="content-wrapper">
        <h2 class="section-title animate-title">Expert Team Behind Knowhere</h2>
        <p class="section-description animate-paragraph">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus, lacus ex consequat ipsum, ultricies interdum ex ante.
        </p>
    </div>
</section>





<section class="custom-team-section">
        <div class="custom-container">
            
            <div class="custom-team-grid">
                <div class="custom-team-card">
                    <img src="" alt="Sarah Jhon" class="custom-team-img">
                    <h4 class="custom-team-name">Shashank Waghmare</h4>
                    <!-- <p class="custom-team-role">Mansion Team</p> -->
                    <!-- <div class="custom-social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div> -->
                </div>
                <div class="custom-team-card">
                    <img src="images\team\Gajanan Waghmare.png" alt="Mike Morales" class="custom-team-img">
                    <h4 class="custom-team-name">Gajanan Waghmare</h4>
                    <!-- <p class="custom-team-role">Mansion Team</p>
                    <div class="custom-social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div> -->
                </div>
                <div class="custom-team-card">
                    <img src="images\team\Harikesh Watmare.png" alt="Steve Irwin" class="custom-team-img">
                    <h4 class="custom-team-name">Harikesh Watmare</h4>
                    <!-- <p class="custom-team-role">Mansion Team</p>
                    <div class="custom-social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div> -->
                </div>
                <div class="custom-team-card">
                    <img src="images\team\Shreya Sinha.png" alt="Steve Irwin" class="custom-team-img">
                    <h4 class="custom-team-name">Shreya Sinha</h4>
                    <!-- <p class="custom-team-role">Mansion Team</p>
                    <div class="custom-social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div> -->
                </div>

                <div class="custom-team-card">
                <img src="images\team\Shubham Tayde.png" alt="Sarah Jhon" class="custom-team-img">
                <h3 class="custom-team-name">Shubham Tayde</h3>
                <!-- <p class="custom-team-role">Mansion Team</p>
                <div class="custom-social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div> -->
            </div>

            <div class="custom-team-card">
                <img src="images\team\Tejas Fuke.png" alt="Mike Morales" class="custom-team-img">
                <h3 class="custom-team-name">Tejas Fuke</h3>
                <!-- <p class="custom-team-role">Mansion Team</p>
                <div class="custom-social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div> -->
            </div>
            <div class="custom-team-card">
                <img src="./images/Ankush Jain.jpg" alt="Steve Irwin" class="custom-team-img">
                <h3 class="custom-team-name">Ankush Jain</h3>
                <!-- <p class="custom-team-role">Mansion Team</p>
                <div class="custom-social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div> -->
            </div>
            </div>
        </div>
    </section>



 <!-- end team -->



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
  <!-- end call to action -->


<script>

    document.addEventListener("DOMContentLoaded", () => {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("in-view");
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.2 }
        );

        // Select elements to animate
        const animatables = document.querySelectorAll(".animate");
        animatables.forEach((el) => observer.observe(el));
    });

</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
    const options = {
        threshold: 0.2, // Trigger when 20% of the element is visible
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("active");
            }
        });
    }, options);

    // Select all elements with animation classes
    const animateElements = document.querySelectorAll(
        ".animate-title, .animate-image, .animate-text, .animate-h3, .animate-p, .animate-li"
    );

    animateElements.forEach((el) => observer.observe(el));
});

</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
    const options = {
        threshold: 0.2, // Trigger when 20% of the element is visible
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("active");
            }
        });
    }, options);

    // Select all elements to animate
    const animateElements = document.querySelectorAll(
        ".animate-title, .animate-paragraph, .animate-anchor, .animate-feature"
    );

    animateElements.forEach((el) => observer.observe(el));
    });

</script>    

<script>
        document.addEventListener("DOMContentLoaded", () => {
            const teamCards = document.querySelectorAll(".custom-team-card");
            const options = {
                threshold: 0.1, // Trigger when 10% of the section is visible
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        teamCards.forEach((card, index) => {
                            setTimeout(() => {
                                card.classList.add("fade-in");
                            }, index * 500); // 5 seconds delay between cards
                        });
                        observer.unobserve(entry.target); // Stop observing once triggered
                    }
                });
            }, options);

            observer.observe(document.querySelector(".custom-team-section"));
        });

</script>

  <!-- footer -->

   <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>