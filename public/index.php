<?php
require_once "../vendor/autoload.php";
require_once "../config/ConnectionCreator.php";
require_once "../src/controllers/HomeController.php";
require_once "../src/controllers/HomeController.php";
require_once "../src/controllers/DeleteClientController.php";
require_once "../src/controllers/UpdateClientController.php";
require_once "../src/controllers/UpdateClientFormController.php";
require_once "../src/controllers/SearchClienteController.php";
require_once "../src/controllers/AddClientFormController.php";
require_once "../src/controllers/AddClientController.php";



$routes = require_once __DIR__ . "../../config/routes.php";

$pathInfo=$_SERVER['PATH_INFO'] ?? '/';

$httpMethod =$_SERVER['REQUEST_METHOD'];
$key = "$httpMethod|$pathInfo";
if(array_key_exists($key,$routes)) {

    $controllerClass = $routes["$httpMethod|$pathInfo"];
    $controller = new $controllerClass();
}else{
    echo "Deu erro para chamar a rota";
}
$controller->handle();