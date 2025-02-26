<?php
require_once '../Model/user.php';

function registerUser() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = new User();
        
        // Vérifie si l'utilisateur existe déjà
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
