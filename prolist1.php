<?php 
session_start();
include("config.php");

// Get search parameters
$city = isset($_GET['city']) ? trim($_GET['city']) : '';
$location = isset($_GET['location']) ? trim($_GET['location']) : '';
$projectType = isset($_GET['project_type']) ? trim($_GET['project_type']) : '';
$projectSubtype = isset($_GET['project_subtype']) ? trim($_GET['project_subtype']) : '';
$budget = isset($_GET['budget']) ? (int)$_GET['budget'] : 0;

// Initialize variables
$query = "";
$conditions = array();
$params = array();
$paramTypes = "";

// Determine which table to query based on project type
$tables = array();
if ($projectType === "residential") {
    $tables = array("residential_projects");
} elseif ($projectType === "commercial") {
    $tables = array("commercial_projects");
} elseif ($projectType === "plotting") {
    $tables = array("plotting_projects");
} else {
    // If no project type selected, search all tables
    $tables = array("residential_projects", "commercial_projects", "plotting_projects");
}

// Build conditions based on provided parameters
if (!empty($city)) {
    $conditions[] = "city = ?";
    $params[] = $city;
    $paramTypes .= "s";
}

if (!empty($location)) {
    $conditions[] = "project_location = ?";
    $params[] = $location;
    $paramTypes .= "s";
}

if (!empty($projectSubtype) && !empty($projectType)) {
    if ($projectType === "residential") {
        $conditions[] = "JSON_CONTAINS(unit_details, JSON_OBJECT('name', ?), '$')";
    } elseif ($projectType === "commercial") {
        $conditions[] = "typology = ?";
    } else {
        $conditions[] = "type = ?";
    }
    $params[] = $projectSubtype;
    $paramTypes .= "s";
}

if (!empty($budget)) {
    $conditions[] = "price <= ?";
    $params[] = $budget;
    $paramTypes .= "i";
}

// Prepare to collect all results
$allResults = array();

foreach ($tables as $table) {
    // Build the query for this table
    $tableQuery = "SELECT *, '$table' as source_table FROM $table";
    
    if (!empty($conditions)) {
        $tableQuery .= " WHERE " . implode(" AND ", $conditions);
    }
    
    // Prepare and execute the query
    $stmt = $con->prepare($tableQuery);
    
    if (!empty($params)) {
        $stmt->bind_param($paramTypes, ...$params);
    }
    
    $stmt->execute();
    $result = $stmt->get_result();
    
    while ($row = $result->fetch_assoc()) {
        $row['project_type'] = str_replace('_projects', '', $table);
        $allResults[] = $row;
    }
    
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Listings</title>
    <link rel="stylesheet" href="css/prolist.css">
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
                if (!empty($allResults)) {
                    foreach ($allResults as $row) {
                        $imagePath = "admin/property/" . $row['image1'];
                        $projectTitle = htmlspecialchars($row['project_title']);
                        $projectLocation = htmlspecialchars($row['project_location']);
                        $currentType = $row['project_type'];
                        
                        // Additional details based on project type
                        $TotalTowers = $row['total_towers'] ?? "N/A";
                        $projectArea = $row['project_area'] ?? "N/A";
                        $TotalUnits = $row['total_units'] ?? "N/A";
                        $projectPrice = isset($row['price']) ? '₹' . number_format($row['price'] / 100000, 2) . ' Lakhs' : "N/A";
                        $projectTypology = $row['typology'] ?? "N/A";
                        $plotSize = $row['plot_size'] ?? "N/A";

                        // Display card based on project type
                        if ($currentType == "residential") { ?>
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
                                            <span class="price"><i class="fas fa-rupee-sign"></i> <?php echo $projectPrice; ?></span>
                                            <span class="total-units">Total Units: <?php echo $TotalUnits; ?></span>
                                        </div>
                                        <div class="button-container">
                                            <a href="Prodetail.php?pid=<?php echo $row['pid']; ?>&type=residential" class="view-more-btn">Know More</a>
                                            <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn"><i class="fab fa-whatsapp"></i></a>
                                            <a href="tel:+1234567890" class="btn-icon call-btn"><i class="fas fa-phone"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } elseif ($currentType == "commercial") { ?>
                            <div class="col-md-6 col-sm-10">
                                <div class="property-card commercial-card">
                                    <img src="<?php echo $imagePath; ?>" alt="Commercial Property">
                                    <div class="promo-badge">Commercial Project</div>
                                    <div class="property-info">
                                        <h3><?php echo $projectTitle; ?></h3>
                                        <div class="property-meta">
                                            <span class="location card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $projectPrice; ?></span>
                                            <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $projectLocation; ?></span>
                                            <span class="land-area card-location"><i class="fas fa-vector-square"></i> <?php echo $projectArea; ?></span>
                                        </div>
                                        <div class="property-meta">
                                            <span class="total-units card-location1">Typology: <?php echo $projectTypology; ?></span>
                                        </div>    
                                        <div class="button-container">
                                            <a href="Prodetail.php?pid=<?php echo $row['pid']; ?>&type=commercial" class="view-more-btn">Know More</a>
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
                        <?php } elseif ($currentType == "plotting") { ?>
                            <div class="col-md-6 col-sm-10">
                                <div class="property-card industrial-card">
                                    <img src="<?php echo $imagePath; ?>" alt="Industrial Property">
                                    <div class="property-info">
                                        <h3><?php echo $projectTitle; ?></h3>
                                        <div class="property-meta">
                                            <span class="location card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $projectPrice; ?></span>
                                            <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $projectLocation; ?></span>
                                            <span class="land-area card-location"><i class="fas fa-vector-square"></i> <?php echo $plotSize; ?></span>
                                        </div>
                                        <div class="property-meta">
                                            <span class="total-units card-location1">Land Area: <?php echo $projectArea; ?></span>
                                        </div> 
                                        <div class="button-container">
                                            <a href="plotdetail.php?pid=<?php echo $row['id']; ?>&type=plotting" class="view-more-btn">Know More</a>
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
                    echo '<div class="col-12"><p class="no-results">No projects found matching your criteria. Please try different search parameters.</p></div>';
                }
                
                if ($con) {
                    $con->close();
                }
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
                <p>Discover the perfect property that matches your lifestyle and budget.</p>
                <a href="#contact" class="btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include("include/footer.php");?>

</body>
</html>