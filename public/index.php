<?php 

include_once('../routing/Router.php');
include_once('../controllers/HomeController.php');
include_once('../controllers/AboutController.php');
include_once('../controllers/NovelController.php');
include_once('../controllers/ChapterController.php');
include_once('../controllers/DisplayOneChapterController.php');
include_once('../controllers/ContactController.php');
include_once('../controllers/ConnexionController.php');

$router = new Router();
$router->addRouteAndController('/', new HomeController());
$router->addRouteAndController('/apropos', new AboutController());
$router->addRouteAndController('/roman', new NovelController());
$router->addRouteAndController('/chapitres', new ChapterController());
$router->addRouteAndController('/chapitre', new DisplayOneChapterController());
$router->addRouteAndController('/contact', new ContactController());
$router->addRouteAndController('/connexion', new ConnexionController());


$controller = $router->extractRouteFromGlobals();
echo $controller->display();
