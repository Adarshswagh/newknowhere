<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
								
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Map</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
</head>
<body>

<div class="container mt-5">
    <h2>Search Properties</h2>
    <form id="property-search-form">
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" id="city" name="city" class="form-control" placeholder="Enter city">
        </div>
        <div class="form-group">
            <label for="location">Location:</label>
            <select id="location" name="location" class="form-control">
                <option value="">Select location</option>
            </select>
        </div>
        <div class="form-group">
            <label for="property_type">Property Type:</label>
            <select id="property_type" name="property_type" class="form-control">
                <option value="">Select property type</option>
                <option value="apartment">Apartment</option>
                <option value="villa">Villa</option>
                <option value="office">Office</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>

    <!-- Google Map -->
    <div id="map" style="width: 100%; height: 500px;"></div>
</div>

<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: {lat: 18.5204, lng: 73.8567}  // Default to Pune
        });

        // Array to store property markers
        var markers = [];

        // Function to add marker for each property
        function addMarker(property) {
            var marker = new google.maps.Marker({
                position: {lat: parseFloat(property.lat), lng: parseFloat(property.lng)},
                map: map,
                title: property.title
            });

            // Add hover event to show title
            var infowindow = new google.maps.InfoWindow({
                content: property.title
            });
            marker.addListener('mouseover', function() {
                infowindow.open(map, marker);
            });
            marker.addListener('mouseout', function() {
                infowindow.close();
            });

            // Add click event to redirect to property detail
            marker.addListener('click', function() {
                window.location.href = "propertydetail.php?pid=" + property.id;
            });

            markers.push(marker);
        }

        // Function to clear all markers
        function clearMarkers() {
            markers.forEach(marker => marker.setMap(null));
            markers = [];
        }

        // Handle city input and dynamic location dropdown
        $('#city').on('input', function() {
            var city = $(this).val();
            $.ajax({
                url: 'getLocations.php',
                type: 'POST',
                data: {city: city},
                success: function(response) {
                    $('#location').html(response);
                }
            });
        });

        // Handle form submission
        $('#property-search-form').on('submit', function(e) {
            e.preventDefault();

            var city = $('#city').val();
            var location = $('#location').val();
            var propertyType = $('#property_type').val();

            $.ajax({
                url: 'getProperties.php',
                type: 'POST',
                dataType: 'json',
                data: {city: city, location: location, property_type: propertyType},
                success: function(properties) {
                    clearMarkers();  // Clear existing markers

                    // Add new markers for filtered properties
                    properties.forEach(function(property) {
                        addMarker(property);
                    });
                }
            });
        });
    }
</script>

</body>
</html>

<?php
// Close the database connection
mysqli_close($con);
?>
