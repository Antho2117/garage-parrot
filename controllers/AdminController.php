<?php

namespace App\Controllers;

use App\Core\Form;
use App\Models\CarsModel;
use App\Models\CustomerReviewsModel;
use App\Models\ServicesModel;
use App\Models\UsersModel;

class AdminController extends Controller
{
    public function index()
    {
        session_regenerate_id(true);
        if($_SESSION["user"]["role"] === "admin") {
            $this->render("admin/index", [], "users");
        } else {
            header("location: ".ROOT."/connexion");
        }
    }

    public function services()
    {
        if($_SESSION["user"]["role"] === "admin"){

            if (Form::validateForm($_POST, ["service", "price", "serviceDescribe"])) {

                $newService = new ServicesModel;

                $service = htmlspecialchars($_POST["service"]);
                $price = htmlspecialchars($_POST["price"]);
                $serviceDescribe = htmlspecialchars($_POST["serviceDescribe"]);

                $newService->createService($service, $price, $serviceDescribe);

            } else {

                $allServices = new ServicesModel;

                $services = $allServices->findServices();

                $this->render("admin/services", ["services" => $services], "users");
            }
        }
    }

    public function userAccount()
    {
        if($_SESSION["user"]["role"] === "admin"){

            if(Form::validateForm($_POST, ["birthdate", "gender", "garage", "password", "role", "firstname", "lastname", "email"])){

                $user = new UsersModel;

                $birthdate = htmlspecialchars($_POST["birthdate"]);
                $gender = htmlspecialchars($_POST["gender"]);
                $garage = htmlspecialchars($_POST["garage"]);
                $password = htmlspecialchars($_POST["password"]);
                $role = htmlspecialchars($_POST["role"]);
                $firstname = htmlspecialchars($_POST["firstname"]);
                $lastname = htmlspecialchars($_POST["lastname"]);
                $email = htmlspecialchars(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL));

                $user->updateUser($gender, $firstname, $lastname, $birthdate, $email, $password, $role, $garage);

            } else {
                $staff = new UsersModel;

                $user = $staff->findByEmail($_SESSION["user"]["email"]);

                $this->render("admin/userAccount", ["user" => $user], "users");
            }
        }
    }

    public function employee()
    {
        if($_SESSION["user"]["role"] === "admin") {

            if (Form::validateForm($_POST, ["birthdate", "gender", "garage", "password", "role", "firstname", "lastname", "email"])) {

                $user = new UsersModel;

                $birthdate = htmlspecialchars($_POST["birthdate"]);
                $gender = htmlspecialchars($_POST["gender"]);
                $garage = htmlspecialchars($_POST["garage"]);
                $password = htmlspecialchars($_POST["password"]);
                $role = htmlspecialchars($_POST["role"]);
                $firstname = htmlspecialchars($_POST["firstname"]);
                $lastname = htmlspecialchars($_POST["lastname"]);
                $email = htmlspecialchars(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL));

                $user->addEmployee($gender, $firstname, $lastname, $birthdate, $email, $password, $role, $garage);

            }

            $staff = new UsersModel;

            $employees = $staff->findAllEmployees();

            $this->render("admin/employee", ["employees" => $employees], "users");


        } else {

            unset($_SESSION["user"]);
            header("location: ".ROOT."/connexion");

        }
    }

    public function cars()
    {
        if($_SESSION["user"]["role"] === "admin")
        {
            if(!empty($_POST)){

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

                if($nameError === UPLOAD_ERR_OK){
                    $name = uniqid()."_".$name;
                    move_uploaded_file($nameTmp, BASE_UPLOADS.$name);
                }

                $image = ROOT."/uploads/".$name;
                $cars->addCar($brand, $year, $kilometers, $price, $options, $image, $garage);

            } else {

                $carsModel = new CarsModel;

                $cars = $carsModel->findAll();

                $this->render("admin/cars", ["cars" => $cars], "users");

            }
        } else {

            unset($_SESSION["user"]);
            header("location: ".ROOT."/connexion");

        }
    }

    public function reviews()
    {
        if($_SESSION["user"]["role"] === "admin"){

            if(Form::validateForm($_POST, ["username", "rating", "opinion"])){

                $review = new CustomerReviewsModel;

                $username = htmlspecialchars($_POST["username"]);
                $note = htmlspecialchars($_POST["rating"]);
                $comment = htmlspecialchars($_POST["opinion"]);

                $review->createReviews($username, $note, $comment);

            } else {

                $customerReviews = new CustomerReviewsModel;

                $reviews = $customerReviews->findAll();

                $this->render("admin/reviews", ["reviews" => $reviews], "users");

            }

        } else {

            unset($_SESSION["user"]);
            header("location: ".ROOT."/connexion");

        }
    }

    public function deleteService(int $id)
    {
        $service = new ServicesModel;

        $service->deleteService($id);

        header("location: ".ROOT."/admin/services");
    }

    public function deleteEmployee(int $id)
    {
        $staff = new UsersModel;

        $staff->deleteStaff($id);

        header("location: ".ROOT."/admin/employee");
    }

    public function carUpdate()
    {

        if($_POST["upload"]){
            header("location:".ROOT."/connexion");
        } else {
            header("location:".ROOT."/admin");
        }

    }

    public function deleteCar(int $id)
    {
        $carsModel = new CarsModel;

        $carsModel->deleteCar($id);

        header("location: ".ROOT."/admin/cars");
    }

    public function deleteReview(int $id)
    {
        $review = new CustomerReviewsModel;

        $review->deleteReview($id);

        header("location: ".ROOT."/admin/reviews");
    }

    public function logout()
    {
        unset($_SESSION["user"]);
        header("location: ".ROOT."/connexion");
    }
}