<?php

require_once "Person.php";

class Customer extends Person
{
    private string $phone;
    private string $message;
    private string $date;


    public function __construct(string $gender, string $firstname, string $lastname, string $email, string $phone, string $message, string $date)
    {
        parent::__construct($gender, $firstname, $lastname, $email);
        $this->phone = $phone;
        $this->message = $message;
        $this->date = $date;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }

}