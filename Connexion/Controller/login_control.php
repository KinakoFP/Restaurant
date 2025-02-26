<?php
require_once "../Model/user.php"; // Assurez-vous que ce fichier contient la classe User avec les méthodes appropriées
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = trim($_POST['mail']);
    $password = trim($_POST['password']);

    // Vérifications des champs
    if (empty($mail) || empty($password)) {
        header("Location:  ../View/login.php?error=" . urlencode("Tous les champs doivent être remplis."));
        exit();
    }

    // Validation du format de l'email
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../View/login.php?error=" . urlencode("Format d'email invalide."));
        exit();
    }

    $user = new User();
    $userData = $user->getUserByEmail($mail);

    if (!$userData) {
        header("Location:  ../View/login.php?error=" . urlencode("Utilisateur non trouvé."));
        exit();
    }

    // Vérification du mot de passe haché
    if (!password_verify($password, $userData['password'])) {
        header("Location:  ../View/login.php?error=" . urlencode("Mot de passe incorrect."));
        exit();
    }

    // Vérification si l'utilisateur est actif (si une colonne "status" existe dans la BDD)
    if (isset($userData['status']) && $userData['status'] !== 'active') {
        header("Location:  ../View/login.php?error=" . urlencode("Compte inactif. Contactez un administrateur."));
        exit();
    }

    // Démarrer la session utilisateur
    $_SESSION['user_id'] = $userData['id'];
    $_SESSION['username'] = $userData['username'];
    $_SESSION['email'] = $userData['email'];

    // Ajouter un indicateur pour savoir si l'utilisateur est connecté
    $_SESSION['logged_in'] = true;

    // Redirection vers la page de bienvenue ou tableau de bord
    header("Location: ../../Back-Office/View/welcome.php"); // Remplacer par la page que tu veux
    exit();
}
?>
