<?php
require_once '../db.php';

class User extends Database {
    
    public function __construct() {
        parent::__construct(); // Appelle le constructeur de Database pour initialiser $pdo
    }

    // Récupérer tous les utilisateurs
    public function getUsers() {
        $q = $this->pdo->query("SELECT * FROM user");
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }

    // Récupérer un utilisateur par username ou email
    public function getUserByUsernameOrEmail($username, $mail) {
        $stmt = $this->pdo->prepare("SELECT * FROM user WHERE username = ? OR mail = ?");
        $stmt->execute([$username, $mail]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Récupérer un utilisateur par ID
    public function getUserById($id) {
        $q = $this->pdo->prepare("SELECT * FROM user WHERE id = ?");
        $q->execute([$id]);
        return $q->fetch(PDO::FETCH_ASSOC);
    }

    public function addUser($ident, $name, $username, $password, $mail) {
        $q = $this->pdo->prepare("INSERT INTO user (ident, name, username, password, mail) VALUES (?, ?, ?, ?, ?)");
        return $q->execute([$ident, $name, $username, $password, $mail]);
    }  
      
    // Mettre à jour un utilisateur
    public function updateUser($id, $ident, $name, $username, $password, $mail) {
        $q = $this->pdo->prepare("UPDATE user SET ident = ?, name = ?, username = ?, password = ?, mail = ? WHERE id = ?");
        return $q->execute([$ident, $name, $username, $password, $mail, $id]);
    }

    // Supprimer un utilisateur
    public function deleteUser($id) {
        $q = $this->pdo->prepare("DELETE FROM user WHERE id = ?");
        return $q->execute([$id]);
    }
}
?>
