<?php
require_once 'include/auth.php';
require_once 'config.php';

redirectIfNotLoggedIn();

// Check if there are properties to compare
if (empty($_SESSION['compare_properties']) || count($_SESSION['compare_properties']) < 2) {
    header("Location: wishlist.php");
    exit();
}

// Get properties data
$properties = [];
foreach ($_SESSION['compare_properties'] as $pid) {
    $query = mysqli_query($con, "SELECT * FROM residential_projects WHERE pid = $pid");
    if (mysqli_num_rows($query) > 0) {
        $properties[] = mysqli_fetch_assoc($query);
    }
}

// If less than 2 valid properties, redirect back
if (count($properties) < 2) {
    header("Location: wishlist.php");
    exit();
}

include("include/header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare Properties | Real Nest</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #A8894D;
            --dark-color: #050F17;
            --light-color: #F8F9FA;
        }
        
        body {
            font-family: 'Lexend', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            padding-top: 0;
        }
        
        .compare-header {
            background: linear-gradient(rgba(5, 15, 23, 0.8), rgba(5, 15, 23, 0.8)), url('images/banner/1.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0 80px;
            text-align: center;
            margin-bottom: 50px;
        }
        
        .compare-header h1 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .compare-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 50px;
            background: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        
        .compare-table th, .compare-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        
        .compare-table th {
            background-color: var(--dark-color);
            color: white;
            font-weight: 500;
        }
        
        .compare-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .compare-table tr:hover {
            background-color: #f5f5f5;
        }
        
        .property-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }
        
        .property-title {
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 5px;
        }
        
        .property-location {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 10px;
        }
        
        .property-price {
            color: var(--primary-color);
            font-weight: 500;
            font-size: 1.1rem;
        }
        
        .feature-icon {
            color: var(--primary-color);
            margin-right: 5px;
        }
        
        .btn-clear {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 500;
            cursor: pointer;
            margin-bottom: 30px;
        }
        
        .btn-clear:hover {
            background-color: #c82333;
        }
        
        @media (max-width: 768px) {
            .compare-table {
                display: block;
                overflow-x: auto;
            }
            
            .compare-header {
                padding: 100px 0 60px;
            }
            
            .compare-header h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <?php include("include/header.php"); ?>
    <!-- end navbar -->

    <!-- Compare Header -->
    <section class="compare-header">
        <div class="container">
            <h1>Compare Properties</h1>
            <p>Side-by-side comparison of your selected properties</p>
        </div>
    </section>

    <!-- Compare Content -->
    <div class="container">
        <button onclick="clearComparison()" class="btn-clear">
            <i class="fas fa-trash-alt"></i> Clear Comparison
        </button>
        
        <table class="compare-table">
            <thead>
                <tr>
                    <th>Property</th>
                    <?php foreach ($properties as $property): ?>
                        <th>
                            <img src="admin/property/<?php echo htmlspecialchars($property['9']); ?>" alt="<?php echo htmlspecialchars($property['1']); ?>" class="property-image">
                            <div class="property-title"><?php echo htmlspecialchars($property['1']); ?></div>
                            <div class="property-location">
                                <i class="fas fa-map-marker-alt feature-icon"></i>
                                <?php echo htmlspecialchars($property['3']); ?>
                            </div>
                            <div class="property-price">₹<?php echo number_format($property['20']); ?></div>
                        </th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Project Developer</td>
                    <?php foreach ($properties as $property): ?>
                        <td><?php echo htmlspecialchars($property['21']); ?></td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <td>Project Location</td>
                    <?php foreach ($properties as $property): ?>
                        <td><?php echo htmlspecialchars($property['3']); ?></td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <td>Project Area</td>
                    <?php foreach ($properties as $property): ?>
                        <td><?php echo htmlspecialchars($property['4']); ?> Acre</td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <td>Total Towers</td>
                    <?php foreach ($properties as $property): ?>
                        <td><?php echo htmlspecialchars($property['5']); ?></td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <td>Total Units</td>
                    <?php foreach ($properties as $property): ?>
                        <td><?php echo htmlspecialchars($property['6']); ?></td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <td>Possession</td>
                    <?php foreach ($properties as $property): ?>
                        <td><?php echo htmlspecialchars($property['7']); ?></td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <td>Typology PSF</td>
                    <?php foreach ($properties as $property): ?>
                        <td>₹<?php echo htmlspecialchars($property['20']); ?></td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <td>Total Floors</td>
                    <?php foreach ($properties as $property): ?>
                        <td><?php echo htmlspecialchars($property['18']); ?></td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <td>Status</td>
                    <?php foreach ($properties as $property): ?>
                        <td><?php echo htmlspecialchars($property['14']); ?></td>
                    <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
    function clearComparison() {
        if (confirm('Are you sure you want to clear all comparisons?')) {
            fetch('compare_handler.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'action=clear'
            })
            .then(response => response.json())
            .then(data => {
                if(data.success) {
                    window.location.href = 'wishlist.php';
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while clearing comparison.');
            });
        }
    }
    </script>

    <?php include("include/footer.php"); ?>
</body>
</html>