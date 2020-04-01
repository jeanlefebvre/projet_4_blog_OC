<?php

require_once (__DIR__.'/../model/Chapter.php');
require_once (__DIR__.'/../model/ChapterRepository.php');
require_once (__DIR__.'/../model/Comment.php');
require_once (__DIR__.'/../model/CommentRepository.php');
require_once (__DIR__.'/ControllerTemplate.php');


class NovelController extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');
        $chapter = new chapter(__DIR__.'/../model/Chapter.php');
        $comment = new comment(__DIR__.'/../model/Comment.php');
        
        $this->setDefaultContent($tpl);

        $tpl->set('finalChapter', $tpl->getFile(__DIR__.'/../templates/finalChapter.tpl'));
                                                
        $tpl->set('titleChapitre', $chapter->getTitle(__DIR__.'/../model/Chapter.php'));
        $tpl->set('dateTimeChapitre', $chapter->getDateTime(__DIR__.'/../model/Chapter.php'));
        $tpl->set('contentChapitre', $chapter->getContent(__DIR__.'/../model/Chapter.php'));

        $tpl->set('commentChapter', $tpl->getFile(__DIR__.'/../templates/commentChapter.tpl'));

        $tpl->set('newsLetter', $tpl->getFile(__DIR__.'/../templates/newsLetter.tpl'));

        return $tpl->render();
    }
} 

