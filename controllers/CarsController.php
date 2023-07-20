<?php

namespace App\Controllers;

use App\Models\CarsModel;

class CarsController extends Controller
{
    public function index()
    {
        $carsModel = new CarsModel();

        $cars = $carsModel->findAll(); //mettre une pagination

        $this->render("cars/index", ["cars" => $cars]);
    }

    public function sendForm()
    {
            header("location:".ROOT."/home");
    }
}