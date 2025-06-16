<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");

// Get the pid from the request
$id = $_REQUEST['pid'];

// Fetch the current project details
$query = mysqli_query($con, "SELECT * FROM residential_projects WHERE pid='$id'");

if(mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_array($query);
    $unit_details = json_decode($row['unit_details'], true);
} else {
    echo "No project found with the given pid.";
    exit;
}

// Fetch similar projects based on location
$location = $row['3']; // Assuming '3' is the index for location in your database
$similar_query = mysqli_query($con, "SELECT * FROM residential_projects WHERE project_location='$location' AND pid != '$id' LIMIT 5"); // Adjust the query as needed

$similar_projects = [];
while ($similar_row = mysqli_fetch_array($similar_query)) {
    $similar_projects[] = $similar_row;
}


$isShortlisted = false;
if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
    $checkQuery = mysqli_query($con, "SELECT * FROM user_wishlist WHERE user_id = $userId AND property_id = $id");
    $isShortlisted = mysqli_num_rows($checkQuery) > 0;
}

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property List</title>

    <link rel="stylesheet" href="css/prodetail.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- SwiperJS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<style>
    /* Main Layout Structure */
    .main-container {
        display: flex;
        gap: 30px;
        max-width: 1400px;
        margin: 0 auto;
        padding: 20px;
    }
    
    .left-section {
        flex: 2;
    }
    
    .right-section {
        flex: 1;
        position: sticky;
        top: 100px;
        align-self: flex-start;
        height: calc(100vh - 120px);
        overflow-y: auto;
    }
    
    /* Responsive Design */
    @media (max-width: 992px) {
        .main-container {
            flex-direction: column;
        }
        
        .right-section {
            position: static;
            height: auto;
        }
    }

    /* Rest of your existing styles... */
    /* (Keep all your existing styles here) */
</style>
<body>

<!-- navbar -->
<?php include("include/header.php");?>
<!-- end navbar -->

<!-- banner -->
<section id="banner-main">
    <!-- <div class="banner">
        <img src="images/banner/5.png" alt="Banner" class="banner-img">
        <div class="banner-content">
        <h2><?php echo htmlspecialchars($row['1']); ?></h2>
            <p class="banner-bread">
                <a href="index.php">Home</a> &gt; 
                <a href="#">Projects List</a>
            </p>
        </div>
    </div>
</section> -->
<!-- end banner -->

