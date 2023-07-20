<?php

namespace App\Controllers;

use App\Models\CarsModel;

class EmployeeController extends Controller
{
    public function index()
    {
        //session_regenerate_id(true);
        if($_SESSION["user"]["role"] === "employee") {
            $this->render("employee/index", [], "users");
        }
        unset($_SESSION["user"]);
        header("location: ".ROOT."/connexion");
    }

    public function deleteCar(int $id)
    {
        $carsModel = new CarsModel;

        $carsModel->deleteCar($id);

        header("location:".ROOT."/employee/cars");
    }

    public function cars()
    {
        if ($_SESSION["user"]["role"] === "employee") {
            if (!empty($_POST)) {

                $cars = new CarsModel;

                $garage = htmlspecialchars($_POST["garage"]);
                $brand = htmlspecialchars($_POST["brand"]);
                $year = htmlspecialchars($_POST["year"]);
                $kilometers = htmlspecialchars($_POST["kilometers"]);
                $price = htmlspecialchars($_POST["price"]);
                $options = htmlspecialchars($_POST["options"]);
                $name =  htmlspecialchars($_FILES["upload"]["name"]);
                $nameTmp = htmlspecialchars($_FILES["upload"]["tmp_name"]);
                $nameError = $_FILES["upload"]["error"];

                if ($nameError === UPLOAD_ERR_OK) {
                    $name = uniqid() . "_" . $name;
                    move_uploaded_file($nameTmp, BASE_UPLOADS . $name);
                }

                $image = ROOT . "/uploads/" . $name;
                $cars->addCar($brand, $year, $kilometers, $price, $options, $image, $garage);

            } else {

                $carsModel = new CarsModel;

                $cars = $carsModel->findAll();

                $this->render("employee/cars", ["cars" => $cars], "users");

            }
        } else {
            header("location: " . ROOT . "/connexion");
        }
    }

    public function logout()
    {
        unset($_SESSION["user"]);
        header("location: ".ROOT."/connexion");
    }
}
