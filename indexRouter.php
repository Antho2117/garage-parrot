<?php

const _BASE_URL_="/garage-parrot";

// Inclusion des classes
require_once "models/Router.php";
require_once "models/User.php";
require_once "controllers/HomeController.php";
require_once "controllers/ProfileController.php";
require_once "controllers/LogoutController.php";

// Instanciation du routeur
$router = new Router();

// Définition des routes
$router->addRoute("GET", _BASE_URL_."/", "HomeController", "index");

$method = $_SERVER["REQUEST_METHOD"];
var_dump($method);
$uri = $_SERVER["REQUEST_URI"];
var_dump($uri);
$handler = $router->getHandler($method, $uri);
var_dump($handler);

if($handler === null){
    echo'page non trouvée';
}

// Appel du contrôleur
$controller = $handler["controller"]();
$action = $handler["action"];
$controller->$action();