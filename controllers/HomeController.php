<?php

namespace App\Controllers;

use App\Models\CustomerReviewsModel;
use App\Models\ServicesModel;

class HomeController extends Controller
{
    public function index()
    {
        $customerReviews = new CustomerReviewsModel();

        $reviews = $customerReviews->findByLimit();

        $allServices = new ServicesModel;

        $services = $allServices->findServices();

        $this->render("home/index", ["reviews" => $reviews, "services" => $services]);
    }
}