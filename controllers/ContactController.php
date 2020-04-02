<?php

require_once (__DIR__.'/ControllerTemplate.php');


class ContactController extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');
        $this->setDefaultContent($tpl);

        $contactContent = '';

        $contactFormTpl = new template(__DIR__.'/../templates/contactForm.tpl');
        $contactContent .= $contactFormTpl->render();

        $tpl->set('content', $contactContent);

        return $tpl->render();
    }
} 

