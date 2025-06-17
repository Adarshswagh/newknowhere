<?php 
require_once __DIR__ . '/auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/headercss.css">
</head>
<body>
<header id="header">
    <nav class="navbar">
        <div class="navbar-container">
            <!-- Logo Section -->
            <div class="navbar-logo">
                <a href="index.php">
                    <img src="images/logo/logofm.svg" alt="Mantision Real Estate logo" class="img-fluid logo">
                </a>
            </div>

            <!-- Toggle Button for Mobile -->
            <button class="navbar-toggle" id="navbarToggle" aria-label="Toggle navigation">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>

            <!-- Navbar Menu -->
            <div class="navbar-menu-container" id="navbarMenuContainer">
                <ul class="navbar-menu" id="navbarMenu">
                    <li><a href="index.php">Home</a></li>
                    
                    <li class="dropdown">
                        <a href="#">About</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-menu-a" href="about.php">About Us</a></li>
                            <li><a class="dropdown-menu-a" href="gallery.php">Our Gallery</a></li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="properties.php">Property</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-menu-a" href="residential.php">Residential Project</a></li>
                            <li class="dropdown-sub">
                                <a class="dropdown-menu-a" style ="color:white;">Commercial Project</a>
                                <ul class="sub-dropdown-menu">
                                    <li><a href="commercial.php">Buy</a></li>
                                    <li><a href="commercialleasing.php">Leasing</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-menu-a" href="plotting.php">Plotting Project</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#">Cities</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-menu-a" href="pune.php">Pune</a></li>
                            <li><a class="dropdown-menu-a" href="mumbai.php">Mumbai</a></li>
                            <li><a class="dropdown-menu-a" href="bangalore.php">Bangalore</a></li>
                            <li><a class="dropdown-menu-a" href="nagpur.php">Nagpur</a></li>
                            <li><a class="dropdown-menu-a" href="hyderabad.php">Hyderabad</a></li>
                            <li><a class="dropdown-menu-a" href="goa.php">Goa</a></li>
                            <li><a class="dropdown-menu-a" href="delhi-ncr.php">Delhi-NCR</a></li>
                            <li><a class="dropdown-menu-a" href="ahmedabad.php">Ahmedabad</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#">Services</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-menu-a" href="home-loan.php">Home Loan</a></li>
                            <li><a class="dropdown-menu-a" href="rent.php">Rent Agreement</a></li>
                            <li><a class="dropdown-menu-a" href="sale-rent.php">Sale Or Rent</a></li>
                            <li><a class="dropdown-menu-a" href="bamboo.php">Bamboo products and construction</a></li>
                            <li><a class="dropdown-menu-a" href="construction.php">Construction</a></li>
                            <li><a class="dropdown-menu-a" href="interior.php">Interior</a></li>
                            <li><a class="dropdown-menu-a" href="digital.php">Digital Marketing</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="wishlist.php" class="navbar-wishlist"><i class="fas fa-heart"></i> WISHLIST</a></li>

                    <li class="dropdown">
                        <?php if (isLoggedIn()): ?>
                            <a href="profile.php" class="navbar-login logged-in"><i class="fas fa-user"></i> <?php echo htmlspecialchars($_SESSION['user_name']); ?></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-menu-a" href="profile.php">Profile</a></li>
                                <li><a class="dropdown-menu-a" href="logout.php">Logout</a></li>
                            </ul>
                        <?php else: ?>
                            <a href="login.php" class="navbar-login"><i class="fas fa-user"></i> LOGIN</a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.getElementById('navbarToggle');
        const menuContainer = document.getElementById('navbarMenuContainer');
        const dropdowns = document.querySelectorAll('.dropdown');
        const subDropdowns = document.querySelectorAll('.dropdown-sub');

        // Toggle mobile menu
        toggleButton.addEventListener('click', function(e) {
            e.stopPropagation();
            this.classList.toggle('active');
            menuContainer.classList.toggle('show');
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!menuContainer.contains(e.target) && e.target !== toggleButton) {
                closeAllMenus();
            }
        });

        // Handle dropdown clicks
        dropdowns.forEach(dropdown => {
            const link = dropdown.querySelector('a:first-child');
            const menu = dropdown.querySelector('.dropdown-menu');
            
            // Desktop hover
            dropdown.addEventListener('mouseenter', function() {
                if (window.innerWidth > 768) {
                    this.classList.add('active');
                    menu.style.display = 'block';
                }
            });
            
            dropdown.addEventListener('mouseleave', function() {
                if (window.innerWidth > 768) {
                    this.classList.remove('active');
                    menu.style.display = 'none';
                }
            });
            
            // Mobile click
            link.addEventListener('click', function(e) {
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    e.stopPropagation();
                    dropdown.classList.toggle('active');
                    menu.classList.toggle('show');
                    
                    // Close other dropdowns
                    document.querySelectorAll('.dropdown').forEach(otherDropdown => {
                        if (otherDropdown !== dropdown) {
                            otherDropdown.classList.remove('active');
                            otherDropdown.querySelector('.dropdown-menu').classList.remove('show');
                        }
                    });
                }
            });
        });

        // Handle sub-dropdown clicks
        subDropdowns.forEach(subDropdown => {
            const link = subDropdown.querySelector('a:first-child');
            const menu = subDropdown.querySelector('.sub-dropdown-menu');
            
            // Desktop hover
            subDropdown.addEventListener('mouseenter', function() {
                if (window.innerWidth > 768) {
                    this.classList.add('active');
                    menu.style.display = 'block';
                }
            });
            
            subDropdown.addEventListener('mouseleave', function() {
                if (window.innerWidth > 768) {
                    this.classList.remove('active');
                    menu.style.display = 'none';
                }
            });
            
            // Mobile click
            link.addEventListener('click', function(e) {
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    e.stopPropagation();
                    subDropdown.classList.toggle('active');
                    menu.classList.toggle('show');
                }
            });
        });

        // Handle window resize
        function handleResize() {
            if (window.innerWidth > 768) {
                // Reset mobile menu
                toggleButton.classList.remove('active');
                menuContainer.classList.remove('show');
                
                // Show all dropdowns on desktop (they'll hide on mouseleave)
                document.querySelectorAll('.dropdown, .dropdown-sub').forEach(item => {
                    item.classList.add('active');
                });
            } else {
                // Hide all dropdowns on mobile
                document.querySelectorAll('.dropdown-menu, .sub-dropdown-menu').forEach(menu => {
                    menu.classList.remove('show');
                });
                document.querySelectorAll('.dropdown, .dropdown-sub').forEach(item => {
                    item.classList.remove('active');
                });
            }
        }

        function closeAllMenus() {
            toggleButton.classList.remove('active');
            menuContainer.classList.remove('show');
            document.querySelectorAll('.dropdown-menu, .sub-dropdown-menu').forEach(menu => {
                menu.classList.remove('show');
            });
            document.querySelectorAll('.dropdown, .dropdown-sub').forEach(item => {
                item.classList.remove('active');
            });
        }

        // Initialize
        handleResize();
        window.addEventListener('resize', handleResize);
    });
</script>
</body>
</html>