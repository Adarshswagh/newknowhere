<?php
// Assuming connection to database is established
$city = $_GET['city'];
$result = [];

if (!empty($city)) {
    $query = "SELECT DISTINCT project_location FROM (
        SELECT project_location FROM residential_projects WHERE city = ? 
        UNION 
        SELECT project_location FROM commercial_projects WHERE city = ? 
        UNION 
        SELECT project_location FROM plotting_projects WHERE city = ?
    ) AS locations";
    
    $stmt = $pdo->prepare($query);
    $stmt->execute([$city, $city, $city]);
    $result = $stmt->fetchAll(PDO::FETCH_COLUMN);
}

echo json_encode($result);
