<?php

namespace App\Models;

use App\Core\Db;

class ContactModel extends Model
{
    public function __construct()
    {
        $this->table = "customer";
    }

    public function createCustomer(string $gender, string $firstname, string $lastname, string $email, string $phone, string $message)
    {
        $db = Db::getInstance();

        $sql = "INSERT INTO $this->table (
                      customer_gender, 
                      customer_firstname, 
                      customer_lastname, 
                      customer_email, 
                      customer_phone, 
                      customer_message, 
                      customer_date, 
                      id_garage) 
        VALUES (:gender, :firstname, :lastname, :email, :phone, :message, NOW(), 1)";
        $query = $db->prepare($sql);
        $query->bindValue(":gender", $gender);
        $query->bindValue(":firstname", $firstname);
        $query->bindValue(":lastname", $lastname);
        $query->bindValue(":email", $email);
        $query->bindValue(":phone", $phone);
        $query->bindValue(":message", $message);

        if(!$query->execute()){
            header("location:".ROOT."/home");
        } else {
            header("location:".ROOT."/contact");
        }

    }
}