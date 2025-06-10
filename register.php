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
        if (mysqli_query($con, $query)) {
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
    <title>Register | Real Nest</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body, html {
            height: 100%;
            font-family: 'Segoe UI', sans-serif;
        }
        .container {
            display: flex;
            height: 100vh;
        }
        .left-panel {
            width: 50%;
            background: url('property.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }
        .left-panel .branding {
            font-size: 24px;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .left-panel .text {
            margin-bottom: 30px;
        }
        .text h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }
        .text p {
            font-size: 14px;
            line-height: 1.6;
        }
        .right-panel {
            width: 50%;
            padding: 80px 60px;
            background: #fff;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .right-panel h2 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .right-panel form {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
        }
        .right-panel input {
            padding: 12px 15px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        .right-panel button {
            background: #2a6df4;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }
        .right-panel .register-link {
            margin-top: 20px;
            font-size: 14px;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            .left-panel, .right-panel {
                width: 100%;
                border-radius: 0;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="left-panel">
        <div class="branding">
            <div style="background:#ffffff33; padding:8px 16px; border-radius:20px;">Real Nest</div>
        </div>
        <div class="text">
            <h2>Manage Properties Efficiently</h2>
            <p>Easily track rent payments, maintenance requests, and tenant communications in one place. Say goodbye to the hassle of manual management.</p>
        </div>
    </div>
    <div class="right-panel">
        <h2>Create Your Account</h2>
        <p>Sign up to get started with Real Nest</p>
        <?php if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
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
