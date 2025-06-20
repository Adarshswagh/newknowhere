<?php
require_once 'config.php';
require_once 'include/auth.php';

if (isLoggedIn()) {
    header("Location: profile.php");
    exit();
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = $_POST['password'];
    
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($con, $query);
    
    if ($user = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];
            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid password";
        }
    } else {
        $error = "Email not found. <a href='register.php'>Register here</a>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Knowhere</title>
    <link rel="stylesheet" href="style.css">
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body, html {
    height: 100%;
    font-family: 'lexend', sans-serif;
    color: #fff;
    background:rgb(0, 0, 0);
}

.container {
    display: flex;
    height: 100vh;
}


.left-panel {
    width: 70%;
    background: #000000 url('images/sale-rent.png') no-repeat center center;
    background-size: cover;
    color: #fff;
    padding: 40px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    border-right: 5px solid #a8894d;
    position: relative;  /* This is important for the overlay */
}

.left-panel::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: #00000080;  /* Black with 50% opacity */
    z-index: 1;  /* Places it above the background but below the content */
}

.left-panel > * {
    position: relative;
    z-index: 2;  /* Ensuring content is above the overlay */
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
    color: #a8894d;
}

.text p {
    font-size: 14px;
    line-height: 1.6;
    color: #fff;
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
    color: #a8894d;
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

.error {
    color: red;
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
    color: #000000;
    background: #fff;
}

.right-panel .remember-forgot {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 14px;
    margin: 10px 0;
    color: #555;
}

.right-panel .remember-forgot input {
    margin-right: 5px;
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

.social-login {
    margin-top: 20px;
}

.social-login button {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    margin: 10px 0;
    padding: 10px;
    border: 1px solid #a8894d;
    border-radius: 8px;
    background: #fff;
    color: #a8894d;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s ease, color 0.3s ease;
}

.social-login button:hover {
    background: #a8894d;
    color: #fff;
}

.right-panel .register {
    margin-top: 20px;
    font-size: 14px;
    color: #555;
}

.right-panel .register a {
    color: #a8894d;
    font-weight: bold;
    text-decoration: none;
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
    <img src="images/logo/logofm.svg" alt="Knowhere Logo" style="height:40px; border-radius:20px;" />
</div>

        <!-- <div class="text">
            <h2>Manage Properties Efficiently</h2>
            <p>Easily track rent payments, maintenance requests, and tenant communications in one place. Say goodbye to the hassle of manual management.</p>
        </div> -->
    </div>
    <div class="right-panel">
        <h2>Welcome Back to Knowhere!</h2>
        <p>Sign in to your account</p>
        <?php if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST">
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <div class="remember-forgot">
                <label><input type="checkbox" name="remember"> Remember Me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit">Login</button>
        </form>
        <!-- <div class="social-login">
            <button>Sign in with Google</button>
            <button>Sign in with Apple</button>
        </div> -->
        <div class="register">
            Don’t have any account? <a href="register.php">Register</a>
        </div>
    </div>
</div>
</body>
</html>
