<?php 

include_once('../routing/Router.php');
include_once('../controllers/HomeController.php');
include_once('../controllers/NovelController.php');

$router = new Router();
$router->addRouteAndController('/', new HomeController());
$router->addRouteAndController('/roman', new NovelController());


$controller = $router->extractRouteFromGlobals();
echo $controller->display();
