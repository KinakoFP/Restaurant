<?php
require_once '../db.php';

Class User {
    // Fonction pour récupérer tous les utilisateurs
    function getUsers() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM user");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Fonction pour récupérer un utilisateur par ID
    function getUserById($id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM user WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Fonction pour ajouter un utilisateur
    function addUser($ident, $name, $username, $password, $mail) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO user (ident, name, username, password, mail) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$ident, $name, $username, $password, $mail]);
    }

    // Fonction pour mettre à jour un utilisateur
    function updateUser($id, $ident, $name, $username, $password, $mail) {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE user SET ident = ?, name = ?, username = ?, password = ?, mail = ? WHERE id = ?");
        return $stmt->execute([$ident, $name, $username, $password, $mail, $id]);
    }

    // Fonction pour supprimer un utilisateur
    function deleteUser($id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM user WHERE id = ?");
        return $stmt->execute([$id]);
    }

}
?>
