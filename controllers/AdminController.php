<?php

namespace App\Controllers;

class ProfileController extends Controller
{
    public function index()
    {
        $this->render("profile/index", [], "users");
    }

    public function employee()
    {
        $this->render("profile/employee", [], "users");
    }

    public function cars()
    {
        $this->render("profile/cars", [], "users");
    }
}