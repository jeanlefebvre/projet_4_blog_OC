<?php
require_once (__DIR__.'/../controllers/ConnexionController.php');
require_once (__DIR__.'/../templateEngine/template.php');


abstract class ControllerTemplate
{
    public function setDefaultContent($tpl)
    {
        $tpl->set('header', $tpl->getFile(__DIR__.'/../templates/header.tpl'));

        $tpl->set('banner', $tpl->getFile(__DIR__.'/../templates/banner.tpl'));

        $tpl->set('menuHeader', $tpl->getFile(__DIR__.'/../templates/menuHeaderDisconnected.tpl'));
    
        $tpl->set('footer', $tpl->getFile(__DIR__.'/../templates/footer.tpl'));
    }

    function connected ():bool {
        if (session_status() === PHP_SESSION_NONE) {
            session_start(); 
            $_SESSION['connected'] = 1;
            header('location:/admin');

            $tpl->set('menuHeader', $tpl->getFile(__DIR__.'/../templates/menuHeaderConnected.tpl'));
        }  
    }
  
}