<?php

require_once (__DIR__.'/../model/ChapterRepository.php');
require_once (__DIR__.'/ControllerTemplate.php');


class NovelController extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');

        $this->setDefaultContent($tpl);

        $tpl->set('previewNovel', $tpl->getFile(__DIR__.'/../templates/previewNovel.tpl'));

        $tpl->set('finalChapter', $tpl->getFile(__DIR__.'/../templates/finalChapter.tpl'));
        $tpl->set('titreChapitre', $chapter->getTitle(__DIR__.'/../model/Chapter.php'));
        $tpl->set('dateTimeChapitre', $chapter->getDateTime(__DIR__.'/../model/Chapter.php'));
        $tpl->set('contentChapitre', $chapter->getContent(__DIR__.'/../model/Chapter.php'));

        $tpl->set('newsLetter', $tpl->getFile(__DIR__.'/../templates/newsLetter.tpl'));

        return $tpl->render();
    }
} 

