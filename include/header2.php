<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <style>
        /* Reset some default styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Container for the header */
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            max-width: 1400px;
            margin: auto;
        }

        /* Logo styling */
        .logo img {
            height: 50px;
            width: auto; /* Make sure the logo scales properly */
        }

        /* Navigation styling */
        nav ul {
            list-style-type: none;
            display: flex;
            gap: 20px;
        }

        nav ul li {
            position: relative;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            transition: background-color 0.3s;
        }

        nav ul li a:hover {
            background-color: #555;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #444;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            min-width: 160px;
        }

        .dropdown-content a {
            color: #fff;
            padding: 10px;
            display: block;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .dropdown-content a:hover {
            background-color: #666;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .compare-btn {
            background-color: #ff9900;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .compare-btn:hover {
            background-color: #e68a00;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                padding: 10px;
            }

            nav ul {
                flex-direction: column;
                gap: 10px;
                display: none;
                width: 100%;
            }

            nav ul.show {
                display: flex;
            }

            .navbar-toggle {
                display: block;
                cursor: pointer;
                background-color: #444;
                padding: 10px;
                border: none;
                color: #fff;
                font-size: 18px;
                border-radius: 5px;
            }

            .navbar-menu-container {
                display: none;
            }

            .navbar-menu-container.show {
                display: block;
            }

            .dropdown-arrow {
                display: none;
            }
        }

        /* Navbar Toggle Button */
        .navbar-toggle {
            display: none;
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <div class="logo">
            <img src="images/logo/logomain.png" alt="Logo">
        </div>
        <button class="navbar-toggle">☰</button>
        <nav class="navbar-menu-container">
            <ul>
                <li><a href="#">Home</a></li>
                <li class="dropdown">
                    <a href="#">Projects</a>
                    <ul class="dropdown-content">
                        <li><a href="#">Residential</a></li>
                        <li><a href="#">Commercial</a></li>
                        <li><a href="#">Plotting</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Services</a>
                    <ul class="dropdown-content">
                        <li><a href="#">Serv1</a></li>
                        <li><a href="#">Serv2</a></li>
                        <li><a href="#">Serv3</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Commercial</a>
                    <ul class="dropdown-content">
                        <li><a href="#">Buy</a></li>
                        <li><a href="#">Sell</a></li>
                    </ul>
                </li>
                <li><a href="#">EMI Calculator</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#" class="compare-btn">Compare</a></li>
            </ul>
        </nav>
    </div>
</header>

<script>
    // Toggle Navbar for Mobile
    const toggleButton = document.querySelector('.navbar-toggle');
    const menuContainer = document.querySelector('.navbar-menu-container');

    // Toggle the mobile navbar menu
    toggleButton.addEventListener('click', () => {
        menuContainer.classList.toggle('show');
    });
</script>

</body>
</html>
