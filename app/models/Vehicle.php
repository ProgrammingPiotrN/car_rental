<?php

require_once '../core/Model.php';

class Vehicle extends Model
{
    public function getAllVehicles()
    {
        try {
            $stmt = $this->pdo->query("SELECT * FROM vehicles WHERE status = 'available'");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Błąd pobierania danych: " . $e->getMessage();
            return [];
        }
    }
}
