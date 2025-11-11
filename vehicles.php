<?php
// vehicles.php

$vehicles = [];

// Function to add a vehicle
function addVehicle($name) {
    global $vehicles;
    $vehicles[] = $name;
}

// Function to list vehicles
function listVehicles() {
    global $vehicles;
    return $vehicles;
}

// Add sample vehicles
addVehicle('Car');
addVehicle('Truck');
addVehicle('Motorcycle');

// HTML to display vehicles
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Management</title>
</head>
<body>
    <h1>Vehicle Management</h1>
    <h2>Add Vehicle</h2>
    <form method="POST">
        <input type="text" name="vehicle_name" required>
        <button type="submit">Add Vehicle</button>
    </form>

    <h2>List of Vehicles</h2>
    <ul>
        <?php
            $vehiclesList = listVehicles();
            foreach ($vehiclesList as $vehicle) {
                echo '<li>' . htmlspecialchars($vehicle) . '</li>';
            }
        ?>
    </ul>
</body>
</html>
