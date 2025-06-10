<?php 
session_start();
include("config.php");

// Get search parameters
$city = $_GET['city'] ?? '';
$location = $_GET['location'] ?? '';
$projectType = $_GET['project_type'] ?? '';
$projectSubtype = $_GET['project_subtype'] ?? '';
$budget = $_GET['budget'] ?? '';

// Budget ranges (in lakhs)
$budgetRanges = [
    1 => [5000000, 10000000],  // 50 lakh to 1 cr
    2 => [10000000, 20000000], // 1 cr to 2 cr
    3 => [20000000, 30000000], // 2 cr to 3 cr
    4 => [30000000, 40000000], // 3 cr to 4 cr
    5 => [40000000, 50000000], // 4 cr to 5 cr
    6 => [50000000, 100000000], // 5 cr to 10 cr
    7 => [100000000, 200000000], // 10 cr to 20 cr
    8 => [200000000, 300000000], // 20 cr to 30 cr
    9 => [300000000, 500000000] // 30 cr to 50 cr
];

// Prepare the SQL query based on project type and budget range
$query = "";
$minPrice = $maxPrice = null;

if ($budget) {
    $minPrice = $budgetRanges[$budget][0];
    $maxPrice = $budgetRanges[$budget][1];
}

if ($projectType === "residential") {
    $query = "SELECT * FROM residential_projects 
              WHERE city = ? 
              AND project_location = ?
              AND JSON_CONTAINS(unit_details, JSON_OBJECT('name', ?), '$')
              AND price BETWEEN ? AND ?";
} elseif ($projectType === "commercial") {
    $query = "SELECT * FROM commercial_projects 
              WHERE city = ? 
              AND project_location = ?
              AND typology = ? 
              AND price BETWEEN ? AND ?";
} elseif ($projectType === "plotting") {
    $query = "SELECT * FROM plotting_projects 
              WHERE city = ? 
              AND project_location = ?
              AND type = ? 
              AND price BETWEEN ? AND ?";
}

$stmt = $con->prepare($query);

// Bind parameters
if ($projectType === "residential") {
    $stmt->bind_param("sssii", $city, $location, $projectSubtype, $minPrice, $maxPrice);
} else {
    $stmt->bind_param("sssii", $city, $location, $projectSubtype, $minPrice, $maxPrice);
}

// Execute the query and fetch results
$stmt->execute();
$result = $stmt->get_result();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Listings</title>
    <link rel="stylesheet" href="css/prolist.css"> <!-- Link to CSS file -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>

<!-- Navbar -->
<?php include("include/header.php");?>

<!-- Banner -->
<section id="banner-main">
    <div class="banner">
        <div class="banner-content">
            <h2>Search Property List</h2>
            <p class="banner-bread"><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Property List</a></p>
        </div>
    </div>
</section>

