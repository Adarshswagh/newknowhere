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

    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>'
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


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
            <h2>Our Gallery</h2>
            <p class="banner-bread">
                <a href="index.php">Home</a> &gt; 
                <a href="#">Our Gallery</a>
            </p>
        </div>
    </div>
</section>
<!--end banner -->

<!-- properties -->

<div class="container py-5">
        <ul class="nav nav-pills justify-content-center mb-4" id="gallery-tabs">
            <!-- <li class="nav-item"><button class="apply-btn active" data-filter="all">ALL</button></li> -->
            <li class="nav-item"><button class="apply-btn" data-filter="office">Office Event</button></li>
            <li class="nav-item"><button class="apply-btn" data-filter="events">Events</button></li>
            <li class="nav-item"><button class="apply-btn" data-filter="awards">Awards</button></li>
            <li class="nav-item"><button class="apply-btn" data-filter="internship">Internship</button></li>
            <li class="nav-item"><button class="apply-btn" data-filter="Inauguration">Inauguration</button></li>

        </ul>

        <div class="row g-3" id="gallery">
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\1.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\2.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\3.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\4.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\5.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\6.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\7.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\8.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\9.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\10.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\11.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\12.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\13.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\14.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\15.png" class="img-fluid rounded" alt="Office">
            </div>



            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\1.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\2.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\3.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\4.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\5.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\6.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\7.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\8.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\9.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\10.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\11.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\12.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\13.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\14.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\15.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\16.png" class="img-fluid rounded" alt="Events">
            </div>




            <div class="col-md-4 gallery-item show" data-category="awards">
                <img src="images\Awards\1.png" class="img-fluid rounded" alt="Awards">
            </div>
            <div class="col-md-4 gallery-item show" data-category="awards">
                <img src="images\Awards\2.png" class="img-fluid rounded" alt="Awards">
            </div>
            <div class="col-md-4 gallery-item show" data-category="awards">
                <img src="images\Awards\3.png" class="img-fluid rounded" alt="Awards">
            </div>
            <div class="col-md-4 gallery-item show" data-category="awards">
                <img src="images\Awards\4.png" class="img-fluid rounded" alt="Awards">
            </div>
            <div class="col-md-4 gallery-item show" data-category="awards">
                <img src="images\Awards\5.png" class="img-fluid rounded" alt="Awards">
            </div>
            <div class="col-md-4 gallery-item show" data-category="awards">
                <img src="images\Awards\6.png" class="img-fluid rounded" alt="Awards">
            </div>




            <div class="col-md-4 gallery-item show" data-category="internship">
                <img src="images\Internship\1.png" class="img-fluid rounded" alt="Internship">
            </div>
            <div class="col-md-4 gallery-item show" data-category="internship">
                <img src="images\Internship\2.png" class="img-fluid rounded" alt="Internship">
            </div>
            <div class="col-md-4 gallery-item show" data-category="internship">
                <img src="images\Internship\3.png" class="img-fluid rounded" alt="Internship">
            </div>
            <div class="col-md-4 gallery-item show" data-category="internship">
                <img src="images\Internship\4.png" class="img-fluid rounded" alt="Internship">
            </div>
            <div class="col-md-4 gallery-item show" data-category="internship">
                <img src="images\Internship\5.png" class="img-fluid rounded" alt="Internship">
            </div>
            <div class="col-md-4 gallery-item show" data-category="internship">
                <img src="images\Internship\6.png" class="img-fluid rounded" alt="Internship">
            </div>
            <div class="col-md-4 gallery-item show" data-category="internship">
                <img src="images\Internship\7.png" class="img-fluid rounded" alt="Internship">
            </div>
            <div class="col-md-4 gallery-item show" data-category="internship">
                <img src="images\Internship\8.png" class="img-fluid rounded" alt="Internship">
            </div>




            <div class="col-md-4 gallery-item show" data-category="Inauguration">
                <img src="images\Inaugration\1.png" class="img-fluid rounded" alt="Inauguration">
            </div>
            <div class="col-md-4 gallery-item show" data-category="Inauguration">
                <img src="images\Inaugration\2.png" class="img-fluid rounded" alt="Inauguration">
            </div>
            <div class="col-md-4 gallery-item show" data-category="Inauguration">
                <img src="images\Inaugration\3.png" class="img-fluid rounded" alt="Inauguration">
            </div>
            <div class="col-md-4 gallery-item show" data-category="Inauguration">
                <img src="images\Inaugration\4.png" class="img-fluid rounded" alt="Inauguration">
            </div>
            <div class="col-md-4 gallery-item show" data-category="Inauguration">
                <img src="images\Inaugration\5.png" class="img-fluid rounded" alt="Inauguration">
            </div>
            <div class="col-md-4 gallery-item show" data-category="Inauguration">
                <img src="images\Inaugration\6.png" class="img-fluid rounded" alt="Inauguration">
            </div>
            <div class="col-md-4 gallery-item show" data-category="Inauguration">
                <img src="images\Inaugration\7.png" class="img-fluid rounded" alt="Inauguration">
            </div>
            <div class="col-md-4 gallery-item show" data-category="Inauguration">
                <img src="images\Inaugration\8.png" class="img-fluid rounded" alt="Inauguration">
            </div>
            <div class="col-md-4 gallery-item show" data-category="Inauguration">
                <img src="images\Inaugration\9.png" class="img-fluid rounded" alt="Inauguration">
            </div>
            <div class="col-md-4 gallery-item show" data-category="Inauguration">
                <img src="images\Inaugration\10.png" class="img-fluid rounded" alt="Inauguration">
            </div>
            <div class="col-md-4 gallery-item show" data-category="Inauguration">
                <img src="images\Inaugration\11.png" class="img-fluid rounded" alt="Inauguration">
            </div>
            

            
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const buttons = document.querySelectorAll("#gallery-tabs button");
            const items = document.querySelectorAll(".gallery-item");

            buttons.forEach(button => {
                button.addEventListener("click", function() {
                    const filter = this.getAttribute("data-filter");
                    
                    buttons.forEach(btn => btn.classList.remove("active"));
                    this.classList.add("active");
                    
                    items.forEach(item => {
                        if (filter === "all" || item.getAttribute("data-category") === filter) {
                            item.classList.add("show");
                        } else {
                            item.classList.remove("show");
                        }
                    });
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
