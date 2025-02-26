<?php
// Active le mode erreur pour le debug
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Récupère la route demandée
$route = $_GET['route'] ?? '';

// Définition des routes disponibles
$routes = [
    'connexion' => '/connexion.php',
    'inscription' => '/inscription.php',
];

// Vérifie si la route existe
if (array_key_exists($route, $routes)) {
    require_once __DIR__ . '/../' . $routes[$route];
} else {
    http_response_code(404);
    echo json_encode(["error" => "Route non trouvée"]);
}
