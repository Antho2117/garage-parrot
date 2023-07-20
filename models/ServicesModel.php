<?php

namespace App\Models;

use App\Core\Db;

class ServicesModel extends Model
{
    public function __construct()
    {
        $this->table = "service";
    }

    public function findServices()
    {
        $query = $this->request("SELECT * FROM $this->table ORDER BY service_price ASC" );
        return $query->fetchAll();
    }

    public function createService(string $service, string $price, string $serviceDescribe)
    {
        $db = Db::getInstance();

        $sql = "INSERT INTO $this->table (service_name, service_price, service_type, id_garage) VALUES (:name, :price, :describe, 1);";

        $query = $db->prepare($sql);
        $query->bindValue(":name", $service);
        $query->bindValue(":price", $price);
        $query->bindValue(":describe", $serviceDescribe);

        if(!$query->execute())
        {
            header("HTTP/1.1 404 not found");
        }else{
            header("location: ".ROOT."/admin/services");
        }
    }

    public function deleteService(int $id)
    {
        $db = Db::getInstance();

        $sql = "DELETE FROM ".$this->table." WHERE id_service = ".$id.";";
        $db->query($sql);
    }
}