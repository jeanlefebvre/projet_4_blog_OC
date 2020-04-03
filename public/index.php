<?php 

include_once('../routing/Router.php');
include_once('../controllers/HomeController.php');
include_once('../controllers/AboutController.php');
include_once('../controllers/NovelController.php');
include_once('../controllers/ChaptersController.php');
include_once('../controllers/DisplayOneChapterController.php');
include_once('../controllers/ContactController.php');
include_once('../controllers/ConnexionController.php');
include_once('../controllers/AddComment.php');

$router = new Router();
$router->addRouteAndController('/', new HomeController());
$router->addRouteAndController('/apropos', new AboutController());
$router->addRouteAndController('/roman', new NovelController());
$router->addRouteAndController('/chapitres', new ChaptersController());
$router->addRouteAndController('/chapitre', new DisplayOneChapterController());
$router->addRouteAndController('/contact', new ContactController());
$router->addRouteAndController('/connexion', new ConnexionController());
$router->addRouteAndController('/addcomment', new AddComment());


$controller = $router->extractRouteFromGlobals();
echo $controller->display();
