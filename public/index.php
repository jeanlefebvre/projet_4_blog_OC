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
include_once('../controllers/AddChapter.php');
include_once('../controllers/EditChapter.php');
include_once('../controllers/EditedChapter.php');
include_once('../controllers/DeleteChapter.php');
include_once('../controllers/DeletedChapter.php');
include_once('../controllers/AdminCommentsDisplay.php');
include_once('../controllers/AdminCommentEdit.php');
include_once('../controllers/AdminCommentEdited.php');
include_once('../controllers/AdminCommentDelete.php');
include_once('../controllers/AdminCommentDeleted.php');

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
$router->addRouteAndController('/admin/chapitre/cree', new AddChapter());
$router->addRouteAndController('/admin/chapitre/edition', new EditChapter());
$router->addRouteAndController('/admin/chapitre/edited', new EditedChapter());
$router->addRouteAndController('/admin/chapitre/delete', new DeleteChapter());
$router->addRouteAndController('/admin/chapitre/deleted', new DeletedChapter());
$router->addRouteAndController('/admin/commentaire', new AdminCommentsDisplay());
$router->addRouteAndController('/admin/commentaire/edition', new AdminCommentEdit());
$router->addRouteAndController('/admin/commentaire/edited', new AdminCommentEdited());
$router->addRouteAndController('/admin/commentaire/delete', new AdminCommentDelete());
$router->addRouteAndController('/admin/commentaire/deleted', new AdminCommentDeleted());

$controller = $router->extractRouteFromGlobals();
echo $controller->display();
