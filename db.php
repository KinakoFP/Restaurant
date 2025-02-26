<?php
// Configuration de la connexion à la base de données
$host = 'localhost';  // Utiliser 'localhost' pour une base de données locale
$dbname = 'restaurant';  // Remplace par le nom de ta base de données
$username = 'root';  // L'utilisateur par défau
$password = 'root';  // Le mot de passe par défaut

try {
    $bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8',
    'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}   catch (PDOException $e) {
    echo "Échec de la connexion : " . $e->getMessage();
}
?>
