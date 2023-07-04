<?php

//gérer les doublons en bdd

function validateFormFeedback($pdo)
{
    if(!empty($_POST["username"])){
        if(!empty($_POST["rating"])){
            if(!empty($_POST["opinion"])){
                try {

                    // Anti Xss format
                    $username = htmlSpecialChars($_POST["username"]);
                    $rating = htmlSpecialChars($_POST["rating"]);
                    $opinion = htmlSpecialChars($_POST["opinion"]);

                    $sql = "
                    INSERT INTO 
                        customer_review (
                            customer_review_username, 
                            customer_review_date, 
                            customer_review_note, 
                            customer_review_text) 
                    VALUES (
                            :username, NOW(), :rating, :opinion
                    )";

                    $query = $pdo->prepare($sql);
                    $query->bindValue(":username", $username);
                    $query->bindValue(":rating", $rating, PDO::PARAM_INT);
                    $query->bindValue(":opinion", $opinion);

                    $query->execute();

                } catch (Exception $e){
                    echo $e->getMessage();
                }
            } else {
                echo "Merci de laisser un message";
            }
        } else {
            echo "Veuillez entrer une note";
        }
    } else {
        echo "Veuillez entrer un nom";
    }
}
