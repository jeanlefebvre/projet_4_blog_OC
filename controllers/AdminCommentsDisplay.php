<?php
require_once (__DIR__.'/ControllerTemplate.php');
require_once (__DIR__.'/../model/Comment.php');
require_once (__DIR__.'/../model/CommentRepository.php');
require_once (__DIR__.'/../model/Chapter.php');

class AdminCommentsDisplay extends ControllerTemplate
{
    public function display ()
    {
        
        $tpl = new template(__DIR__.'/../templates/main.tpl');
        $this->setDefaultContent($tpl);
        // appel de la bannière Admin
        $bannerAdmin = '';
        $adminChapterTpl = new template(__DIR__.'/../templates/bannerAdmin.tpl');
        $bannerAdmin .= $adminChapterTpl->render();
        
        $adminComment = '';

        $tpl->set('banner', $bannerAdmin);
     
        $commentRepository = new CommentRepository(); 
        $Comments = $commentRepository->findAllOrderByReport();

        foreach($Comments as $comment)
        {
            $adminCommentTpl = new template(__DIR__.'/../templates/adminCommentsDisplay.tpl');
            $adminCommentTpl->set('idComment', $comment->getId());
            $adminCommentTpl->set('idChapter', $comment->getIdChapter());
            $adminCommentTpl->set('userComment', strip_tags($comment->getUserName()));
            $adminCommentTpl->set('report', strip_tags($comment->getReport()));
            $adminCommentTpl->set('dateTimeComment', $comment->getDateTime());
            $adminCommentTpl->set('contentComment', strip_tags($comment->getContent()));
            $adminComment .= $adminCommentTpl->render();
        }
        $tpl->set('content', $adminComment);

        return $tpl->render();
    }
} 

