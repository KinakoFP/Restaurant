<?php

function loginUser() {
    require_once "../Model/user.php"; // Assurez-vous que ce fichier contient la classe User avec les méthodes appropriées
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $mail = trim($_POST['mail']);
        $password = trim($_POST['password']);

        // Vérifications des champs
        if (empty($mail) || empty($password)) {
            echo "Erreur : Tous les champs doivent être remplis.";
            exit();
        }

        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            echo "Erreur : Format d'email invalide.";
            exit();
        }

        $user = new User();
        $userData = $user->getUserByEmail($mail);

        if (!$userData) {
            echo "Erreur : Utilisateur non trouvé.";
            exit();
        }

        // Vérification du mot de passe haché
        if (!password_verify($password, $userData['password'])) {
            echo "Erreur : Mot de passe incorrect.";
            exit();
        }

        // Vérification si l'utilisateur est actif (si une colonne "status" existe dans la BDD)
        if (isset($userData['status']) && $userData['status'] !== 'active') {
            echo "Erreur : Compte inactif. Contactez un administrateur.";
            exit();
        }

        // Démarrer la session utilisateur
        $_SESSION['user_id'] = $userData['id'];
        $_SESSION['username'] = $userData['username'];
        $_SESSION['email'] = $userData['email'];

        // Redirection après connexion
        header("Location: ../pipi.php");
        exit();
    }
}
?>
