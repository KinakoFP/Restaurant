
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Connexion"; ?></title>
    <link rel="stylesheet" href="../Assets/css/style.css">
    <link rel="stylesheet" href="../Assets/css/login.css">
    <link rel="stylesheet" href="../Assets/css/nav.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
<nav class="nav">
    <div class="nav-logo">
        <p>Restaurant</p>
    </div>
    <div class="nav-button">
        <form action="login.php" method="post">
            <button class="btn white-btn" id="loginBtn" type="submit">Connexion</button>
            <button class="btn" id="registerBtn" type="button" onclick="redirectToJoin()">Inscription</button>
        </form>
    </div>
    <div class="nav-menu-btn">
        <i class="bx bx-menu" onclick="myMenuFunction()"></i>
    </div>
</nav>

<div class="wrapper">
    <form action="../routes/routes.php?route=connexion" method="post">
        <h1>Connexion</h1>
        <div class="input-box">
            <input type="mail" name="mail" placeholder="Email" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="password" name="password" placeholder="Mot de passe" required>
            <i class='bx bxs-lock-alt'></i>
        </div>
        <div class="remember-forgot">
            <label><input type="checkbox" name="remember">Se souvenir de moi</label>
            <a href="#">Mot de passe oublié</a>
        </div>
        <?php
            if (isset($_GET['error'])) {
                echo '<div class="error-popup">' . htmlspecialchars($_GET['error']) . '</div>';
            }
        ?>
        <button type="submit" class="btn">Connexion</button>
    </form>
</div>
<script src="../Assets/js/script.js"></script>

</body>
</html>
