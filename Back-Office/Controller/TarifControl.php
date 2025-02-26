<?php
// Inclure le modèle
include '../Model/tarif.php';

// Créer une instance du modèle
$model = new tarif();

// Vérifier l'action (supprimer ou modifier)
    $action = $_GET['action'];
    $tarifId = $_GET['id_prestation'];
    $prix = $_GET['prix'];
    if ($action === 'delete') {
        // Supprimer le ticket
        $model->deleteTarif($tarifId, $prix);
    }

header('Location: ../View/tarifView.php');

?>