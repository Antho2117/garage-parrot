<?php

namespace App\Controllers;

use App\Core\Form;
use App\Models\UsersModel;

class ConnexionController extends Controller
{
    public function index()
    {
        if(Form::validateForm($_POST, ["workEmail", "password"])) {

            $email = htmlspecialchars($_POST["workEmail"]);
            $password = $_POST["password"]; //password hash/verify à mettre

            $usersModel = new UsersModel;
            $user = $usersModel->findByEmail($email);

            if (!$user) {
                $_SESSION["error"] = "adresse e-mail ou mot de passe incorrect";
                header("location: " . ROOT . "/connexion");
            }

            if ($password === $user->employee_password && ($user->employee_role === "admin")){
                //password verify
                $_SESSION["user"] = ["email" => $user->employee_email, "role" => $user->employee_role];
                $_SESSION["success"] = "Bienvenue sur votre profil ". ucfirst($user->employee_firstname);
                $this->render("admin/index", [], "users");

            } elseif(password_verify($password, $user->employee_password) && ($user->employee_role === "employee")){

                $_SESSION["user"] = ["email" => $user->employee_email, "role" => $user->employee_role];
                $_SESSION["success"] = "Bienvenue sur votre profil ". ucfirst($user->employee_firstname);
                $this->render("employee/index", [], "users");

            } else {

                $_SESSION["error"] = "adresse e-mail ou mot de passe incorrect";
                header("location: " . ROOT . "/connexion");

            }

        } else {

            $this->render("connexion/index", [], "users");

        }
    }
}