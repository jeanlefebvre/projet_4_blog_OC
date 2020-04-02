<?php

require_once (__DIR__.'/../model/Chapter.php');
require_once (__DIR__.'/../model/ChapterRepository.php');
require_once (__DIR__.'/../model/Comment.php');
require_once (__DIR__.'/../model/CommentRepository.php');
require_once (__DIR__.'/ControllerTemplate.php');


class DisplayOneChapterController extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');

        $chapterRepository = new ChapterRepository(); 
        $id= $_GET['id'];
        $chapter = $chapterRepository->find($id);
     
        $displayonechapterContent = '';
     
        $chaptertpl = new template(__DIR__.'/../templates/chapter.tpl');
        $chaptertpl->set('idChapter', $chapter->getId());
        $chaptertpl->set('titleChapter', $chapter->getTitle());
        $chaptertpl->set('mediaChapter', $chapter->getMedia());
        $chaptertpl->set('dateTimeChapter', $chapter->getDateTime());
        $chaptertpl->set('contentChapter', $chapter->getContent());
        $displayonechapterContent .= $chaptertpl->render();
        

        $commentchapter = new template(__DIR__.'/../templates/commentChapter.tpl');
        $displayonechapterContent .= $commentchapter->render();

        $commentRepository = new CommentRepository();        
        $idChapter = $_GET['id'];
        $commentdisplay = $commentRepository->findAllByIdChapter($idChapter);

        $commentdisplay = new template(__DIR__.'/../templates/commentDisplay.tpl');
        $commentdisplay->set('userComment', $comment->getUserName());
        $commentdisplay->set('dateTimeComment', $comment->getDateTime());
        $commentdisplay->set('contentComment', $comment->getContent());
        $displayonechapterContent .= $commentdisplay->render();



        $this->setDefaultContent($tpl);
        $tpl->set('conceptBlog', '');
        $tpl->set('previewNovel', '');
                                        
        $tpl->set('content', $displayonechapterContent);

       
        $tpl->set('newsLetter', $tpl->getFile(__DIR__.'/../templates/newsLetter.tpl'));

        return $tpl->render();
    }
} 

