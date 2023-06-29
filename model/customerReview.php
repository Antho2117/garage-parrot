<?php

function getCustomerReview() {

    try {
        $database = new PDO('mysql:host=localhost;dbname=garage_parrot', 'root', '');

        $statement = $database->query('
            SELECT 
            customer_review_username, 
            customer_review_date, 
            customer_review_note, 
            customer_review_text 
            FROM 
            customer_review;'
        );

        $reviews = [];
        while($review = $statement->fetch(PDO::FETCH_ASSOC)){
            $userReview =['author' => $review['customer_review_username'],
                'date' => $review['customer_review_date'],
                'note' => $review['customer_review_note'],
                'comment' => $review['customer_review_text'],
            ];
            $reviews[] = $userReview;
        }

        return $reviews;

    } catch(Exception $e){

        echo $e->getMessage();

    }


}