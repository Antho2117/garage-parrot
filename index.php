<?php

const _BASE_URL_ = "/garagevparrot";
const _BASE_USERSPACE_URL = "/garagevparrot/connexion";

require_once __DIR__."/models/Router.php";
//require_once __DIR__."/models/User.php";

require_once __DIR__."/controllers/HomeController.php";
require_once __DIR__."/controllers/CarsController.php";
require_once __DIR__."/controllers/WorkshopController.php";
require_once __DIR__."/controllers/ContactController.php";
require_once __DIR__."/controllers/FeedbackController.php";
require_once __DIR__."/controllers/ConnexionController.php";
require_once __DIR__."/controllers/ProfileController.php";
require_once __DIR__."/controllers/LogoutController.php";


$router = new Router();

$router->addRoute("GET", _BASE_URL_."/", "HomeController", "homeIndex");
$router->addRoute("GET", _BASE_URL_."/cars", "CarsController", "carsIndex");
$router->addRoute("GET", _BASE_URL_."/workshop", "WorkshopController", "workshopIndex");
$router->addRoute("GET", _BASE_URL_."/contact", "ContactController", "contactIndex");
$router->addRoute("GET", _BASE_URL_."/feedback", "FeedbackController", "feedbackIndex");
$router->addRoute("GET", _BASE_USERSPACE_URL."/", "ConnexionController", "connexionIndex");
$router->addRoute("POST", _BASE_USERSPACE_URL."/profile", "ProfileController", "profileIndex");
$router->addRoute("GET", _BASE_USERSPACE_URL."/logout", "LogoutController", "logoutIndex");

$method = $_SERVER["REQUEST_METHOD"];
$uri = $_SERVER["REQUEST_URI"];
$handler = $router->getHandler($method, $uri);

if($handler === null)
{
    header("HTTP/1.1 404 not found");
    exit();
}

$controller = new $handler["controller"]();
$action = $handler["action"];
$controller->$action();