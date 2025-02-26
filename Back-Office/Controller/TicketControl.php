<?php
// Inclure le modèle
include 'Model/ticket.php';

$ticketModel = new Ticket();

// Récupérer les tickets
$tickets = $ticketModel->getTicket();


?>