<!-- Property Listings Section -->
<section id="properties">
    <div class="container" style="max-width:1450px;">
        <div class="left-section">
            <div class="row">
            <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $imagePath = "admin/property/" . $row['image1'];
                        $projectTitle = htmlspecialchars($row['project_title']);
                        $projectLocation = htmlspecialchars($row['project_location']);
                        
                        // Additional details based on project type
                        $TotalTowers = $row['total_towers'] ?? "N/A";
                        $projectArea = $row['project_area'] ?? "N/A";
                        $TotalUnits = $row['total_units'] ?? "N/A";
                        $projectPrice = $row['price'] ?? "N/A";
                        $projectTypology = $row['typology'] ?? "N/A";
                        $plotSize = $row['plot_size'] ?? "N/A";

                        // Display card based on project type
                        if ($projectType == "residential") { ?>
                            <div class="col-md-6 col-sm-10">
                                <div class="property-card residential-card">
                                    <img src="<?php echo $imagePath; ?>" alt="Residential Property">
                                    <div class="promo-badge">Residential Project</div>
                                    <div class="property-info">
                                        <h3><?php echo $projectTitle; ?></h3>
                                        <div class="property-meta">
                                            <span class="location"><i class="fas fa-map-marker-alt"></i> <?php echo $projectLocation; ?></span>
                                            <span class="land-area"><i class="fas fa-vector-square"></i> <?php echo $projectArea; ?></span>
                                            <span class="land-area"><i class="fa-solid fa-building"></i> <?php echo $TotalTowers; ?> Towers</span>
                                        </div>
                                        <div class="property-meta">
                                            <span class="total-units">Total Units: <?php echo $TotalUnits; ?></span>
                                        </div>
                                        <div class="button-container">
                                            <a href="Prodetail.php?pid=<?php echo $row['pid']; ?>" class="view-more-btn">Know More</a>
                                            <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn"><i class="fab fa-whatsapp"></i></a>
                                            <a href="tel:+1234567890" class="btn-icon call-btn"><i class="fas fa-phone"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } elseif ($projectType == "commercial") { ?>
                            <!-- Commercial Project Card Layout -->
                            <div class="col-md-6 col-sm-10">
                                <div class="property-card commercial-card">
                                    <img src="<?php echo $imagePath; ?>" alt="Commercial Property">
                                    <div class="promo-badge">Commercial Project</div>
                                    <div class="property-info">
                                        <h3><?php echo $projectTitle; ?></h3>
                                        <div class="property-meta">
                                            <span class="location card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $projectPrice;?></span>
                                            <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $projectLocation;?></span>
                                            <span class="land-area card-location"><i class="fas fa-vector-square"></i> <?php echo $projectArea; ?></span>

                                            
                                        </div>
                                        <div class="property-meta">
                                            <span class="total-units card-location1">Typology : <?php echo $projectTypology; ?></span>
                                            
                                        </div>    
                                        <div class="button-container">
                                            <a href="Prodetail.php?pid=<?php echo $row['pid']; ?>" class="view-more-btn">Know More</a>
                                            <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                            <a href="tel:+1234567890" class="btn-icon call-btn">
                                                <i class="fas fa-phone"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        <?php } elseif ($projectType == "plotting") { ?>
                            <!-- Industrial Project Card Layout -->
                            <<div class="col-md-6 col-sm-10">
                                <div class="property-card industrial-card">
                                    <img src="<?php echo $imagePath; ?>" alt="Industrial Property">
                                    <div class="property-info">
                                        <h3><?php echo $projectTitle; ?></h3>
                                        <div class="property-meta">
                                            <span class="location card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $projectPrice;?></span>
                                            <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $projectLocation;?></span>
                                            <span class="land-area card-location"><i class="fas fa-vector-square"></i> <?php echo $plotSize; ?></span>
                                        </div>
                                        <div class="property-meta">
                                            <span class="total-units card-location1">Land Area : <?php echo $projectArea; ?></span>
                                            
                                        </div> 
                                        <div class="button-container">
                                            <a href="plotdetail.php?pid=<?php echo $row['id']; ?>" class="view-more-btn">Know More</a>
                                            <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                            <a href="tel:+1234567890" class="btn-icon call-btn">
                                                <i class="fas fa-phone"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    }
                } else {
                    echo "<p>No projects found matching your criteria.</p>";
                }
                $con->close();
            ?>
            </div>
        </div>

        <!-- Right Section (Sticky Contact Form) -->
        <div class="right-section">
            <div class="sticky">
                <div class="form-container">
                    <h3 class="form-heading">Connect with Us for Tailored Solutions!</h3>
                    <form>
                        <div class="input-group">
                            <input type="text" name="first-name" placeholder="First Name" required>
                        </div>
                        <input type="email" name="email" placeholder="Email" required>
                        <textarea name="message" placeholder="Message" required></textarea>
                        <button type="submit">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section id="main-call">
    <div class="call-to-action">
        <div class="hero-section">
            <div class="overlay">
                <h2>Your Dream Home Awaits</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#contact" class="btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include("include/footer.php");?>

</body>
</html>
