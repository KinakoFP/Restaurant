<?php
// Active le mode erreur pour le debug
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Inclusion des fichiers nécessaires
require_once '../Controller/Register_control.php';
require_once '../Controller/login_control.php';


// Récupère la route demandée
$route = $_GET['route'] ?? '';

// Définition des routes disponibles
$routes = [
    'inscription' => 'registerUser',
    'connexion' => 'loginUser',
    'deconnexion' => 'logoutUser',
    'utilisateurs' => 'showUsers'
];

// Vérifie si la route existe
if (array_key_exists($route, $routes)) {
    $function = $routes[$route];
    $function(); // Appelle la fonction correspondante
} else {
    http_response_code(404);
    echo "Page non trouvée.";
}
?>
