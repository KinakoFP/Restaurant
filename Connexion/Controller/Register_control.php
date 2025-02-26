<?php
require_once '../Model/user.php';

function registerUser() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = trim($_POST['name']);
        $mail = trim($_POST['mail']);
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        // Vérification si les champs sont vides
        if (empty($name) || empty($mail) || empty($username) || empty($password)) {
            echo "Erreur : Tous les champs doivent être remplis.";
            exit();
        }

        // Validation du format de l'email
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            echo "Erreur : Format d'email invalide.";
            exit();
        }

        $user = new User();
        
        // Vérifie si l'utilisateur existe déjà par username ou email
        if ($user->getUserByUsernameOrEmail($username, $mail)) {
            echo "Erreur : L'utilisateur existe déjà.";
            exit();
        }

        // Hachage du mot de passe
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Génération d'un identifiant unique à 11 caractères
        function generateIdent() {
            return substr(bin2hex(random_bytes(6)), 0, 11);
        }        
        $ident = generateIdent();

        // Ajout dans la base de données
        if ($user->addUser($ident, $name, $username, $hashedPassword, $mail)) {
            // Rediriger vers la liste des utilisateurs
            header("Location: index.php?route=utilisateurs");
            exit();
        } else {
            echo "Erreur lors de l'inscription.";
        }
    }
}
?>
