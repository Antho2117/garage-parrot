<?php

function validateFormWorkshop($pdo)
{
    try{
        if(isset($_POST)){
            if(!empty($_POST["service"])){
                if(!empty($_POST["immatriculation"])){
                    if(!empty($_POST["bookingDate"])){
                        if(!empty($_POST["phone"])){

                            $service = htmlspecialchars($_POST["service"]);
                            $immatriculation = htmlspecialchars($_POST["immatriculation"]);
                            $booking = htmlspecialchars($_POST["bookingDate"]);
                            $phone = htmlspecialchars($_POST["phone"]);

                            $sql = "INSERT INTO booking(
                                booking_date, 
                                booking_service_name, 
                                booking_customer_phone, 
                                booking_customer_immatriculation) 
                            VALUES (
                                :date,
                                :service,
                                :phone,
                                :immatriculation
                            )";

                            $query = $pdo->prepare($sql);
                            $query->bindValue(":date", $booking);
                            $query->bindValue(":service", $service);
                            $query->bindValue(":phone", $phone);
                            $query->bindValue(":immatriculation", $immatriculation);

                            $query->execute();

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
    } catch (Exception $e){
        echo $e->getMessage();
    }
}