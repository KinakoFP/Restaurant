<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Connexion"; ?></title>
    <link rel="icon" href="img/nomiPdp.webp" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/nav.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
<nav class="nav">
    <div class="nav-logo">
        <p>NOMIKAI</p>
    </div>
    <div class="nav-menu" id="navMenu">
        <ul>
            <li><a href="index.php?page=home" id="change-background-home" data-page="home" class="link">Accueil</a></li>
            <li><a href="index.php?page=bots" id="change-background-bots" data-page="bots" class="link">Bots</a></li>
            <li><a href="index.php?page=shop" data-page="shop" class="link">Shop</a></li>
            <li><a href="index.php?page=about" data-page="about" class="link">About</a></li>
        </ul>
    </div>
    <div class="nav-button">
        <form action="login.php" method="post">
            <button class="btn white-btn" id="loginBtn" type="submit">Connexion</button>
            <button class="btn" id="registerBtn" type="button" onclick="redirectToJoin()">Rejoindre</button>
        </form>
    </div>
    <div class="nav-menu-btn">
        <i class="bx bx-menu" onclick="myMenuFunction()"></i>
    </div>
</nav>

<div class="wrapper" id="connexion">
    <button class="btn btn-primary" type="button">Button</button>
</div>
</body>
</html>