<?php 
session_start();

include_once('../routing/Router.php');
include_once('../controllers/HomeController.php');
include_once('../controllers/AboutController.php');
include_once('../controllers/NovelController.php');
include_once('../controllers/ChaptersController.php');
include_once('../controllers/DisplayOneChapterController.php');
include_once('../controllers/ContactController.php');
include_once('../controllers/ConnexionController.php');
include_once('../controllers/DisconnexionController.php');
include_once('../controllers/AddComment.php');
include_once('../controllers/ReportComment.php');
include_once('../controllers/AdminController.php');
include_once('../controllers/AdminChapter.php');
include_once('../controllers/FormAddChapter.php');

$router = new Router();
$router->addRouteAndController('/', new HomeController());
$router->addRouteAndController('/apropos', new AboutController());
$router->addRouteAndController('/roman', new NovelController());
$router->addRouteAndController('/chapitres', new ChaptersController());
$router->addRouteAndController('/chapitre', new DisplayOneChapterController());
$router->addRouteAndController('/contact', new ContactController());
$router->addRouteAndController('/connexion', new ConnexionController());
$router->addRouteAndController('/deconnexion', new DisconnexionController());
$router->addRouteAndController('/addcomment', new AddComment());
$router->addRouteAndController('/report', new ReportComment());
$router->addRouteAndController('/admin', new AdminController());
$router->addRouteAndController('/admin/chapitre', new AdminChapter());
$router->addRouteAndController('/admin/chapitre/creation', new FormAddChapter());

$controller = $router->extractRouteFromGlobals();
echo $controller->display();
