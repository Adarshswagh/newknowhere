<?php
$con = mysqli_connect("localhost", "root", "", "realestate");

if(isset($_POST['city'], $_POST['location'], $_POST['property_type'])) {
    $city = $_POST['city'];
    $location = $_POST['location'];
    $propertyType = $_POST['property_type'];

    $query = mysqli_query($con, "SELECT * FROM property WHERE city='$city' AND location='$location' AND type='$propertyType'");
    
    $properties = [];
    while ($row = mysqli_fetch_array($query)) {
        $properties[] = [
            'id' => $row['0'],
            'title' => $row['1'],
            'lat' => $row['latitude'],  // Replace with your actual column name
            'lng' => $row['longitude']  // Replace with your actual column name
        ];
    }
    echo json_encode($properties);  // Return property data as JSON
}

mysqli_close($con);
?>
