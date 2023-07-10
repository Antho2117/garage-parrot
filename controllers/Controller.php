<?php

namespace App\Controllers;

abstract class Controller
{
    public function render(string $fichier, array $data = [], string $template = "default")
    {
        // Récupère les données et les extrait sous forme de variables
        extract($data);

        ob_start();

        // Crée le chemin et inclut le fichier de vue
        require_once('Views/'.$fichier.'.php');

        $content = ob_get_clean();

        require_once "Views/".$template.".php";
    }
}