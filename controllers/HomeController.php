<?php

require_once (__DIR__.'/../model/UserRepository.php');
require_once (__DIR__.'/ControllerTemplate.php');


class HomeController extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');

        $this->setDefaultContent($tpl);

        $tpl->set('conceptBlog', $tpl->getFile(__DIR__.'/../templates/conceptBlog.tpl'));
        $tpl->set('previewNovel', $tpl->getFile(__DIR__.'/../templates/previewNovel.tpl'));
        $tpl->set('newsLetter', $tpl->getFile(__DIR__.'/../templates/newsLetter.tpl'));

        return $tpl->render();
    }
} 

