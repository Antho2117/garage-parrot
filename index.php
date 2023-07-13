<?php

// On définit une constante contenant le dossier racine
const ROOT = "/gvp";
const BASE_UPLOADS = "/Applications/XAMPP/xamppfiles/htdocs".ROOT."/uploads/";
// On importe les namespaces nécessaires
use App\Autoloader;
use App\Core\Main;

// On importe l'Autoloader
require_once 'Autoloader.php';
Autoloader::register();

// On instancie Main
$app = new Main();

// On démarre l'application
$app->start();