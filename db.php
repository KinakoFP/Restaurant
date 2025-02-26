<?php
// Configuration de la connexion à la base de données
$host = 'localhost';  // Utiliser 'localhost' pour une base de données locale
$dbname = 'restaurant';  // Remplace par le nom de ta base de données
$username = 'root';  // L'utilisateur par défau
$password = '';  // Le mot de passe par défaut

try {
    $pdo = new PDO("mysql:host=$localhost;dbname=$restaurant", $username, $password);
    
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Échec de la connexion : " . $e->getMessage();
}
?>
