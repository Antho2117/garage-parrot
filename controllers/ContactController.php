<?php

class ContactController
{
    public function contactIndex()
    {
        require_once "views/contact.php";
    }

    function validateFormContact()
    {
        if(!empty($_POST["gender"])){
            if (!empty($_POST["lastname"])) {
                if (!empty($_POST["firstname"])) {
                    if (!empty($_POST["email"])) {
                        filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
                        if (!empty($_POST["phone"])) {
                            if (!empty($_POST["message"])) {
                                try {

                                    $pdo = new PDO("mysql:host=localhost;dbname=garage_parrot;charset=utf8mb4", "root", "");

                                    // Anti-Xss format
                                    $gender = $_POST["gender"];
                                    $lastname = htmlSpecialChars($_POST["lastname"]);
                                    $firstname = htmlSpecialChars($_POST["firstname"]);
                                    $email = htmlSpecialChars($_POST["email"]);
                                    $phone = htmlSpecialChars($_POST["phone"]);
                                    $message = htmlSpecialChars($_POST["message"]);

                                    $sql = "INSERT INTO 
                                            customer (
                                            customer_gender,
                                            customer_firstname,
                                            customer_lastname,
                                            customer_email,
                                            customer_phone,
                                            customer_message,
                                            customer_date,
                                            id_garage
                                            ) 
                                        VALUES (:gender, :firstname, :lastname, :email, :phone, :message, NOW(), 1);";
                                    $query = $pdo->prepare($sql);
                                    $query->bindValue(":gender", $gender);
                                    $query->bindValue(":firstname", $firstname);
                                    $query->bindValue(":lastname", $lastname);
                                    $query->bindValue(":email", $email);
                                    $query->bindValue(":phone", $phone);
                                    $query->bindValue(":message", $message);

                                    if(!$query->execute())
                                    {
                                        header("HTTP/1.1 404 not found");
                                    } else {
                                        header("location:"._BASE_URL_."/contact");
                                    }

                                } catch (Exception $e){
                                    echo $e->getMessage();
                                }
                            } else {
                                echo "Veuillez entrer un message";
                            }
                        } else {
                            echo "Veuillez entrer un numéro de téléphone";
                        }
                    } else {
                        echo "Veuillez renseigner un email";
                    }
                } else {
                    echo "Veuillez renseigner un prénom";
                }
            } else {
                echo "Veuillez renseigner un nom";
            }
        } else {
            echo "Veuillez entrer votre sexe";
        }
    }
}