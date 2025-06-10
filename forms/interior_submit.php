<?php
header('Content-Type: application/json');

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realestatephpknow";

// Initialize response array
$response = ['success' => false, 'error' => ''];

try {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
    
    // Validate and sanitize inputs
    $required_fields = ['name', 'email', 'contact', 'message', 'type'];
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            throw new Exception("All fields are required");
        }
    }
    
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $contact = $conn->real_escape_string($_POST['contact']);
    $message = $conn->real_escape_string($_POST['message']);
    $type = $conn->real_escape_string($_POST['type']);
    
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("Invalid email format");
    }
    
    // Validate contact number (assuming 10 digits)
    if (!preg_match('/^[0-9]{10}$/', $contact)) {
        throw new Exception("Contact number must be 10 digits");
    }
    
    // Prepare and execute SQL
    $sql = "INSERT INTO interior (name, email, contact, message, type) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    if (!$stmt) {
        throw new Exception("Prepare failed: " . $conn->error);
    }
    
    $stmt->bind_param("sssss", $name, $email, $contact, $message, $type);
    
    if ($stmt->execute()) {
        $response['success'] = true;
    } else {
        throw new Exception("Execute failed: " . $stmt->error);
    }
    
    $stmt->close();
    $conn->close();
    
} catch (Exception $e) {
    $response['error'] = $e->getMessage();
}

echo json_encode($response);
?>