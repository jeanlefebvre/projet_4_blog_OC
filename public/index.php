<?php 

include_once('../routing/Router.php');
include_once('../controllers/HomeController.php');

$router = new Router();
$router->addRouteAndController('/', new HomeController());

$controller = $router->extractRouteFromGlobals();
echo $controller->display();

