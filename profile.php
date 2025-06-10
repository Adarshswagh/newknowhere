<?php
require_once 'include/auth.php';
redirectIfNotLoggedIn();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <!-- Include your CSS -->
</head>
<body>
    <div class="profile-container">
        <h2>Welcome, <?php echo $_SESSION['user_name']; ?></h2>
        <p>Email: <?php echo $_SESSION['user_email']; ?></p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>