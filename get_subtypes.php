<?php
$projectType = $_GET['project_type'];
$result = [];

if ($projectType === 'residential') {
    $result = ['1 BHK', '2 BHK', '3 BHK', '4 BHK', '5 BHK', '2.5 BHK'];
} elseif ($projectType === 'commercial') {
    $result = ['Shop', 'Office', 'Restaurant', 'Studio'];
} elseif ($projectType === 'plotting') {
    $result = ['Non Agriculture', 'Commercial', 'Residential Zone'];
}

echo json_encode($result);
