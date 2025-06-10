<?php
include 'config.php';

if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

$error = '';
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['reset_request'])) {
    $email = trim($_POST['email']);

    if (empty($email)) {
        $error = "Email is required.";
    } else {
        // Check if email exists
        $query = "SELECT id FROM users WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Generate reset token and expiry
            $token = bin2hex(random_bytes(32));
            $expiry = date("Y-m-d H:i:s", time() + 3600); // 1 hour expiry
            
            $query = "UPDATE users SET reset_token = ?, token_expiry = ? WHERE email = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("sss", $token, $expiry, $email);
            
            if ($stmt->execute()) {
                // In a real application, you would send an email with the reset link
                $reset_link = "http://yourdomain.com/reset_password.php?token=$token";
                $success = "Password reset link has been sent to your email (simulated).";
                // For demo purposes, we'll display the link
                $success .= "<br>Demo reset link: <a href='$reset_link'>$reset_link</a>";
            } else {
                $error = "Error generating reset token. Please try again.";
            }
        } else {
            $error = "No account found with that email.";
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate - Forgot Password</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 400px; margin: 0 auto; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input[type="email"] { width: 100%; padding: 8px; box-sizing: border-box; }
        button { padding: 10px 15px; background-color: #17a2b8; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #138496; }
        .error { color: red; margin-bottom: 15px; }
        .success { color: green; margin-bottom: 15px; }
        .links { margin-top: 20px; }
    </style>
</head>
<body>
    <h1>Forgot Password</h1>
    
    <?php if (!empty($error)): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>
    
    <?php if (!empty($success)): ?>
        <div class="success"><?php echo $success; ?></div>
    <?php endif; ?>

    <form method="POST">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        
        <button type="submit" name="reset_request">Send Reset Link</button>
    </form>

    <div class="links">
        <a href="login.php">Back to Login</a>
    </div>
</body>
</html>