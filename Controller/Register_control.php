<?php
// connexion_action.php

// Inclure le fichier de connexion à la base de données
require_once 'db.php';

// Vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        // Préparer la requête pour rechercher l'utilisateur dans la base de données
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        // Récupérer l'utilisateur
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Vérifier si l'utilisateur existe et si le mot de passe est correct
        if ($user && password_verify($password, $user['password'])) {
            // Si le mot de passe est correct, connecter l'utilisateur (ex: démarrer une session)
            echo "Connexion réussie, bienvenue " . $username . "!";
            // Démarre une session pour garder l'utilisateur connecté
        } else {
            // Si l'utilisateur n'existe pas ou si le mot de passe est incorrect
            echo "Identifiants invalides.";
        }
    } catch (PDOException $e) {
        // Si une erreur survient
        echo "Erreur : " . $e->getMessage();
    }
}
?>
