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
        $this->setDefaultContent($tpl);

        $chapterRepository = new ChapterRepository(); 
        
        $id= $_GET['id'] ?? 0;
        $chapter = $chapterRepository->find($id);
        if($chapter == false){
            $tpl->set('content', '<h2 class="title is-2 has-text-centered">Ce chapitre n\'est pas encore disponible</h2>');
            return $tpl->render();
        }
    
        $displayonechapterContent = '';
        // affiche le chapitre
        $chaptertpl = new template(__DIR__.'/../templates/chapter.tpl');
        $chaptertpl->set('idChapter', $chapter->getId());
        $chaptertpl->set('titleChapter', strip_tags($chapter->getTitle()));
        $chaptertpl->set('mediaChapter', $chapter->getMedia());
        $chaptertpl->set('dateTimeChapter', $chapter->getDateTime());
        $chaptertpl->set('contentChapter', strip_tags($chapter->getContent()));
        $displayonechapterContent .= $chaptertpl->render();
        
        //affiche le formulaire de commentaire
        $commentchapter = new template(__DIR__.'/../templates/commentChapter.tpl');
        $displayonechapterContent .= $commentchapter->render();

        //affiche tous les commentaires du chapitre
        $commentRepository = new CommentRepository();        
        $idChapter = intval($_GET['id']);
        $comments = $commentRepository->findAllByIdChapter($idChapter);
        

        foreach($comments as $comment)
        {
            $commentdisplay = new template(__DIR__.'/../templates/commentDisplay.tpl');
            $commentdisplay->set('userComment', $comment->getUserName());
            $commentdisplay->set('dateTimeComment', $comment->getDateTime());
            $commentdisplay->set('contentComment', strip_tags($comment->getContent()));
            $displayonechapterContent .= $commentdisplay->render();
    
        }
      
        $tpl->set('conceptBlog', '');
        $tpl->set('previewNovel', '');
                                        
        $tpl->set('content', $displayonechapterContent);

       
        $tpl->set('newsLetter', $tpl->getFile(__DIR__.'/../templates/newsLetter.tpl'));

        return $tpl->render();
    }
} 

