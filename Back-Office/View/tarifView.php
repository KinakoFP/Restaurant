<?php
// Inclure le modèle
include '../Model/tarif.php';
$model = new tarif();
$tarifs = $model->getTarif();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/ticket.css">
    <title>Liste des Tarifs</title>
</head>
<body>
    <h1>Liste des Tarifs</h1>

    <table>
        <thead>
            <tr>
                <th>ID Prestation</th>
                <th>ID Categorie</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tarifs as $tarif): ?>
                <tr>
                    <td><?= htmlspecialchars($tarif['id_prestation']) ?></td>
                    <td><?= htmlspecialchars($tarif['id_categorie']) ?></td>
                    <td><?= htmlspecialchars($tarif['prix']) ?> $</td>
                    <td>
                        <a href="../Controller/TarifControl.php?action=delete&id=<?= $tarif['id_prestation'] ?>&prix=<?= $tarif['prix'] ?>" class="btn-supprimer" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce tarif ?');">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
