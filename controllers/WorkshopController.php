<?php

class WorkshopController
{
    public function workshopIndex()
    {
        require_once "views/workshop.php";
    }

    public function validateFormWorkshop()
    {
        if(isset($_POST)){
            if(!empty($_POST["service"])){
                if(!empty($_POST["immatriculation"])){
                    if(!empty($_POST["bookingDate"])){
                        if(!empty($_POST["phone"])){
                            try {

                                $pdo = new PDO("mysql:host=localhost;dbname=garage_parrot;charset=utf8mb4", "root", "");

                                $service = htmlspecialchars($_POST["service"]);
                                $immatriculation = htmlspecialchars($_POST["immatriculation"]);
                                $booking = htmlspecialchars($_POST["bookingDate"]);
                                $phone = htmlspecialchars($_POST["phone"]);

                                $sql = "INSERT INTO booking(
                                booking_date, 
                                booking_service_name, 
                                booking_customer_phone, 
                                booking_customer_immatriculation,
                                id_schedule) 
                                VALUES (
                                :date,
                                :service,
                                :phone,
                                :immatriculation,
                                1
                                )";

                                $query = $pdo->prepare($sql);
                                $query->bindValue(":date", $booking);
                                $query->bindValue(":service", $service);
                                $query->bindValue(":phone", $phone);
                                $query->bindValue(":immatriculation", $immatriculation);

                                if(!$query->execute())
                                {
                                    header("HTTP/1.1 404 not found");
                                } else {
                                    header("location:"._BASE_URL_."/workshop");
                                }

                            } catch(PDOException $e){
                                echo "Erreur: ".$e->getMessage();
                            }
                        } else {
                            echo "Veuillez renseigner votre numéro de téléphone";
                        }
                    } else {
                        echo "Veuillez choisir une date";
                    }
                } else {
                    echo "Veuillez renseigner votre immatriculation";
                }
            } else {
                echo "Veuillez selectionner le service";
            }
        }
    }
}