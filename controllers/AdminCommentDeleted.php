<?php
require_once (__DIR__.'/ControllerTemplate.php');
require_once (__DIR__.'/../model/Comment.php');
require_once (__DIR__.'/../model/CommentRepository.php');

class AdminCommentDeleted extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');
        $this->setDefaultContent($tpl);

        $bannerAdmin = '';
        $adminTpl = new template(__DIR__.'/../templates/bannerAdmin.tpl');
        $bannerAdmin .= $adminTpl->render();
        $tpl->set('banner', $bannerAdmin);

        $deletedComment = '';
        $deletedCommentTpl = new template(__DIR__.'/../templates/adminCommentDeleted.tpl');
        $deletedComment .= $deletedCommentTpl->render();

        $tpl->set('content', $deletedComment);

        if(isset($_POST['deletedCommentBtn'])) 
        {
        $commentRepository = new CommentRepository();
        $idComment = $_POST["idComment"] ?? 0;
        $commentRepository->delete($idComment);
        }
        
        return $tpl->render();
    }
}
      