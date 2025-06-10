<?php
header('Content-Type: application/json');

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realestatephpknow";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["success" => false, "error" => "Connection failed: " . $conn->connect_error]));
}

// Check if all required fields are set
if (!isset($_POST['name'], $_POST['email'], $_POST['contact'], $_POST['location'], $_POST['message'])) {
    echo json_encode(["success" => false, "error" => "Missing required fields"]);
    exit();
}

// Get form data from $_POST
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$contact = trim($_POST['contact']);
$location = trim($_POST['location']);
$message = trim($_POST['message']);

// Prepare SQL query
$sql = "INSERT INTO rent_agreement (name, email, contact, location, message) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $name, $email, $contact, $location, $message);

if ($stmt->execute()) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => $stmt->error]);
}

// Close connections
$stmt->close();
$conn->close();
?>
