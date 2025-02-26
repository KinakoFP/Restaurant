<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: ../../Connexion/View/login.php?error=" . urlencode("Vous devez être connecté pour accéder à cette page."));
    exit();
}

// Récupérer les informations de l'utilisateur depuis la session
$userName = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur votre espace</title>
    <link rel="stylesheet" href="../Assets/css/style.css"> <!-- Votre fichier CSS personnalisé -->
</head>
<body>
    <header>
    <nav class="nav">
    <div class="nav-logo">
        <p>Restaurant</p>
    </div>
    <div class="nav-button">
    <form action="../logout.php" method="post">
        <button class="btn white-btn" id="logoutBtn" type="submit">Déconnexion</button>
    </form>
    </div>
    <div class="nav-menu-btn">
        <i class="bx bx-menu" onclick="myMenuFunction()"></i>
    </div>
</nav>
    </header>

    <main>
    <section class="welcome-section">
        <h1>Bienvenue, <?php echo htmlspecialchars($userName); ?> !</h1>
        <p>Nous sommes ravis de vous voir sur votre espace de travail. Vous pouvez accéder à vos données !</p>

        <div class="welcome-buttons">
            <a href="tarifView.php" class="btn-welcome">Voir les Tarifs</a>
            <a href="ticketView.php" class="btn-welcome">Gérer les Tickets</a>
        </div>
    </section>

    </main>

    <footer>
        <p>&copy; 2025 Tous droits réservés.</p>
    </footer>
</body>
</html>
