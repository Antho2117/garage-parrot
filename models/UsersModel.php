<?php

namespace App\Models;

use App\Core\Db;

class UsersModel extends Model
{
    protected string $gender;
    protected string $firstname;
    protected string $lastname;
    protected string $birthdate;
    protected string $email;

    protected string $password;
    protected string $role;

    public function __construct()
    {
        $this->table = "employee";
    }



    public function updateUser(string $gender, string $firstname, string $lastname, string $birthdate, string $email, string $password, string $role, int $garage)
    {

        $db = Db::getInstance();

        $sql = "UPDATE $this->table SET 
            employee_gender = :gender,
            employee_firstname = :firstname,
            employee_lastname = :lastname,
            employee_birthdate = :birthdate,
            employee_email = :email,
            employee_password = :password,
            employee_role = :role,
            id_garage = :garage WHERE employee_email = $email;";

        $query = $db->prepare($sql);
        $password = password_hash($password, PASSWORD_BCRYPT);
        $query->bindValue(":gender", $gender);
        $query->bindValue(":firstname", $firstname);
        $query->bindValue(":lastname", $lastname);
        $query->bindValue(":date", $birthdate);
        $query->bindValue(":email", $email);
        $query->bindValue(":password", $password);
        $query->bindValue(":role", $role);
        $query->bindValue(":garage", $garage, \PDO::PARAM_INT);

        if(!$query->execute())
        {
            header("HTTP/1.1 404 not found");
        }else{
            header("location: ".ROOT."/admin/userAccount");
        }
    }

    public function addEmployee(string $gender, string $firstname, string $lastname, string $birthdate, string $email, string $password, string $role, int $garage)
    {
        $db = Db::getInstance();

        $sql = "INSERT INTO 
            $this->table(
            employee_gender,
            employee_firstname,
            employee_lastname,
            employee_birthdate, 
            employee_email, 
            employee_password, 
            employee_role, 
            id_garage) 
            VALUES (
            :gender, :firstname, :lastname, :date, :email, :password, :role, :garage);";

        $query = $db->prepare($sql);
        $password = password_hash($password, PASSWORD_BCRYPT);
        $query->bindValue(":gender", $gender);
        $query->bindValue(":firstname", $firstname);
        $query->bindValue(":lastname", $lastname);
        $query->bindValue(":date", $birthdate);
        $query->bindValue(":email", $email);
        $query->bindValue(":password", $password);
        $query->bindValue(":role", $role);
        $query->bindValue(":garage", $garage, \PDO::PARAM_INT);

        if(!$query->execute())
        {
            header("HTTP/1.1 404 not found");
        }else{
            header("location: ".ROOT."/admin/employee");
        }
    }

    public function findAllEmployees()
    {
        $db = Db::getInstance();

        $sql = "SELECT * FROM ".$this->table." WHERE employee_role = 'employee';";
        $query = $db->prepare($sql);
        if(!$query->execute()){
            header("location: ".ROOT."/admin");
        }
        return $query->fetchAll();
    }

    public function deleteStaff($id)
    {
        $db = Db::getInstance();

        $sql = "DELETE FROM ".$this->table." WHERE id_employee = ".$id.";";
        $db->query($sql);
    }

    public function setSession()
    {
        $_SESSION["user"] = ["email" => $this->email, "role" => $this->role];
    }

    public function findByEmail(string $email)
    {
        return $this->request("SELECT * FROM $this->table WHERE employee_email = ?", [$email])->fetch();
    }
}