<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Management</title>
</head>
<body>
    <h1>Driver Management System</h1>

    <form method="POST" action="conducteurs.php">
        <label for="driverName">Driver Name:</label>
        <input type="text" id="driverName" name="driverName" required>
        <label for="driverLicense">Driver License:</label>
        <input type="text" id="driverLicense" name="driverLicense" required>
        <input type="submit" value="Add Driver">
    </form>

    <h2>List of Drivers</h2>
    <ul>
        <?php
            // Sample array of drivers
            $drivers = [];
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $driverName = $_POST['driverName'];
                $driverLicense = $_POST['driverLicense'];
                // Add driver to the list (in a real application, you would save this to a database)
                $drivers[] = ['name' => $driverName, 'license' => $driverLicense];
            }
            // Display the drivers
            foreach ($drivers as $driver) {
                echo '<li>' . htmlspecialchars($driver['name']) . ' (License: ' . htmlspecialchars($driver['license']) . ')</li>';
            }
        ?>
    </ul>
</body>
</html>