<?php

require_once (__DIR__.'/ControllerTemplate.php');


class AboutController extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');
        $this->setDefaultContent($tpl);

        $aboutContent = '';

        $conceptBlogTpl = new template(__DIR__.'/../templates/conceptBlog.tpl');
        $aboutContent .= $conceptBlogTpl->render();

        $contactFormTpl = new template(__DIR__.'/../templates/contactForm.tpl');
        $aboutContent .= $contactFormTpl->render();

        $tpl->set('content', $aboutContent);

        return $tpl->render();
    }
} 

