<?php

namespace App;
use App\Core\Main;

const ROOT = "/gvp";
const BASE_UPLOADS = "/Applications/MAMP/htdocs".ROOT."/uploads/";

require_once 'Autoloader.php';
Autoloader::register();

$app = new Main();

$app->start();