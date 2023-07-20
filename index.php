<?php

use App\Autoloader;

// On définit une constante contenant le dossier racine
const ROOT = "/gvp";
const BASE_UPLOADS = "/Applications/MAMP/htdocs".ROOT."/uploads/";
// On importe les namespaces nécessaires

// On importe l'Autoloader
require_once 'Autoloader.php';
Autoloader::register();

// On instancie Main
$app = new Main;

// On démarre l'application
$app->start();