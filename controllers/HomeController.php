<?php

namespace App\Controllers;

use App\Models\CustomerReviewsModel;

class HomeController extends Controller
{
    public function index()
    {
        $customerReviews = new CustomerReviewsModel();

        $reviews = $customerReviews->findByLimit();

        $this->render("home/index", ["reviews" => $reviews]);
    }
}