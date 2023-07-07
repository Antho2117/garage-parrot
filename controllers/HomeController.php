<?php

class HomeController
{
    public function homeIndex()
    {
        $reviews = $this->getCustomerReview();
        require_once "views/mainpage.php";
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