<!-- Main Content -->
<div class="main-container">
    <!-- Left Section -->
    <div class="left-section">

    <h1 class="prodetail-heading">
            <?php echo htmlspecialchars($row['1']); ?>
            <span class="action-buttons">
                <button id="shortlistButton" onclick="shortlistProperty(<?php echo $id; ?>)" class="icon-btn1">
                    <i class="fa fa-heart" <?php echo $isShortlisted ? 'style="color:red;"' : ''; ?>></i> 
                    <?php echo $isShortlisted ? 'Shortlisted' : 'Shortlist'; ?>
                </button>
                <button id="shareButton" onclick="copyShareUrl()" class="icon-btn1">
                    <i class="fa fa-share"></i> Share
                </button>
            </span>
        </h1>
        <div class="w3-content w3-section" style="max-width:100%;">
            <?php if (!empty($row['9'])): ?>
                <img class="mySlides" src="admin/property/<?php echo $row['9']; ?>" style="width:100%">
            <?php endif; ?>
            
            <?php if (!empty($row['10'])): ?>
                <img class="mySlides" src="admin/property/<?php echo $row['10']; ?>" style="width:100%">
            <?php endif; ?>
            
            <?php if (!empty($row['11'])): ?>
                <img class="mySlides" src="admin/property/<?php echo $row['11']; ?>" style="width:100%">
            <?php endif; ?>
            
            <?php if (!empty($row['12'])): ?>
                <img class="mySlides" src="admin/property/<?php echo $row['12']; ?>" style="width:100%">
            <?php endif; ?>
            
            <?php if (!empty($row['13'])): ?>
                <img class="mySlides" src="admin/property/<?php echo $row['13']; ?>" style="width:100%">
            <?php endif; ?>
        </div>

        <script>
            let slideIndex = 0;
            function showSlides() {
                let slides = document.querySelectorAll(".mySlides");
                for (let i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) { slideIndex = 1; }
                slides[slideIndex - 1].style.display = "block";
                setTimeout(showSlides, 5000);
            }
            document.addEventListener("DOMContentLoaded", showSlides);
        </script>

        

        <h3 class="prodetail-heading3">Description :</h3>
        <p class="description"><?php echo htmlspecialchars($row['2']); ?></p>
        <div class="property-details">
            <div class="detail-item">
                <i class="fa-solid fa-map-pin" style="color: #a8894d; height:30px;"></i>
                <p class="project-detail"><?php echo htmlspecialchars($row['3']); ?>, <?php echo htmlspecialchars($row['19']); ?></p>
            </div>
            <div class="divider"></div>
            <div class="detail-item">
                <i class="fa-solid fa-house" style="color: #a8894d; height:30px;"></i>
                <p><?php echo htmlspecialchars($row['4']); ?></p>
            </div>
        </div>

        <div class="property-details-section">
            <div class="properties-details">
                <h3>Project Details :</h3>
                <div class="detail-grid">
                    <div><strong class="field-title">Project Developer :</strong> <span style="color:#A8894D; font-ize:20px;"><?php echo htmlspecialchars($row['21']); ?></span></div>
                    <div><strong class="field-title">Typology PSF :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['20']); ?></span></div>
                    <div><strong class="field-title">Total Floor :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['18']); ?></span></div>
                    <div><strong class="field-title">Total Towers :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['5']); ?></span></div>
                    <div><strong class="field-title">Total Units :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['6']); ?></span></div>
                    <div><strong class="field-title">Possession :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['7']); ?></span></div>
                    <div><strong class="field-title">Project area :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['4']); ?></span></div>
                    <div><strong class="field-title">Status :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['14']); ?></span></div>
                </div>
            </div>

            <div class="unit-details">
                <h3>Typology Details :</h3>
                <table>
                    <thead>
                        <tr>
                            <th>UNIT NAME</th>
                            <th>UNIT PRICE</th>
                            <th>UNIT SIZE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($unit_details)): ?>
                            <?php foreach ($unit_details as $unit): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($unit['name']); ?></td>
                                    <td><?php echo htmlspecialchars($unit['price']); ?></td>
                                    <td><?php echo htmlspecialchars($unit['size']); ?> SqFt.</td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr><td colspan="3">No units available</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <div class="unit-details">
                <h3>Floor Plan :</h3>
                <div class="container">
                    <div class="floor-plan">
                        <div class="blur-overlay">
                            <button id="enquireButton3" class="download-btn" onclick="openEnquiryForm()">DOWNLOAD</button>
                        </div>
                        <img src="images/floor/f1.png" alt="2 BHK Floor Plan">
                    </div>

                    <div class="floor-plan">
                        <div class="blur-overlay">
                            <button id="enquireButton1" class="download-btn" onclick="openEnquiryForm()">DOWNLOAD</button>
                        </div>
                        <img src="images/floor/f2.jpg" alt="3 BHK Floor Plan">
                    </div>
                    <div class="floor-plan">
                        <div class="blur-overlay">
                            <button id="enquireButton2" class="download-btn" onclick="openEnquiryForm()">DOWNLOAD</button>
                        </div>
                        <img src="images/floor/f3.png" alt="Master Layout">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Section (Sticky) -->
    <div class="right-section">
        <!-- EMI Calculator -->
        <div class="calculator-container" style="background: #050F17; padding: 20px; border-radius: 10px; margin-bottom: 30px;">
            <h3 style="color: #A8894D; margin-bottom: 20px; font-family: 'Lexend', sans-serif;">EMI Calculator</h3>
            
            <div class="form-group">
                <label style="color: #fff; display: block; margin-bottom: 5px;">Loan Amount (₹)</label>
                <input type="range" id="loanAmount" min="100000" max="50000000" step="100000" value="5000000" class="slider">
                <input type="number" id="loanAmountInput" value="5000000" style="width: 100%; padding: 8px; border: 1px solid #A8894D; background: transparent; color: #fff;">
            </div>
            
            <div class="form-group" style="margin-top: 15px;">
                <label style="color: #fff; display: block; margin-bottom: 5px;">Interest Rate (%)</label>
                <input type="range" id="interestRate" min="5" max="20" step="0.1" value="8.5" class="slider">
                <input type="number" id="interestRateInput" value="8.5" style="width: 100%; padding: 8px; border: 1px solid #A8894D; background: transparent; color: #fff;">
            </div>
            
            <div class="form-group" style="margin-top: 15px;">
                <label style="color: #fff; display: block; margin-bottom: 5px;">Loan Tenure (Years)</label>
                <input type="range" id="loanTenure" min="1" max="30" step="1" value="20" class="slider">
                <input type="number" id="loanTenureInput" value="20" style="width: 100%; padding: 8px; border: 1px solid #A8894D; background: transparent; color: #fff;">
            </div>
            
            <button onclick="calculateEMI()" style="width: 100%; padding: 12px; background-color: #A8894D; color: white; border: none; margin-top: 20px; cursor: pointer; font-family: 'Lexend', sans-serif;">Calculate EMI</button>
            
            <div id="emiResult" style="margin-top: 20px; color: #fff; font-family: 'Lexend', sans-serif; display: none;">
                <h4 style="color: #A8894D; margin-bottom: 10px;">Calculation Results</h4>
                <p>Monthly EMI: <span id="monthlyEMI" style="float: right;">₹0</span></p>
                <p>Total Interest: <span id="totalInterest" style="float: right;">₹0</span></p>
                <p>Total Payment: <span id="totalPayment" style="float: right;">₹0</span></p>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="contact-form" style="background: #050F17; padding: 20px; border-radius: 10px; margin-bottom: 30px;">
            <h3 style="color: #A8894D; margin-bottom: 20px; font-family: 'Lexend', sans-serif;">Contact Us</h3>
            
            <form id="quickContactForm">
                <div class="form-group" style="margin-bottom: 15px;">
                    <input type="text" name="name" placeholder="Your Name" required style="width: 100%; padding: 10px; border: none; border-bottom: 1px solid #A8894D; background: transparent; color: #fff;">
                </div>
                
                <div class="form-group" style="margin-bottom: 15px;">
                    <input type="email" name="email" placeholder="Your Email" required style="width: 100%; padding: 10px; border: none; border-bottom: 1px solid #A8894D; background: transparent; color: #fff;">
                </div>
                
                <div class="form-group" style="margin-bottom: 15px;">
                    <input type="tel" name="phone" placeholder="Phone Number" required style="width: 100%; padding: 10px; border: none; border-bottom: 1px solid #A8894D; background: transparent; color: #fff;">
                </div>
                
                <div class="form-group" style="margin-bottom: 20px;">
                    <textarea name="message" placeholder="Your Message" style="width: 100%; padding: 10px; border: none; border-bottom: 1px solid #A8894D; background: transparent; color: #fff; height: 80px;"></textarea>
                </div>
                
                <button type="submit" style="width: 100%; padding: 12px; background-color: #A8894D; color: white; border: none; cursor: pointer; font-family: 'Lexend', sans-serif;">Send Message</button>
            </form>
        </div>

        <!-- Similar Projects -->
        <div class="similar-projects" style="background: #050F17; padding: 20px; border-radius: 10px;">
            <h3 style="color: #A8894D; margin-bottom: 20px; font-family: 'Lexend', sans-serif;">Similar Projects</h3>
            
            <?php foreach (array_slice($similar_projects, 0, 3) as $project): ?>
                <div class="similar-project-card" style="margin-bottom: 20px; border-bottom: 1px solid #333; padding-bottom: 15px;">
                    <img src="admin/property/<?php echo $project['9']; ?>" alt="<?php echo htmlspecialchars($project['1']); ?>" style="width: 100%; height: 150px; object-fit: cover; border-radius: 5px;">
                    <h4 style="color: #fff; margin-top: 10px; font-family: 'Lexend', sans-serif;"><?php echo htmlspecialchars($project['1']); ?></h4>
                    <p style="color: #aaa; font-size: 14px; margin: 5px 0;">
                        <i class="fas fa-map-marker-alt" style="color: #A8894D;"></i> <?php echo htmlspecialchars($project['3']); ?>
                    </p>
                    <a href="prodetail.php?pid=<?php echo $project['0']; ?>" style="display: inline-block; margin-top: 10px; color: #A8894D; text-decoration: none; font-family: 'Lexend', sans-serif;">View Details →</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Similar Projects Carousel -->
