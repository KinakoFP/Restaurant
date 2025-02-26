<?php
// Démarrer la session
session_start();

// Détruire toutes les variables de session
session_unset();

// Détruire la session
session_destroy();

// Rediriger vers la page de connexion
header("Location: ../Connexion/View/login.php?error=" . urlencode("Vous êtes déconnecté avec succès."));
exit();
?>
