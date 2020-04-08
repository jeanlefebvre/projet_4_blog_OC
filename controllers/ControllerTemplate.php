<?php
require_once (__DIR__.'/../controllers/ConnexionController.php');
require_once (__DIR__.'/../templateEngine/template.php');


abstract class ControllerTemplate
{
    public function setDefaultContent($tpl)
    {
        $tpl->set('header', $tpl->getFile(__DIR__.'/../templates/header.tpl'));

        $tpl->set('banner', $tpl->getFile(__DIR__.'/../templates/banner.tpl'));

        // condition si je suis 'connecté' dans la session = menu connecté appelé le bon menu


        if (isset($_SESSION['connected']) && $_SESSION['connected'] === 1) { 
            $tpl->set('menuHeader', $tpl->getFile(__DIR__.'/../templates/menuHeaderConnected.tpl'));
        } else {
            $tpl->set('menuHeader', $tpl->getFile(__DIR__.'/../templates/menuHeaderDisconnected.tpl'));
        }
        
        $tpl->set('footer', $tpl->getFile(__DIR__.'/../templates/footer.tpl'));
    }
  
}