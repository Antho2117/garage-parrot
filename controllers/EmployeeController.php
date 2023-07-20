<?php

namespace App\Controllers;

use App\Core\Form;
use App\Models\CarsModel;
use App\Models\CustomerReviewsModel;
use App\Models\UsersModel;

class EmployeeController extends Controller
{
    public function index()
    {
        session_regenerate_id(true);
        if($_SESSION["user"]["role"] === "employee") {
            $this->render("employee/index", [], "users");
        } else {
            header("location: ".ROOT."/connexion");
        }
    }

    public function reviews()
    {
        if($_SESSION["user"]["role"] === "employee"){

            if(Form::validateForm($_POST, ["username", "rating", "opinion"])){

                $review = new CustomerReviewsModel;

                $username = htmlspecialchars($_POST["username"]);
                $note = htmlspecialchars($_POST["rating"]);
                $comment = htmlspecialchars($_POST["opinion"]);

                $review->createReviews($username, $note, $comment);

            } else {

                $customerReviews = new CustomerReviewsModel;

                $reviews = $customerReviews->findAll();

                $this->render("employee/reviews", ["reviews" => $reviews], "users");

            }

        } else {

            unset($_SESSION["user"]);
            header("location: ".ROOT."/connexion");

        }
    }

    public function userAccount()
    {
        if($_SESSION["user"]["role"] === "employee"){

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

                $this->render("employee/userAccount", ["user" => $user], "users");
            }
        }
    }

    public function deleteReview(int $id)
    {
        $review = new CustomerReviewsModel;

        $review->deleteReview($id);

        header("location: ".ROOT."/employee/reviews");
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
