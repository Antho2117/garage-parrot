<?php

require_once "Person.php";

class Employee extends Person
{
    private string $birthdate;
    private string $password;
    private string $role;

    public function __construct(string $gender, string $firstname, string $lastname, string $email ,string $birthdate, string $password, string $role)
    {
        parent::__construct($gender, $firstname, $lastname, $email);
        $this->birthdate = $birthdate;
        $this->password = $password;
        $this->role = $role;
    }

    public function getBirthdate(): string
    {
        return $this->birthdate;
    }

    public function setBirthdate(string $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): void
    {
        $this->role = $role;
    }

}