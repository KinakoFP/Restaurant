<?php
// Vue PHP pour afficher les tickets
    $model_ticket = new Ticket();
    $tickets = $model_ticket->getTicket();
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
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tickets as $ticket): ?>
                <tr>
                    <td><?= htmlspecialchars($ticket['id_ticket']) ?></td>
                    <td><?= htmlspecialchars($ticket['id_prestation']) ?></td>
                    <td><?= htmlspecialchars($ticket['nb_prestation']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
