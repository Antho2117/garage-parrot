<?php

namespace App\Controllers;

abstract class Controller
{
    public function render(string $fichier, array $data = [], string $template = "default")
    {
        extract($data);

        ob_start();

        require_once('Views/' . $fichier . '.php');

        $content = ob_get_clean();

        require_once "Views/" . $template . ".php";
    }
}