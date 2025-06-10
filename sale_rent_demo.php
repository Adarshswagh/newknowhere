<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realestatephpknow";

// Create DB connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check DB connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Receive POST data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$contact = $_POST['contact'] ?? '';
$message = $_POST['message'] ?? '';

// Insert query
$stmt = $conn->prepare("INSERT INTO sale_name_enquiry (name, email, contact, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $contact, $message);

if ($stmt->execute()) {
    echo "Enquiry submitted successfully!";
} else {
    echo "Error saving data: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
