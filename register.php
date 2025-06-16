<?php
require_once 'config.php';
require_once 'include/auth.php';

if (isLoggedIn()) {
    header("Location: profile.php");
    exit();
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    $check = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($check) > 0) {
        $error = "Email already exists. <a href='login.php'>Login here</a>";
    } else {
        $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        if ( mysqli_query($con, $query) ) {
            $_SESSION['user_id'] = mysqli_insert_id($con);
            $_SESSION['user_name'] = $name;
            $_SESSION['user_email'] = $email;
            header("Location: index.php");

            exit();
        } else {
            $error = "Registration failed. Please try again.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Knowhere</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body, html {
            height: 100%;
            font-family: 'Helvetica Neue', Arial, sans-serif;
            color: #fff;
        }
        .container {
            display: flex;
            height: 100vh;
        }
        .left-panel {
    width: 70%;
    background: #000000 url('images/sale-rent.png') no-repeat center center;
    background-size: cover;
    padding: 40px;
    position: relative;
    color: #fff;
    border-right: 5px solid #a8894d;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

        .left-panel::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #00000080;
            z-index: 1;
        }
        .left-panel .branding,
        .left-panel .text {
            position: relative;
            z-index: 2;
        }

        .left-panel .text h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }
        .left-panel .text p {
            font-size: 16px;
            line-height: 1.5;
        }
       .right-panel {
    width: 30%;
    padding: 80px 60px;
    background: #000;  /* Black background */
    color: #fff;       /* White text */
    display: flex;
    flex-direction: column;
    justify-content: center;
}


        .right-panel h2 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .right-panel p,
.right-panel h2 {
    color: #fff;
}

.right-panel .register-link a {
    color: #a8894d;
    font-weight: bold;
    text-decoration: none;
}

        .right-panel form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
       .right-panel input {
    padding: 12px 15px;
    border-radius: 8px;
    border: none;
    font-size: 16px;
    background: #fff;
    color: #000;
}

        .right-panel button {
    background: #a8894d;
    color: #fff;
    padding: 12px 15px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    margin-top: 10px;
    transition: background 0.3s ease;
}

.right-panel button:hover {
    background: #907537;
}

        .right-panel .register-link {
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }
        .right-panel .register-link a {
            color: #a8894d;
            font-weight: bold;
            text-decoration: none;
        }
        .error {
            color: red;
            margin-bottom: 20px;
        }
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            .left-panel, .right-panel {
                width: 100%;
                border-radius: 0;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <div class="branding">
    <img src="images/logo/logofm.svg"  alt="Knowhere Logo" style="height:40px; border-radius:20px;" />
</div>

        </div>
        <div class="right-panel">
            <h2>Create Your Account</h2>
            <!-- <p>Sign up to get started with Real Nest</p> -->
            <?php if ($error): ?>
                <p class="error"><?= $error; ?> </p>
            <?php endif; ?>
            <form method="POST">
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Register</button>
            </form>
            <div class="register-link">
                Already have an account? <a href="login.php">Login here</a>
            </div>
        </div>
    </div>
</body>
</html>
