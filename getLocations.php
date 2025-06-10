<?php
$con = mysqli_connect("localhost", "root", "", "realestate");

if(isset($_POST['city'])) {
    $city = $_POST['city'];
    $query = mysqli_query($con, "SELECT DISTINCT location FROM property WHERE city='$city'");
    echo "<option value=''>Select location</option>";
    while ($row = mysqli_fetch_array($query)) {
        echo "<option value='".$row['location']."'>".$row['location']."</option>";
    }
}

mysqli_close($con);
?>
