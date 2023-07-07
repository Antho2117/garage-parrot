<?php

class CarsController
{
    public function carsIndex()
    {
        require_once "views/cars.php";
    }

    public function carSaleIndex()
    {
        require_once "views/carSaleManagement.php";
    }
}