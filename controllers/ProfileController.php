<?php

class ProfileController
{
    public function profileIndex()
    {
        // ajouter les conditions et les roles
        if(($_SERVER["REQUEST_METHOD"] === "POST"))
        {

            var_dump($_POST);
            var_dump($_SESSION);
        }
    }

    function verifyUserLoginData()
    {
        try {
            if (isset($_POST)) {
                if (!empty($_POST["workEmail"]) && !empty($_POST["password"])) {

                    $pdo = new PDO("mysql:host=localhost;dbname=garage_parrot;charset=utf8mb4", "root", "");

                    $sql = "SELECT employee_email, employee_password FROM employee WHERE employee_email = :email;";

                    $query = $pdo->prepare($sql);
                    $query->bindValue(":email", $_POST["workEmail"]);
                    $query->execute();

                    $user = $query->fetch(PDO::FETCH_ASSOC);

                    if (($_POST["workEmail"] === $user["employee_email"]) && ($_POST["password"] === $user["employee_password"])) {
                        header("location: adminspace.php");
                    }
                }
            }
        } catch (Exception $e){
            echo $e->getMessage();
        }
    }
}