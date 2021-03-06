<?php
require_once (__DIR__.'/ControllerTemplate.php');
require_once (__DIR__.'/../model/Comment.php');
require_once (__DIR__.'/../model/CommentRepository.php');

class AdminCommentDelete extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');
        $this->setDefaultContent($tpl);

        $bannerAdmin = '';
        $adminTpl = new template(__DIR__.'/../templates/bannerAdmin.tpl');
        $bannerAdmin .= $adminTpl->render();
        $tpl->set('banner', $bannerAdmin);

        $commentRepository = new CommentRepository();
        
        $id = $_GET['id'] ?? 0;
        $comment = $commentRepository->find($id);
        if($comment == false){
            $tpl->set('content', '<h2 class="title is-2 has-text-centered">Ce chapitre n\'existe pas</h2>');
            return $tpl->render();
        }


        $id = $_GET['id'] ?? 0;
        $chapter = $commentRepository->find($id);

        $deleteComment = '';
        $deleteCommentTpl = new template(__DIR__.'/../templates/adminCommentDelete.tpl');
        $deleteCommentTpl->set('idComment', $id);
       
        $deleteComment .= $deleteCommentTpl->render();
        $tpl->set('content', $deleteComment);

        return $tpl->render();
    }
}
      