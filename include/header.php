<?php 
// Add this at the VERY TOP of your header.php file
require_once __DIR__ . '/auth.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
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
                <span></span>
                <span></span>
                <span></span>
            </button>

            <!-- Navbar Menu -->
            <div class="navbar-menu-container" id="navbarMenuContainer">
                <ul class="navbar-menu" id="navbarMenu">
                    <li><a href="index.php">Home</a></li>
                    
                    <li class="dropdown">
                        <a href="#">About <span class="dropdown-arrow"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-menu-a" href="about.php">About Us</a></li>
                            <li><a class="dropdown-menu-a" href="gallery.php">Our Gallery</a></li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="properties.php">Property <span class="dropdown-arrow"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-menu-a" href="residential.php">Residential Project</a></li>
                            <li class="dropdown-sub">
                                <a class="dropdown-menu-a" style = "color:white;">Commercial Project <span class="dropdown-arrow"></span></a>
                                <ul class="sub-dropdown-menu">
                                    <li><a href="commercial.php">Buy</a></li>
                                    <li><a href="commercialleasing.php">Leasing</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-menu-a" href="plotting.php">Plotting Project</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#">Cities <span class="dropdown-arrow"></span></a>
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
                        <a href="#">Services <span class="dropdown-arrow"></span></a>
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
                    
                    <li><a href="Emicalculator.php">EMI Calculator</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="compare.php" class="navbar-compare">COMPARE</a></li>

                    <li class="dropdown">
                        <?php if (isLoggedIn()): ?>
                            <a href="#"><?php echo $_SESSION['user_name']; ?> <span class="dropdown-arrow"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-menu-a" href="profile.php">Profile</a></li>
                                <li><a class="dropdown-menu-a" href="logout.php">Logout</a></li>
                            </ul>
                        <?php else: ?>
                            <a href="login.php">Login</a>
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
            
            // Close all dropdowns when menu is closed
            if (!menuContainer.classList.contains('show')) {
                document.querySelectorAll('.dropdown-menu, .sub-dropdown-menu').forEach(menu => {
                    menu.classList.remove('show');
                });
                document.querySelectorAll('.dropdown, .dropdown-sub').forEach(item => {
                    item.classList.remove('active');
                });
            }
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!menuContainer.contains(e.target) && e.target !== toggleButton) {
                toggleButton.classList.remove('active');
                menuContainer.classList.remove('show');
                
                // Close all dropdowns
                document.querySelectorAll('.dropdown-menu, .sub-dropdown-menu').forEach(menu => {
                    menu.classList.remove('show');
                });
                document.querySelectorAll('.dropdown, .dropdown-sub').forEach(item => {
                    item.classList.remove('active');
                });
            }
        });

        // Handle dropdowns on desktop
        function setupDesktopDropdowns() {
            dropdowns.forEach(dropdown => {
                const link = dropdown.querySelector('a');
                const menu = dropdown.querySelector('.dropdown-menu');
                
                // Remove all click events first
                link.removeEventListener('click', handleMobileClick);
                dropdown.removeEventListener('mouseenter', showMenu);
                dropdown.removeEventListener('mouseleave', hideMenu);
                
                // Add hover events for desktop
                dropdown.addEventListener('mouseenter', showMenu);
                dropdown.addEventListener('mouseleave', hideMenu);
            });

            // Handle sub-dropdowns
            subDropdowns.forEach(subDropdown => {
                const link = subDropdown.querySelector('a');
                const menu = subDropdown.querySelector('.sub-dropdown-menu');
                
                subDropdown.addEventListener('mouseenter', () => {
                    menu.style.display = 'block';
                    subDropdown.classList.add('active');
                });
                
                subDropdown.addEventListener('mouseleave', () => {
                    menu.style.display = 'none';
                    subDropdown.classList.remove('active');
                });
            });
        }

        // Handle dropdowns on mobile
        function setupMobileDropdowns() {
            dropdowns.forEach(dropdown => {
                const link = dropdown.querySelector('a');
                const menu = dropdown.querySelector('.dropdown-menu');
                
                // Remove all hover events first
                dropdown.removeEventListener('mouseenter', showMenu);
                dropdown.removeEventListener('mouseleave', hideMenu);
                link.removeEventListener('click', handleMobileClick);
                
                // Add click event for mobile
                if (link.getAttribute('href') !== '#') {
                    link.addEventListener('click', function(e) {
                        if (window.innerWidth <= 768) {
                            // If this is a link that should navigate, don't prevent default
                            return;
                        }
                    });
                }
                
                link.addEventListener('click', handleMobileClick);
            });

            // Handle sub-dropdowns on mobile
            subDropdowns.forEach(subDropdown => {
                const link = subDropdown.querySelector('a');
                const menu = subDropdown.querySelector('.sub-dropdown-menu');
                
                link.addEventListener('click', function(e) {
                    if (window.innerWidth <= 768) {
                        e.preventDefault();
                        e.stopPropagation();
                        menu.classList.toggle('show');
                        subDropdown.classList.toggle('active');
                    }
                });
            });
        }

        function showMenu() {
            if (window.innerWidth > 768) {
                const menu = this.querySelector('.dropdown-menu');
                if (menu) {
                    menu.style.display = 'block';
                    this.classList.add('active');
                }
            }
        }

        function hideMenu() {
            if (window.innerWidth > 768) {
                const menu = this.querySelector('.dropdown-menu');
                if (menu) {
                    menu.style.display = 'none';
                    this.classList.remove('active');
                }
            }
        }

        function handleMobileClick(e) {
            if (window.innerWidth <= 768) {
                // Only prevent default for dropdown triggers
                if (this.parentElement.classList.contains('dropdown') || 
                    this.parentElement.classList.contains('dropdown-sub')) {
                    e.preventDefault();
                }
                e.stopPropagation();
                const menu = this.parentElement.querySelector('.dropdown-menu');
                if (menu) {
                    menu.classList.toggle('show');
                    this.parentElement.classList.toggle('active');
                }
            }
        }

        // Initialize based on screen size
        function handleResize() {
            if (window.innerWidth > 768) {
                setupDesktopDropdowns();
                // Ensure menu is visible on desktop
                menuContainer.classList.remove('show');
                toggleButton.classList.remove('active');
                // Reset all dropdowns
                document.querySelectorAll('.dropdown-menu, .sub-dropdown-menu').forEach(menu => {
                    menu.style.display = '';
                    menu.classList.remove('show');
                });
                document.querySelectorAll('.dropdown, .dropdown-sub').forEach(item => {
                    item.classList.remove('active');
                });
            } else {
                setupMobileDropdowns();
                // Hide all dropdowns on mobile by default
                document.querySelectorAll('.dropdown-menu, .sub-dropdown-menu').forEach(menu => {
                    menu.style.display = 'none';
                    menu.classList.remove('show');
                });
            }
        }

        // Set initial state
        handleResize();

        // Update on resize
        window.addEventListener('resize', handleResize);
    });
</script>


</body>
</html>