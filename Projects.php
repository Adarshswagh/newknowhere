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

    <link rel="stylesheet" href="css/knowproperties.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>


</head>
<body>

<!-- navbar -->
    
<?php include("include/header.php");?>

 <!-- end navbar -->

 <!-- banner -->
 <section id="banner-main">
    <div class="banner" >
        <div class="banner-content">
            <h2>Project List</h2>
            <p><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Services</a></p>
        </div>
    </div>
</section>

<!--end banner  -->


<!-- properties -->
<!-- <section class="properties-header">
    <div class="properties-div">
        <h2>Properties by Mantision</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullam corper luctus, lacus ex consequat ipsum, ultricies interdum ex ante.</p>
    </div>
</section> -->


<section id="properties">
    <div class="container">
        <!-- Left Section (Property Listings) -->
        <div class="left-section">
            <div class="row">
                <?php 
                    // Fetching properties from the database
                    $query = mysqli_query($con, "SELECT property.*, user.uname, user.utype, user.uimage FROM `property`, `user` WHERE property.uid=user.uid");
                    while ($row = mysqli_fetch_array($query)) {
                ?>
                <div class="col-md-6 col-sm-10">
                    <div class="property-card">
                        <div class="overlay-black">
                            <img src="admin/property/<?php echo $row['18']; ?>" alt="Property Image">
                            <!-- <div class="bg-success d-table px-3 py-2 rounded text-white text-capitalize">For <?php echo $row['5'];?></div> -->

                            <div class="promo-badge">For <?php echo $row['5'];?></div>
                        </div>
                        <div class="property-info">
                            <h3 class="property-title">
                                <a href="propertydetail.php?pid=<?php echo $row['0']; ?>">
                                    <?php echo $row['1']; ?>
                                </a>
                            </h3>
                            <p class="price">$<?php echo $row['13']; ?></p>
                            <p class="property-details"><?php echo $row['14']; ?>, <?php echo $row['12']; ?> Sq ft</p>
                            <div class="property-meta">
                                <span><i class="fas fa-bed"></i> 4 Bedrooms</span>
                                <span><i class="fas fa-bath"></i> 2 Bathrooms</span>
                            </div>
                            <a href="knowpropertydetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">VIEW MORE</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

        <!-- Right Section (Sticky Installment Calculator) -->
        <div class="right-section">
            <div class="sticky">
                <h3>Installment Calculator</h3>
                <form>
                    <label for="price">Property Price</label>
                    <input type="number" id="price" name="price" placeholder="$500,000">
                    
                    <label for="duration">Duration (Years)</label>
                    <input type="number" id="duration" name="duration" placeholder="30">
                    
                    <label for="interest">Interest Rate</label>
                    <input type="number" id="interest" name="interest" placeholder="3.5%">
                    
                    <button type="submit">Calculate Installment</button>
                </form>
            </div>
        </div>
    </div>

</section>
 <!-- end properties -->


 <!-- call to action -->
<section id="main-call">
    <div class="call-to-action">
        <div class="hero-section">
            <div class="overlay">
                <h2>Your Dream Home Awaits</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullam corper luctus, lacus ex consequat ipsum, ultricies interdum ex ante.</p>
                <a href="#contact" class="btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>
  <!-- end call to action -->

  <!-- footer -->

   <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>