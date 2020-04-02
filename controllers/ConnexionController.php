<?php

require_once (__DIR__.'/ControllerTemplate.php');


class ConnexionController extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');
        $this->setDefaultContent($tpl);

        $connexiontContent = '';

        $connexionFormTpl = new template(__DIR__.'/../templates/connexion.tpl');
        $connexiontContent .= $connexionFormTpl->render();

        $tpl->set('content', $connexiontContent);

        return $tpl->render();
    }
} 

