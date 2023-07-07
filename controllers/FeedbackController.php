<?php

class FeedbackController
{
    public function feedbackIndex()
    {
        $reviews = $this->getCustomerReview();
        require_once "views/feedback.php";
    }

    public function validateFormFeedback()
    {
        if(!empty($_POST["username"])){
            if(!empty($_POST["rating"])){
                if(!empty($_POST["opinion"])){
                    try {

                        $pdo = new PDO("mysql:host=localhost;dbname=garage_parrot;charset=utf8mb4", "root", "");

                        // Anti Xss format
                        $username = htmlSpecialChars($_POST["username"]);
                        $rating = htmlSpecialChars($_POST["rating"]);
                        $opinion = htmlSpecialChars($_POST["opinion"]);

                        $sql = "INSERT INTO customer_review (
                        customer_review_username, 
                        customer_review_date, 
                        customer_review_note, 
                        customer_review_text) 
                        VALUES (:username, NOW(), :rating, :opinion);";

                        $query = $pdo->prepare($sql);

                        $query->bindValue(":username", $username);
                        $query->bindValue(":rating", $rating, PDO::PARAM_INT);
                        $query->bindValue(":opinion", $opinion);



                        if(!$query->execute())
                        {
                            header("HTTP/1.1 404 not found");
                        } else {
                            header("location:"._BASE_URL_."/feedback");
                        }

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

    public function getCustomerReview() {

        try {

            $pdo = new PDO("mysql:host=localhost;dbname=garage_parrot;charset=utf8mb4", "root", "");

            $query = $pdo->query("
            SELECT 
            id_customer_review,
            customer_review_username, 
            customer_review_date, 
            customer_review_note, 
            customer_review_text 
            FROM 
            customer_review
            ORDER BY customer_review_date
            LIMIT 6;"
            );

            $reviews = [];
            while($review = $query->fetch(PDO::FETCH_ASSOC)){
                $userReview =["author" => $review["customer_review_username"],
                    "date" => $review["customer_review_date"],
                    "note" => $review["customer_review_note"],
                    "comment" => $review["customer_review_text"],
                    "id" => $review["id_customer_review"]
                ];
                $reviews[] = $userReview;
            }

            return $reviews;

        } catch(Exception $e){

            echo $e->getMessage();

        }

    }
}