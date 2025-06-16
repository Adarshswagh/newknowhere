<?php
require_once 'config.php';
require_once 'include/auth.php';

// Ensure user is logged in
if (!isLoggedIn()) {
    echo json_encode(['success' => false, 'message' => 'Please login to shortlist properties']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    $pid = intval($_POST['pid'] ?? 0);
    $userId = $_SESSION['user_id'];
    
    if ($action === 'shortlist' && $pid > 0) {
        // Check if already shortlisted
        $check = mysqli_query($con, "SELECT * FROM user_wishlist WHERE user_id = $userId AND property_id = $pid");
        
        if (mysqli_num_rows($check) > 0) {
            echo json_encode(['success' => false, 'message' => 'Property already in your wishlist']);
        } else {
            // Add to wishlist
            $insert = mysqli_query($con, "INSERT INTO user_wishlist (user_id, property_id, created_at) VALUES ($userId, $pid, NOW())");
            
            if ($insert) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false, 'message' => 'Database error']);
            }
        }
    } 
    // Add the remove action handler here
    elseif ($action === 'remove' && $pid > 0) {
        $delete = mysqli_query($con, "DELETE FROM user_wishlist WHERE user_id = $userId AND property_id = $pid");
        
        if ($delete) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Database error']);
        }
        exit();
    }
    else {
        echo json_encode(['success' => false, 'message' => 'Invalid request']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>