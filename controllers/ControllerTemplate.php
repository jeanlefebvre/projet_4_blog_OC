<?php
require_once (__DIR__.'/../controllers/ConnexionController.php');
require_once (__DIR__.'/../templateEngine/template.php');


abstract class ControllerTemplate
{
    public function setDefaultContent($tpl)
    {
        $tpl->set('header', $tpl->getFile(__DIR__.'/../templates/header.tpl'));

        $tpl->set('banner', $tpl->getFile(__DIR__.'/../templates/banner.tpl'));

        if (($_SESSION['connected'] ?? 0) === 1) {
            $tpl->set('menuHeader', $tpl->getFile(__DIR__.'/../templates/menuHeaderConnected.tpl'));
        } else {
            $tpl->set('menuHeader', $tpl->getFile(__DIR__.'/../templates/menuHeaderDisconnected.tpl'));
        }
       
        $tpl->set('footer', $tpl->getFile(__DIR__.'/../templates/footer.tpl'));
    }
//securise l'admin 
    public function __construct () {
        if (($_SESSION['connected'] ?? 0) !== 1 && strpos($_SERVER['PATH_INFO'] ?? '/' , '/admin') === 0) {
            header('location:/connexion');  
                    
        }
    }
  
}