<?php
require_once '../../db.php';

class Tarif extends Database {
    
    public function __construct() {
        parent::__construct(); // Appelle le constructeur de Database pour initialiser $pdo
    }

    // Récupérer tous les tickets
    public function getTarif() {
        $q = $this->pdo->query("SELECT * FROM tarif");
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }

    // Supprimer un ticket
    public function deleteTarif($id, $prix) {
        $q = $this->pdo->prepare("DELETE FROM tarif WHERE id_prestation = ? AND prix = ?");
        return $q->execute([$id, $prix]);
    }
}
?>