<!-- <section class="project-section">
    <h3 class="section-title" style="color:#A8894D; text-align: left; padding-left: 20px;">More Similar Projects</h3>

    <div class="auto-carousel">
        <div class="auto-track">
            <div class="auto-wrapper">
                <?php foreach ($similar_projects as $project): ?>
                    <div class="auto-slide">
                        <div class="custom-card">
                            <div class="image-section">
                                <img src="admin/property/<?php echo $project['9']; ?>" alt="Project Image" />
                                <div class="custom-badge">Residential Projects</div>
                            </div>
                            <div class="info-section">
                                <h2 class="project-name"><?php echo htmlspecialchars($project['1']); ?></h2>
                                <div class="meta-data">
                                    <span><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($project['3']); ?></span>
                                    <span><i class="fas fa-vector-square"></i> <?php echo htmlspecialchars($project['4']); ?> Acre</span>
                                    <span><i class="fa-solid fa-building"></i> <?php echo htmlspecialchars($project['5']); ?> Towers</span>
                                </div>
                                <p class="unit-count">Total Units: <?php echo htmlspecialchars($project['6']); ?> Units</p>
                                <div class="cta-buttons">
                                    <a href="prodetail.php?pid=<?php echo $project['0']; ?>" class="main-btn">KNOW MORE</a>
                                    <a href="https://wa.me/1234567890" target="_blank" class="icon-btn whatsapp"><i class="fab fa-whatsapp"></i></a>
                                    <a href="tel:+1234567890" class="icon-btn call"><i class="fas fa-phone"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section> -->

