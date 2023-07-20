<?php

namespace App\Controllers;

use App\Core\Form;
use App\Models\WorkshopModel;

class WorkshopController extends Controller
{
    public function index()
    {
        if(Form::validateForm($_POST, ["service", "immatriculation", "bookingDate", "phone", "schedule"])){

            $service = htmlspecialchars($_POST["service"]);
            $immatriculation = htmlspecialchars($_POST["immatriculation"]);
            $bookingDate = htmlspecialchars($_POST["bookingDate"]);
            $phone = htmlspecialchars($_POST["phone"]);
            $schedule = htmlspecialchars($_POST["schedule"]);

            $booking = new WorkshopModel;

            $booking->createBooking($bookingDate, $service, $phone, $immatriculation, $schedule);

        } else {

            $this->render("workshop/index");

        }
    }
}