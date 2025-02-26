<?php
require_once '../../db.php';

class Ticket extends Database {
    
    public function __construct() {
        parent::__construct(); // Appelle le constructeur de Database pour initialiser $pdo
    }

    // Récupérer tous les tickets
    public function getTicket() {
        $q = $this->pdo->query("SELECT * FROM ticket");
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }

    // Supprimer un ticket
    public function deleteTicket($id) {
        $q = $this->pdo->prepare("DELETE FROM ticket WHERE id = ?");
        return $q->execute([$id]);
    }
}
?>
