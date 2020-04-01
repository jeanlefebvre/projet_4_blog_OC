<?php

require_once (__DIR__.'/../model/Chapter.php');
require_once (__DIR__.'/../model/ChapterRepository.php');
require_once (__DIR__.'/ControllerTemplate.php');


class NovelController extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');
        $this->setDefaultContent($tpl);

        $novelContent = '';

        $previewNovelTpl = new template(__DIR__.'/../templates/previewNovel.tpl');
        $novelContent .= $previewNovelTpl->render();

        $newLetterTpl = new template(__DIR__.'/../templates/newsLetter.tpl');
        $novelContent .= $newLetterTpl->render();

        $tpl->set('content', $novelContent);

        return $tpl->render();
    }
} 

