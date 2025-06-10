<?php 
session_start();
include("config.php");

// Get search parameters
$city = $_GET['city'] ?? '';
$location = $_GET['location'] ?? '';
$projectType = $_GET['project_type'] ?? '';
$projectSubtype = $_GET['project_subtype'] ?? '';
$budget = $_GET['budget'] ?? '';

// Initialize query and parameters
$query = "";
$params = [];
$conditions = [];

// Choose table and conditions based on project type
if ($projectType === "residential") {
    $query = "SELECT * FROM residential_projects";
    $conditions[] = "JSON_CONTAINS(unit_details, JSON_OBJECT('name', ?), '$')";
    $params[] = $projectSubtype;
    if (!empty($budget)) {
        $conditions[] = "JSON_EXTRACT(unit_details, '$[*].price') <= ?";
        $params[] = $budget;
    }
} elseif ($projectType === "commercial") {
    $query = "SELECT * FROM commercial_projects";
    $conditions[] = "typology = ?";
    $params[] = $projectSubtype;
    if (!empty($budget)) {
        $conditions[] = "price <= ?";
        $params[] = $budget;
    }
} elseif ($projectType === "plotting") {
    $query = "SELECT * FROM plotting_projects";
    $conditions[] = "type = ?";
    $params[] = $projectSubtype;
    if (!empty($budget)) {
        $conditions[] = "price <= ?";
        $params[] = $budget;
    }
} else {
    // Use UNION to search across all tables if no specific projectType is selected
    $query = "
        SELECT * FROM residential_projects WHERE city = ? AND project_location = ?
        UNION ALL
        SELECT * FROM commercial_projects WHERE city = ? AND project_location = ?
        UNION ALL
        SELECT * FROM plotting_projects WHERE city = ? AND project_location = ?";
    $params = [$city, $location, $city, $location, $city, $location];
    if (!empty($projectSubtype)) {
        // Add subtype condition to each SELECT statement if projectSubtype is specified
        $query = "
            SELECT * FROM residential_projects WHERE city = ? AND project_location = ? AND JSON_CONTAINS(unit_details, JSON_OBJECT('unit_name', ?), '$')
            UNION ALL
            SELECT * FROM commercial_projects WHERE city = ? AND project_location = ? AND typology = ?
            UNION ALL
            SELECT * FROM plotting_projects WHERE city = ? AND project_location = ? AND type = ?";
        $params = [$city, $location, $projectSubtype, $city, $location, $projectSubtype, $city, $location, $projectSubtype];
    }
}

// Append city and location conditions if a single project type was selected
if (!empty($conditions)) {
    $query .= " WHERE " . implode(" AND ", $conditions);
}

// Prepare statement
$stmt = $con->prepare($query);

// Bind parameters dynamically based on types
$types = str_repeat("s", count($params) - (isset($budget) ? 1 : 0)) . (isset($budget) ? "i" : "");
$stmt->bind_param($types, ...$params);

// Execute and fetch results
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
