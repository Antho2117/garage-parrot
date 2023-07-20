<?php

namespace App\Core;
use App\Controllers\HomeController;

class Main
{
    /**
     * site routing
     */
    public function start()
    {
        session_start();
        // address
        $uri = $_SERVER['REQUEST_URI'];

        // address not empty and not finishing by /
        if(!empty($uri) && $uri != '/' && $uri[-1] === '/'){
            // if / => delete him
            $uri = substr($uri, 0, -1);

            // permanent redirection
            http_response_code(301);

            // redirect to /
            header('Location: '.$uri);
            exit;
        }

        $params = explode('/', $_GET['p']);

        if($params[0] != ""){

            $controller = '\\App\\Controllers\\'.ucfirst(array_shift($params)).'Controller';

            $action = isset($params[0]) ? array_shift($params) : 'index';

            $controller = new $controller();

            if(method_exists($controller, $action)){

                (isset($params[0])) ? call_user_func_array([$controller, $action], $params) : $controller->$action();

            }else{

                http_response_code(404);

                echo "La page recherchée n'existe pas";

            }

        }else{

            $controller = new HomeController;

            $controller->index();

        }
    }
}