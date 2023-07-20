<?php

namespace App\Models;

use App\Core\Db;

class ContactModel extends Model
{
    /**
     * customer table in database
     */
    public function __construct()
    {
        $this->table = "customer";
    }

    /**
     * @param string $gender
     * @param string $firstname
     * @param string $lastname
     * @param string $email
     * @param string $phone
     * @param string $message
     * @return void
     */
    public function createCustomer(string $gender, string $firstname, string $lastname, string $email, string $phone, string $object,string $message)
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
                      customer_object,
                      id_garage) 
        VALUES (:gender, :firstname, :lastname, :email, :phone, :message, NOW(), :object, 1)";
        $query = $db->prepare($sql);
        $query->bindValue(":gender", $gender);
        $query->bindValue(":firstname", $firstname);
        $query->bindValue(":lastname", $lastname);
        $query->bindValue(":email", $email);
        $query->bindValue(":phone", $phone);
        $query->bindValue(":object", $object);
        $query->bindValue(":message", $message);

        if(!$query->execute()){
            header("location:".ROOT."/home");
        } else {
            header("location:".ROOT."/contact");
        }

    }
}