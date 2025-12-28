<?php

$routesJson = file_get_contents('routes.json'); // Adjust the path if needed
$routes = json_decode($routesJson, true);
// echo $routesJson;
// print_r($routes);
// die();

session_start();
require 'vendor/autoload.php';
include_once $_SERVER['DOCUMENT_ROOT'] . "/Helper/generalHelper.php";

date_default_timezone_set('Asia/Kolkata');
ini_set('display_errors', 1);
error_reporting(E_ALL);

$router = new AltoRouter();

foreach ($routes as $route) {
    foreach ($route['methods'] as $method) {
        $router->map($method, $route['path'], $route['controller']);
    }
}

$requestUri = $_SERVER['REQUEST_URI'];

$publicPath = $_SERVER['DOCUMENT_ROOT'] . $requestUri;
$currencySymbol = "₹";
// Match the current request
$match = $router->match();
// var_dump($match);
if ($match) {
    // Extract controller and method
    $target = $match['target'];

    // If no method is provided, default to 'index'
    if (strpos($target, '@') === false) {
        $target .= '@index'; // Append 'index' method
    }

    // Extract folder, controller, and method
    list($folderController, $method) = explode('@', $target);
    $segments = explode('/', $folderController);
    $folder = $segments[0]; // E.g., 'Admin' or 'User'

    if(count($segments)>1){
        $controller = end($segments);
        $controllerPath = __DIR__ . "/controllers/$folder/$controller.php";
    }else{
        $controller = end($segments);
        $controllerPath = __DIR__ . "/controllers/$controller.php";
    }

    // echo "$controllerPath";

    // Check if the controller file exists
    if (file_exists($controllerPath)) {
        require_once $controllerPath;

        // Check if the controller class exists
        if (class_exists($controller)) {
            $controllerInstance = new $controller(getDBObject()->getConnection());

            // Check if the method exists in the controller
            if (method_exists($controllerInstance, $method)) {
                call_user_func_array([$controllerInstance, $method], $match['params']);
            } else {
                echo json_encode(["status"=>"404","message"=>"Method Not Exists"]);
            }
        } else {
            echo json_encode(["status"=>"404","message"=>"Class Not Exists"]);
            exit;
        }
    } else {
        echo json_encode(["status"=>"404","message"=>"File not exists"]);
        exit;
    }
} else {
    echo json_encode(["status"=>"404","message"=>"Route Not Matched"]);
}
