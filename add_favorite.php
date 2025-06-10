<?php
session_start();
$conn = new mysqli("localhost", "root", "", "realestatephp");

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $project_id = $_POST['project_id'];
    $project_type = $_POST['project_type'];

    // Check if the user already has 5 favorites
    $stmt = $conn->prepare("SELECT COUNT(*) FROM favorites WHERE user_id = ?");
    $stmt->bind_param("i", $user_id);
    
    // Execute the count query
    if (!$stmt->execute()) {
        echo "Error executing query: " . $stmt->error;
        exit;
    }
    
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close(); // Close the statement after fetching

    if ($count >= 5) {
        echo "You can only have a maximum of 5 favorite projects.";
        exit;
    }

    // Insert into favorites
    $stmt = $conn->prepare("INSERT INTO favorites (user_id, project_id, project_type) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $user_id, $project_id, $project_type);

    // Execute the insert query
    if ($stmt->execute()) {
        echo "Project added to favorites!";
        header("Location: compare1.php"); // Redirect to comparison page
        exit; // Ensure no further code is executed after redirect
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close(); // Close the statement
} else {
    echo "User is not logged in.";
}

$conn->close(); // Close the database connection
?>
