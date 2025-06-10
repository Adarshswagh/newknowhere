<?php
include("config.php");
$pid = $_GET['id']; // Get the property ID from the query parameter

// Initialize variables
$deleted = false;
$redirectPage = ""; // To store the redirect page dynamically

// Function to delete a property from a given table
function deleteProperty($table, $pid, $con) {
    $sql = "DELETE FROM $table WHERE id = {$pid}";
    return mysqli_query($con, $sql);
}

// Check and delete from residential_projects
$sqlCheck = "SELECT * FROM blogs WHERE id = {$pid}";
$resultCheck = mysqli_query($con, $sqlCheck);
if (mysqli_num_rows($resultCheck) > 0) {
    $redirectPage = "blogview.php"; // Set the redirect page
    $deleted = deleteProperty("blogs", $pid, $con);
}


// Handle the response
if ($deleted) {
    $msg = "<p class='alert alert-success'>Blog Deleted</p>";
} else {
    $msg = "<p class='alert alert-warning'>Blog Not Deleted</p>";
}

// Redirect to the appropriate page (defaulting to propertyview.php if no table is matched)
header("Location: $redirectPage?msg=$msg");

mysqli_close($con);
?>
