<?php
require_once 'include/auth.php';
require_once 'config.php';

if (!isLoggedIn()) {
    echo json_encode(['success' => false, 'message' => 'Please login to compare properties']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    
    if (!isset($_SESSION['compare_properties'])) {
        $_SESSION['compare_properties'] = array();
    }
    
    if ($action === 'add') {
        $pid = intval($_POST['pid'] ?? 0);
        if (!in_array($pid, $_SESSION['compare_properties'])) {
            $_SESSION['compare_properties'][] = $pid;
        }
    } elseif ($action === 'remove') {
        $pid = intval($_POST['pid'] ?? 0);
        $_SESSION['compare_properties'] = array_diff($_SESSION['compare_properties'], [$pid]);
    } elseif ($action === 'clear') {
        $_SESSION['compare_properties'] = array();
    }
    
    echo json_encode(['success' => true, 'count' => count($_SESSION['compare_properties'])]);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>