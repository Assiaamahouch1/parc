<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission Management</title>
</head>
<body>
    <h1>Mission Management</h1>

    <form method="POST">
        <label>Mission Name:</label>
        <input type="text" name="mission" required>
        <label>Driver:</label>
        <input type="text" name="driver" required>
        <label>Vehicle:</label>
        <input type="text" name="vehicle" required>
        <button type="submit">Add Mission</button>
    </form>

    <h2>Active Missions</h2>
    <ul>
        <li>Mission A - Driver: John - Vehicle: Car 1</li>
        <li>Mission B - Driver: Jane - Vehicle: Truck 1</li>
    </ul>
</body>
</html>