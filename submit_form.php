<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("config.php");

// Debug: Log POST data
file_put_contents('debug.log', print_r($_POST, true), FILE_APPEND);

// Check connection
if ($con->connect_error) {
    die("Database error: " . $con->connect_error);
}

// Sanitize inputs
$name = htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8');
$contact = htmlspecialchars($_POST['contact'] ?? '', ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8');

// Validate
if (empty($name)) die("Name is required.");
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) die("Invalid email.");
if (empty($contact) || !preg_match('/^\d{10}$/', $contact)) die("Invalid phone number.");
if (empty($message)) die("Message is required.");

// Insert into DB
$sql = "INSERT INTO form_submissions (name, email, contact, message) VALUES (?, ?, ?, ?)";
$stmt = $con->prepare($sql);
if (!$stmt) die("Database error: " . $con->error);

$stmt->bind_param("ssss", $name, $email, $contact, $message);
if ($stmt->execute()) {
    echo "Form submitted successfully!";
} else {
    echo "Database error: " . $stmt->error;
}

$stmt->close();
$con->close();
?>