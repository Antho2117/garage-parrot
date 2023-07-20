<?php

namespace App\Models;

use App\Core\Db;

class CarsModel extends Model
{
    public function __construct()
    {
        $this->table = 'car';
    }

    public function addCar(string $brand, string $year, int $kilometers, int $price, string $options, string $image, int $garage)
    {
        $db = Db::getInstance();

        $sql = "INSERT INTO ".$this->table." (
                car_brand, 
                car_year, 
                car_kilometers, 
                car_price, 
                car_options, 
                car_image,
                id_garage) 
                VALUES (
                :brand, :year, :kilometers, :price, :options, :image,:garage);";

        $query = $db->prepare($sql);
        $query->bindValue(":brand", $brand);
        $query->bindValue(":year", $year);
        $query->bindValue(":kilometers", $kilometers, \PDO::PARAM_INT);
        $query->bindValue(":price", $price, \PDO::PARAM_INT);
        $query->bindValue(":options", $options);
        $query->bindValue(":image", $image);
        $query->bindValue(":garage", $garage, \PDO::PARAM_INT);

        if(!$query->execute())
        {
            header("HTTP/1.1 404 not found");
        }else{
            if($_SESSION["user"]["role"] === "admin") {
                header("location: " . ROOT . "/admin/cars");
            } else {
                header("location: " . ROOT . "/employee/cars");
            }
        }
    }

    public function deleteCar($id)
    {
        $db = Db::getInstance();

        $sql = "DELETE FROM ".$this->table." WHERE id_car = ".$id.";";
        $db->query($sql);
    }
}