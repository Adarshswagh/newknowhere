<?php
session_start();
$conn = new mysqli("localhost", "root", "", "realestatephp");

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "User is not logged in.";
    exit;
}

$user_id = $_SESSION['user_id'];

// Prepare SQL to get favorite projects
$stmt = $conn->prepare("SELECT project_id, project_type FROM favorites WHERE user_id = ?");
$stmt->bind_param("i", $user_id);

// Execute and fetch favorite projects
if ($stmt->execute()) {
    $result = $stmt->get_result();
    $projects = [];

    while ($row = $result->fetch_assoc()) {
        $projects[] = $row;
    }

    $stmt->close();
} else {
    echo "Error fetching favorites: " . $stmt->error;
    exit;
}

// Prepare to retrieve project details
$projectDetails = [];

foreach ($projects as $project) {
    // Initialize the table variable
    $table = '';

    // Determine the table to query based on project type
    switch ($project['project_type']) {
        case 'residential':
            $table = 'residential_projects';
            break;
        case 'commercial':
            $table = 'commercial_projects';
            break;
        case 'plotting':
            $table = 'plotting_projects';
            break;
        default:
            break; // Skip if project type is unknown
    }

    // Only proceed if the table variable is set
    if ($table !== '') {
        // Fetch project details
        $stmt = $conn->prepare("SELECT pid, project_name, project_location FROM $table WHERE pid = ?");
        $stmt->bind_param("i", $project['project_id']);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            while ($detail = $result->fetch_assoc()) {
                $projectDetails[] = $detail;
            }
        } else {
            echo "Error fetching project details: " . $stmt->error;
        }

        $stmt->close();
    }
}

// Display the project details
foreach ($projectDetails as $detail) {
    echo "Project Name: " . $detail['project_name'] . "<br>";
    echo "Location: " . $detail['project_location'] . "<br>";
    echo "<hr>";
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Compare Projects</title>
</head>
<body>

<h2>Comparison List</h2>
<table>
    <thead>
        <tr>
            <th>Project Name</th>
            <th>Location</th>
            <th>Type</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($projects as $project): ?>
            <tr>
                <td><?= htmlspecialchars($project['project_name']) ?></td>
                <td><?= htmlspecialchars($project['location']) ?></td>
                <td><?= htmlspecialchars($project['type']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<h3>Send Inquiry for Selected Projects</h3>
<form id="inquiry-form" method="POST" action="send_inquiry.php">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <input type="tel" name="phone" placeholder="Your Phone" required>
    <textarea name="message" placeholder="Your Message" required></textarea>
    
    <input type="hidden" name="comparisonDetails" value="<?= htmlspecialchars(json_encode($projects)) ?>">
    
    <button type="submit">Send Inquiry</button>
</form>

</body>
</html>
