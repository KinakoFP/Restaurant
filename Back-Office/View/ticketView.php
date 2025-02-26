<?php
// Inclure le modèle
include '../Model/ticket.php';
$model = new Ticket();
$tickets = $model->getTicket();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/ticket.css">
    <title>Liste des Tickets</title>
</head>
<body>
    <h1>Liste des Tickets</h1>

    <table>
        <thead>
            <tr>
                <th>ID Ticket</th>
                <th>ID Prestation</th>
                <th>Nombre de Prestations</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tickets as $ticket): ?>
                <tr>
                    <td><?= htmlspecialchars($ticket['id_ticket']) ?></td>
                    <td><?= htmlspecialchars($ticket['id_carte']) ?></td>
                    <td><?= htmlspecialchars($ticket['date_achat']) ?></td>
                    <td>
                    <a href="../Controller/TicketControl.php?action=edit&id=<?= $ticket['id_ticket'] ?>" class="btn-modifier">Modifier</a>
                    <a href="../Controller/TicketControl.php?action=delete&id=<?= $ticket['id_ticket'] ?>" class="btn-supprimer" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce ticket ?');">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
