<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realestatephpknow";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$name = isset($_POST['name']) ? $_POST['name'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;
$contact = isset($_POST['contact']) ? $_POST['contact'] : NULL;
$city = isset($_POST['city']) ? $_POST['city'] : NULL;
$location = isset($_POST['location']) ? $_POST['location'] : NULL;
$project_name = isset($_POST['project_name']) ? $_POST['project_name'] : NULL;
$total_floor = isset($_POST['total_floor']) ? $_POST['total_floor'] : NULL;
$total_unit = isset($_POST['total_unit']) ? $_POST['total_unit'] : NULL;
$carpet_area = isset($_POST['carpet_area']) ? $_POST['carpet_area'] : NULL;
$rent_per_month = isset($_POST['rent_per_month']) ? $_POST['rent_per_month'] : NULL;
$usp = isset($_POST['usp']) ? $_POST['usp'] : NULL;
$project_type = isset($_POST['project_type']) ? $_POST['project_type'] : NULL;
$overview = isset($_POST['overview']) ? $_POST['overview'] : NULL;

// Prepare SQL statement
$sql = "INSERT INTO  rent (name, email, contact, city, location, project_name, total_floor, total_unit, carpet_area, rent_per_month, usp, project_type, overview) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssiiidsss", $name, $email, $contact, $city, $location, $project_name, $total_floor, $total_unit, $carpet_area, $rent_per_month, $usp, $project_type, $overview);

if ($stmt->execute()) {
    echo "Form submitted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
