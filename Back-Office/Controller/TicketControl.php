<?php
// Inclure le modèle
include '../Model/ticket.php';

// Créer une instance du modèle
$model = new Ticket();

// Vérifier l'action (supprimer ou modifier)
    $action = $_GET['action'];
    $ticketId = $_GET['id'];
    if ($action === 'delete') {
        // Supprimer le ticket
        $model->deleteTicket($ticketId);
    }

header('Location: ../View/ticketView.php');

?>