<?php

require_once (__DIR__.'/../model/UserRepository.php');
require_once (__DIR__.'/ControllerTemplate.php');


class HomeController extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');
        $this->setDefaultContent($tpl);

        $homeContent = '';

        $conceptBlogTpl = new template(__DIR__.'/../templates/conceptBlog.tpl');
        $homeContent .= $conceptBlogTpl->render();

        $previewNovelTpl = new template(__DIR__.'/../templates/previewNovel.tpl');
        $homeContent .= $previewNovelTpl->render();

        $newLetterTpl = new template(__DIR__.'/../templates/newsLetter.tpl');
        $homeContent .= $newLetterTpl->render();

        $tpl->set('content', $homeContent);
        
        return $tpl->render();
    }
} 

