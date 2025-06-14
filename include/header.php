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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/headercss.css">
    
</head>
<style>
    .navbar-wishlist, .navbar-login {
        display: inline-block;
        padding: 8px 15px;
        border-radius: 4px;
        font-weight: 500;
        transition: all 0.3s ease;
        margin-left: 10px;
    }

    /* Wishlist button */
    .navbar-wishlist {
        background-color: #A8894D;
        color: #050F17 !important;
        border: 1px solid #A8894D;
    }

    .navbar-wishlist:hover {
        background-color: transparent;
        color: #A8894D !important;
    }

    /* Login button */
    .navbar-login {
        background-color: #2a3b47;
        color: white !important;
        border: 1px solid #2a3b47;
    }

    .navbar-login:hover {
        background-color: #3a4b57;
        color: white !important;
    }

    /* Logged in user button */
    .navbar-login.logged-in {
        background-color: #4CAF50;
        border-color: #4CAF50;
    }

    .navbar-login.logged-in:hover {
        background-color: #45a049;
    }

    /* Mobile view adjustments */
    @media (max-width: 768px) {
        .navbar-wishlist, .navbar-login {
            display: block;
            width: calc(100% - 40px);
            margin: 10px 20px;
            text-align: center;
        }
        
        /* Make sure these buttons stand out in mobile menu */
        .navbar-menu > li:last-child,
        .navbar-menu > li:nth-last-child(2) {
            border-bottom: none;
            padding: 10px 0;
        }
    }
    .dropdown-sub .dropdown-menu-a {
    color: white !important; /* Force override */
    opacity: 1 !important;
    pointer-events: auto !important;
}


</style>
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
                                <a class="dropdown-menu-a">Commercial Project</a>

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
            <a href="profile.php" class="navbar-login logged-in"><i class="fas fa-user"></i> <?php echo $_SESSION['user_name']; ?></a>
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
</html><?php 
// Add this at the VERY TOP of your header.php file
require_once __DIR__ . '/auth.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/headercss.css">
    
</head>
<style>
    /* Add these styles to your headercss.css file */

/* Mobile Menu Toggle Button */
.navbar-toggle {
    display: none; /* Hidden by default on desktop */
    background: none;
    border: none;
    color: white;
    font-size: 24px;
    cursor: pointer;
    padding: 10px;
    z-index: 1001;
}

/* Mobile menu styles */
@media (max-width: 768px) {
    .navbar-toggle {
        display: block; /* Show on mobile */
    }
    
    .navbar-menu-container {
        position: fixed;
        top: 120px;
        left: 0;
        width: 100%;
        height: calc(100vh - 120px);
        background-color: #050F17;
        transform: translateX(-100%);
        transition: transform 0.3s ease;
        overflow-y: auto;
        z-index: 1000;
        padding: 20px 0;
    }
    
    .navbar-menu-container.show {
        transform: translateX(0);
    }
    
    .navbar-menu {
        flex-direction: column;
        width: 100%;
    }
    
    .navbar-menu > li {
        width: 100%;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .navbar-menu > li > a {
        padding: 15px 20px;
        display: block;
    }
    
    /* Dropdown styles for mobile */
    .dropdown-menu {
        position: static;
        display: none;
        width: 100%;
        box-shadow: none;
        padding-left: 20px;
        background-color: rgba(0, 0, 0, 0.2);
    }
    
    .dropdown.active > .dropdown-menu {
        display: block;
    }
    
    .sub-dropdown-menu {
        position: static;
        display: none;
        padding-left: 20px;
    }
    
    /* Dropdown indicators */
    .dropdown > a::after {
        content: '+';
        float: right;
        margin-left: 8px;
    }
    
    .dropdown.active > a::after {
        content: '-';
    }
}
</style>
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

            <!-- Toggle Button for Mobile - Updated with icon -->
            <button class="navbar-toggle" id="navbarToggle" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Navbar Menu -->
            <div class="navbar-menu-container" id="navbarMenuContainer">
                <ul class="navbar-menu" id="navbarMenu">
                    <!-- Your existing menu items remain exactly the same -->
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
                                <a class="dropdown-menu-a">Commercial Project</a>
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
                            <a href="profile.php" class="navbar-login"><i class="fas fa-user"></i> <?php echo $_SESSION['user_name']; ?></a>
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


<script>
    // Update your existing JavaScript with this toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.getElementById('navbarToggle');
    const menuContainer = document.getElementById('navbarMenuContainer');
    
    // Toggle mobile menu
    toggleButton.addEventListener('click', function(e) {
        e.stopPropagation();
        menuContainer.classList.toggle('show');
        toggleButton.classList.toggle('active');
        
        // Update the icon
        const icon = toggleButton.querySelector('i');
        if (menuContainer.classList.contains('show')) {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
        } else {
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
        if (!menuContainer.contains(e.target) && e.target !== toggleButton) {
            menuContainer.classList.remove('show');
            toggleButton.classList.remove('active');
            const icon = toggleButton.querySelector('i');
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }
    });
    
    // Rest of your existing JavaScript remains the same
    // ...
});
</script>

</body>
</html>