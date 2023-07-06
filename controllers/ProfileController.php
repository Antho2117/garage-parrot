<?php

class ProfileController
{
    public function profileIndex()
    {
        // ajouter les conditions et les roles
        if($_SERVER["REQUEST_METHOD"] === "POST")
        {
            require_once "views/adminspace.php";
        }
    }
}