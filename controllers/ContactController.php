<?php

namespace App\Controllers;

use App\Core\Form;
use App\Models\ContactModel;

class ContactController extends Controller
{
    public function index()
    {
        if(Form::validateForm($_POST, ["gender", "lastname", "firstname", "email", "phone", "object", "message"])){

            $gender = htmlspecialchars($_POST["gender"]);
            $lastname = htmlspecialchars($_POST["lastname"]);
            $firstname = htmlspecialchars($_POST["email"]);
            $email = htmlspecialchars(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL));
            $phone = htmlspecialchars($_POST["phone"]);
            $object = htmlspecialchars($_POST["object"]);
            $message = htmlspecialchars($_POST["message"]);

            $contact = new ContactModel;

            $contact->createCustomer($gender, $firstname, $lastname, $email, $phone, $object,$message);

        } else {

            $this->render("contact/index");

        }
    }
}