<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realestatephpknow";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["success" => false, "error" => "Connection failed: " . $conn->connect_error]));
}

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['message'];
$type = $_POST['type'];

$sql = "INSERT INTO bamboo (name, email, contact, message, type) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $name, $email, $contact, $message, $type);

$response = ["success" => $stmt->execute()];

$stmt->close();
$conn->close();

echo json_encode($response);
?>
