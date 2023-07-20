<?php

namespace App\Models;

use App\Core\Db;

class WorkshopModel extends Model
{
    public function __construct()
    {
        $this->table = "booking";
    }

    public function createBooking(string $date, string $service, string $phone, string $immatriculation, int $schedule)
    {
        $db = Db::getInstance();
        $sql = "INSERT INTO $this->table (
                   booking_date, 
                   booking_service_name, 
                   booking_customer_phone, 
                   booking_customer_immatriculation,
                   id_schedule) 
        VALUES (:date, :service, :phone, :immatriculation, :schedule)";
        $query = $db->prepare($sql);
        $query->bindValue(":date", $date);
        $query->bindValue(":service", $service);
        $query->bindValue(":phone", $phone);
        $query->bindValue(":immatriculation", $immatriculation);
        $query->bindValue(":schedule", $schedule);

        if(!$query->execute()){
            header("location:".ROOT."/home");
        } else {
            $_SESSION["success"] = "Votre demande nous a bien été envoyée, nous y répondrons en moins de 24h.";
            header("location:".ROOT."/workshop");
        }
    }
}