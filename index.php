<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Parc Auto - Province</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>🚗 Gestion Parc Auto</h1>
            <nav>
                <a href="index.php">Accueil</a>
                <a href="vehicules.php">Véhicules</a>
                <a href="conducteurs.php">Conducteurs</a>
                <a href="missions.php">Missions</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <div class="hero">
            <h2>Bienvenue dans le système de gestion du parc automobile</h2>
            <p>Gérez facilement vos véhicules, conducteurs et missions</p>
        </div>

        <div class="stats">
            <div class="stat-card">
                <h3>Véhicules</h3>
                <div class="number">12</div>
                <a href="vehicules.php" class="btn">Gérer</a>
            </div>
            <div class="stat-card">
                <h3>Conducteurs</h3>
                <div class="number">8</div>
                <a href="conducteurs.php" class="btn">Gérer</a>
            </div>
            <div class="stat-card">
                <h3>Missions</h3>
                <div class="number">5</div>
                <a href="missions.php" class="btn">Gérer</a>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Province de Benslimane - Service Informatique</p>
        </div>
    </footer>
</body>
</html>