<!-- Popup HTML and JavaScript -->
<!-- (Keep your existing popup HTML and JavaScript code here) -->

<!-- footer -->
<?php include("include/footer.php");?>
<!-- end footer -->

<script>
    // EMI Calculator Functionality
    function calculateEMI() {
        const loanAmount = parseFloat(document.getElementById('loanAmountInput').value);
        const interestRate = parseFloat(document.getElementById('interestRateInput').value);
        const loanTenure = parseFloat(document.getElementById('loanTenureInput').value) * 12; // Convert to months
        
        const monthlyInterestRate = (interestRate / 12) / 100;
        const emi = (loanAmount * monthlyInterestRate * Math.pow(1 + monthlyInterestRate, loanTenure)) / 
                   (Math.pow(1 + monthlyInterestRate, loanTenure) - 1);
        
        const totalPayment = emi * loanTenure;
        const totalInterest = totalPayment - loanAmount;
        
        document.getElementById('monthlyEMI').textContent = '₹' + emi.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
        document.getElementById('totalInterest').textContent = '₹' + totalInterest.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
        document.getElementById('totalPayment').textContent = '₹' + totalPayment.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
        
        document.getElementById('emiResult').style.display = 'block';
    }

    // Sync slider and input values
    document.getElementById('loanAmount').addEventListener('input', function() {
        document.getElementById('loanAmountInput').value = this.value;
    });
    document.getElementById('loanAmountInput').addEventListener('input', function() {
        document.getElementById('loanAmount').value = this.value;
    });
    
    document.getElementById('interestRate').addEventListener('input', function() {
        document.getElementById('interestRateInput').value = this.value;
    });
    document.getElementById('interestRateInput').addEventListener('input', function() {
        document.getElementById('interestRate').value = this.value;
    });
    
    document.getElementById('loanTenure').addEventListener('input', function() {
        document.getElementById('loanTenureInput').value = this.value;
    });
    document.getElementById('loanTenureInput').addEventListener('input', function() {
        document.getElementById('loanTenure').value = this.value;
    });

    // Initialize calculator
    document.addEventListener('DOMContentLoaded', function() {
        calculateEMI();
    });

    // Quick Contact Form Submission
    document.getElementById('quickContactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Add your form submission logic here
        alert('Thank you for your message! We will contact you soon.');
        this.reset();
    });

    // Keep your existing JavaScript functions (addToCompare, copyShareUrl, etc.)
</script>

<!-- SwiperJS Script -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    new Swiper('.auto-track', {
        slidesPerView: 'auto',
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        grabCursor: true,
    });
</script>



<script>
function shortlistProperty(pid) {
    <?php if(isset($_SESSION['user_id'])): ?>
        const isCurrentlyShortlisted = <?php echo $isShortlisted ? 'true' : 'false'; ?>;
        const action = isCurrentlyShortlisted ? 'remove' : 'shortlist';
        
        fetch('shortlist_handler.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'action=' + action + '&pid=' + pid
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                const button = document.getElementById('shortlistButton');
                if (action === 'shortlist') {
                    button.innerHTML = '<i class="fa fa-heart" style="color:red;"></i> Shortlisted';
                    alert('Property added to your wishlist!');
                } else {
                    button.innerHTML = '<i class="fa fa-heart"></i> Shortlist';
                    alert('Property removed from your wishlist!');
                }
            } else {
                alert('Error: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while updating your wishlist.');
        });
    <?php else: ?>
        // User not logged in - redirect to login
        window.location.href = 'login.php?redirect=' + encodeURIComponent(window.location.href);
    <?php endif; ?>
}
</script>

</body>
</html>