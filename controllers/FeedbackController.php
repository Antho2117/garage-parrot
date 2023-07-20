<?php

namespace App\Controllers;

use App\Core\Form;
use App\Models\CustomerReviewsModel;

class FeedbackController extends Controller
{
    public function index()
    {
        if(Form::validateForm($_POST, ["username", "rating", "opinion"])){

            $username = htmlspecialchars($_POST["username"]);
            $note = htmlspecialchars($_POST['rating']);
            $comment = htmlspecialchars($_POST["opinion"]);

            $review = new CustomerReviewsModel;

            $review->createReviews($username, $note, $comment);

        } else {

            $customerReviews = new CustomerReviewsModel;

            $reviews = $customerReviews->findByLimit();

            $this->render("feedback/index", ["reviews" => $reviews]);
        }
    }
}