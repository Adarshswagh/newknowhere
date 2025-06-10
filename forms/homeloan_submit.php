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

// Get form data
$data = json_decode(file_get_contents('php://input'), true);

// Check if data exists
if (!$data) {
    echo json_encode(["success" => false, "error" => "No input data received"]);
    exit;
}

// Safely extract data
$name = isset($data['name']) ? $data['name'] : null;
$email = isset($data['email']) ? $data['email'] : null;
$phone = isset($data['phone']) ? $data['phone'] : null;
$message = isset($data['message']) ? $data['message'] : null;
$loanAmount = isset($data['loanAmount']) ? $data['loanAmount'] : null;
$monthlySalary = isset($data['monthlySalary']) ? $data['monthlySalary'] : null;
$occupationType = isset($data['occupationType']) ? $data['occupationType'] : null;
$chooseCity = isset($data['chooseCity']) ? $data['chooseCity'] : null;

// Validate required fields
// if (!$name || !$email || !$phone || !$loanAmount || !$monthlySalary || !$occupationType || !$chooseCity) {
//     echo json_encode(["success" => false, "error" => "Missing required fields"]);
//     exit;
// }

// Prepare SQL query
$sql = "INSERT INTO home_loan (name, email, contact, message, loan_amount, monthly_net_salary, occupation, city) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssss", $name, $email, $phone, $message, $loanAmount, $monthlySalary, $occupationType, $chooseCity);

if ($stmt->execute()) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => $stmt->error]);
}

// Close connections
$stmt->close();
$conn->close();
?>
