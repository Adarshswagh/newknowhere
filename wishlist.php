<?php
require_once 'include/auth.php';
redirectIfNotLoggedIn(); // This will redirect to login if not logged in

include("config.php");
include("include/header.php");

$userId = $_SESSION['user_id'];
$query = mysqli_query($con, "
    SELECT p.* 
    FROM residential_projects p
    JOIN user_wishlist w ON p.pid = w.property_id
    WHERE w.user_id = $userId
    ORDER BY w.created_at DESC
");

// Initialize compare session if not exists
if (!isset($_SESSION['compare_properties'])) {
    $_SESSION['compare_properties'] = array();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Wishlist | Real Nest</title>
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
        
        .wishlist-header {
            background: linear-gradient(rgba(5, 15, 23, 0.8), rgba(5, 15, 23, 0.8)), url('images/banner/1.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0 80px;
            text-align: center;
            margin-bottom: 50px;
        }
        
        .wishlist-header h1 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .wishlist-header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .wishlist-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }
        
        .wishlist-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .wishlist-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        
        .card-img-top {
            height: 220px;
            width: 100%;
            object-fit: cover;
        }
        
        .card-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--primary-color);
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        .card-body {
            padding: 20px;
        }
        
        .card-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--dark-color);
        }
        
        .card-location {
            color: #666;
            margin-bottom: 15px;
            font-size: 0.95rem;
        }
        
        .card-location i {
            color: var(--primary-color);
            margin-right: 5px;
        }
        
        .card-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            font-size: 0.9rem;
        }
        
        .card-details span {
            display: flex;
            align-items: center;
        }
        
        .card-details i {
            color: var(--primary-color);
            margin-right: 5px;
            font-size: 0.9rem;
        }
        
        .card-actions {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-top: 20px;
        }
        
        .btn-view {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 8px;
            border-radius: 5px;
            font-weight: 500;
            transition: background-color 0.3s;
            flex-grow: 1;
            text-align: center;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .btn-view:hover {
            background-color: #8a6d3b;
            color: white;
        }
        
        .btn-remove {
            background-color: #f8f9fa;
            color: #dc3545;
            border: 1px solid #dc3545;
            padding: 8px;
            border-radius: 5px;
            font-weight: 500;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 0 0 40px;
        }
        
        .btn-remove:hover {
            background-color: #dc3545;
            color: white;
        }
        
        .btn-compare {
            background-color: #f8f9fa;
            color: var(--dark-color);
            border: 1px solid var(--dark-color);
            padding: 8px;
            border-radius: 5px;
            font-weight: 500;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 0 0 40px;
        }
        
        .btn-compare:hover, .btn-compare.active {
            background-color: var(--dark-color);
            color: white;
        }
        
        .empty-wishlist {
            text-align: center;
            padding: 50px 0;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .empty-wishlist i {
            font-size: 3rem;
            color: #ccc;
            margin-bottom: 20px;
        }
        
        .empty-wishlist h3 {
            color: #555;
            margin-bottom: 15px;
        }
        
        .empty-wishlist p {
            color: #777;
            margin-bottom: 25px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .btn-explore {
            background-color: var(--primary-color);
            color: white;
            padding: 10px 25px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.3s;
        }
        
        .btn-explore:hover {
            background-color: #8a6d3b;
            color: white;
        }
        
        .compare-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: var(--dark-color);
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
            z-index: 1000;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }
        
        .compare-bar.visible {
            transform: translateY(0);
        }
        
        .compare-count {
            background-color: var(--primary-color);
            color: white;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-left: 5px;
        }
        
        @media (max-width: 768px) {
            .wishlist-grid {
                grid-template-columns: 1fr;
            }
            
            .wishlist-header {
                padding: 100px 0 60px;
            }
            
            .wishlist-header h1 {
                font-size: 2rem;
            }
            
            .card-actions {
                flex-wrap: wrap;
            }
            
            .btn-view {
                flex: 1 1 100%;
                margin-bottom: 10px;
            }
            
            .btn-remove, .btn-compare {
                flex: 1;
            }
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <?php include("include/header.php"); ?>
    <!-- end navbar -->

    <!-- Wishlist Header -->
    <section class="wishlist-header">
        <div class="container">
            <h1>My Wishlist</h1>
            <p>Your saved properties for future reference</p>
        </div>
    </section>

    <!-- Wishlist Content -->
    <div class="container">
        <?php if (mysqli_num_rows($query) > 0): ?>
            <div class="wishlist-grid">
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <div class="wishlist-card">
                        <div style="position: relative;">
                            <img src="admin/property/<?php echo htmlspecialchars($row['9']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($row['1']); ?>">
                            <span class="card-badge"><?php echo htmlspecialchars($row['14']); ?></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($row['1']); ?></h5>
                            <p class="card-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <?php echo htmlspecialchars($row['3']); ?>, <?php echo htmlspecialchars($row['19']); ?>
                            </p>
                            <div class="card-details">
                                <span><i class="fas fa-vector-square"></i> <?php echo htmlspecialchars($row['4']); ?> Acre</span>
                                <span><i class="fas fa-building"></i> <?php echo htmlspecialchars($row['5']); ?> Towers</span>
                                <span><i class="fas fa-home"></i> <?php echo htmlspecialchars($row['6']); ?> Units</span>
                            </div>
                            <div class="card-actions">
                                <a href="prodetail.php?pid=<?php echo $row['0']; ?>" class="btn-view">
                                    <i class="fas fa-eye"></i> View Details
                                </a>
                                <button onclick="toggleCompare(<?php echo $row['0']; ?>)" class="btn-compare <?php echo in_array($row['0'], $_SESSION['compare_properties']) ? 'active' : ''; ?>" data-pid="<?php echo $row['0']; ?>">
                                    <i class="fas fa-exchange-alt"></i>
                                </button>
                                <button onclick="removeFromWishlist(<?php echo $row['0']; ?>)" class="btn-remove">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <div class="empty-wishlist">
                <i class="far fa-heart"></i>
                <h3>Your wishlist is empty</h3>
                <p>You haven't shortlisted any properties yet. Browse our collection and save your favorites to see them here.</p>
                <a href="projects.php" class="btn-explore">Explore Properties</a>
            </div>
        <?php endif; ?>
    </div>

    <!-- Compare Bar -->
    <div class="compare-bar" id="compareBar">
        <div>
            <span id="compareCount">0</span> properties selected for comparison
        </div>
        <button id="compareNowBtn" class="btn-view" disabled>
            Compare Now
        </button>
    </div>

    <script>
    // Function to update compare UI
    function updateCompareUI() {
        const compareBar = document.getElementById('compareBar');
        const compareCount = document.querySelectorAll('.btn-compare.active').length;
        const compareCountElement = document.getElementById('compareCount');
        const compareNowBtn = document.getElementById('compareNowBtn');
        
        // Update count
        compareCountElement.textContent = compareCount;
        
        // Show/hide compare bar
        if (compareCount > 0) {
            compareBar.classList.add('visible');
            compareNowBtn.disabled = false;
        } else {
            compareBar.classList.remove('visible');
            compareNowBtn.disabled = true;
        }
    }

    // Toggle property for comparison
    function toggleCompare(pid) {
        const compareBtn = document.querySelector(`.btn-compare[data-pid="${pid}"]`);
        const isActive = compareBtn.classList.contains('active');
        
        fetch('compare_handler.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'action=' + (isActive ? 'remove' : 'add') + '&pid=' + pid
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                compareBtn.classList.toggle('active');
                updateCompareUI();
            } else {
                alert('Error: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while updating comparison.');
        });
    }

    // Remove from wishlist
    function removeFromWishlist(pid) {
        if (confirm('Are you sure you want to remove this property from your wishlist?')) {
            fetch('shortlist_handler.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'action=remove&pid=' + pid
            })
            .then(response => response.json())
            .then(data => {
                if(data.success) {
                    // Remove the card from UI
                    const card = document.querySelector(`[onclick="removeFromWishlist(${pid})"]`).closest('.wishlist-card');
                    card.style.transform = 'scale(0.9)';
                    card.style.opacity = '0';
                    setTimeout(() => {
                        card.remove();
                        // If no cards left, show empty state
                        if (document.querySelectorAll('.wishlist-card').length === 0) {
                            location.reload();
                        }
                    }, 300);
                    
                    // Also remove from compare if it was selected
                    const compareBtn = document.querySelector(`.btn-compare[data-pid="${pid}"]`);
                    if (compareBtn && compareBtn.classList.contains('active')) {
                        toggleCompare(pid);
                    }
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while removing the property.');
            });
        }
    }

    // Compare now button click
    document.getElementById('compareNowBtn').addEventListener('click', function() {
        const compareCount = document.querySelectorAll('.btn-compare.active').length;
        if (compareCount > 1) {
            window.location.href = 'compare.php';
        } else {
            alert('Please select at least 2 properties to compare');
        }
    });

    // Initialize compare UI
    document.addEventListener('DOMContentLoaded', function() {
        updateCompareUI();
    });
    </script>

    <?php include("include/footer.php"); ?>
</body>
</html>