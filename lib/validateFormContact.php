<?php

// gérer les doublons en bdd

function validateFormContact($pdo)
{
    if (!empty($_POST["lastname"])) {
        if (!empty($_POST["firstname"])) {
            if (!empty($_POST["email"])) {
                filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
                if (!empty($_POST["phone"])) {
                    if (!empty($_POST["message"])) {
                        try {
                            // Anti-Xss format
                            $lastname = htmlSpecialChars($_POST["lastname"]);
                            $firstname = htmlSpecialChars($_POST["firstname"]);
                            $email = htmlSpecialChars($_POST["email"]);
                            $phone = htmlSpecialChars($_POST["phone"]);
                            // implement send message via email
                            $message = htmlSpecialChars($_POST["message"]);

                            $sql = "INSERT INTO 
                                        customer (
                                        customer_firstname, 
                                        customer_lastname, 
                                        customer_email, 
                                        customer_phone,
                                        id_garage
                                        ) 
                                    VALUES (:firstname, :lastname, :email, :phone, 1);";
                            $query = $pdo->prepare($sql);
                            $query->bindValue(":firstname", $firstname);
                            $query->bindValue(":lastname", $lastname);
                            $query->bindValue(":email", $email);
                            $query->bindValue(":phone", $phone);

                            $query->execute();

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
}


