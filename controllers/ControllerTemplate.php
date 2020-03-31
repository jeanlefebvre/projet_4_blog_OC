<?php

require_once (__DIR__.'/../templateEngine/template.php');


abstract class ControllerTemplate
{
    public function setDefaultContent($tpl)
    {
        // Set {xxx} as a xxx.tpl files
        $tpl->set('header', $tpl->getFile(__DIR__.'/../templates/header.tpl'));
        if (isset($_SESSION['connected']) && $_SESSION['connected'] === "yes") { 
            $tpl->set('menuHeader', $tpl->getFile(__DIR__.'/../templates/menuHeaderConnected.tpl'));
        } else {
            $tpl->set('menuHeader', $tpl->getFile(__DIR__.'/../templates/menuHeaderDisconnected.tpl'));
        }
        // condition si je suis connecté ou pas connecté appelé le bon menu
        $tpl->set('banner', $tpl->getFile(__DIR__.'/../templates/banner.tpl'));
        $tpl->set('footer', $tpl->getFile(__DIR__.'/../templates/footer.tpl'));
    }
  
}