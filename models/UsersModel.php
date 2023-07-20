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
        return $this->requete("SELECT * FROM $this->table WHERE employee_email = ?", [$email])->fetch();
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     * @return UsersModel
     */
    public function setGender(string $gender): UsersModel
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return UsersModel
     */
    public function setFirstname(string $firstname): UsersModel
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return UsersModel
     */
    public function setLastname(string $lastname): UsersModel
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return string
     */
    public function getBirthdate(): string
    {
        return $this->birthdate;
    }

    /**
     * @param string $birthdate
     * @return UsersModel
     */
    public function setBirthdate(string $birthdate): UsersModel
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return UsersModel
     */
    public function setEmail(string $email): UsersModel
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return UsersModel
     */
    public function setPassword(string $password): UsersModel
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     * @return UsersModel
     */
    public function setRole(string $role): UsersModel
    {
        $this->role = $role;
        return $this;
    }
}