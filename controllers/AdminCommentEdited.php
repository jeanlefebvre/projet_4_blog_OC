<?php
require_once (__DIR__.'/ControllerTemplate.php');
require_once (__DIR__.'/../model/Comment.php');
require_once (__DIR__.'/../model/CommentRepository.php');

class AdminCommentEdited extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');
        $this->setDefaultContent($tpl);

        $bannerAdmin = '';
        $adminTpl = new template(__DIR__.'/../templates/bannerAdmin.tpl');
        $bannerAdmin .= $adminTpl->render();
        $tpl->set('banner', $bannerAdmin);

        $editedComment = '';
        $editedCommentTpl = new template(__DIR__.'/../templates/adminCommentEdited.tpl');
        $editedComment .= $editedCommentTpl->render();

        $tpl->set('content', $editedComment);
        
        if(isset($_POST['submitEditCommentForm'])) 
        {
            $commentRepository = new CommentRepository();

            $id = $_POST['idComment'];
            $content = $_POST['commentContent'];
            $commentRepository->update($id, $content);
        }
        return $tpl->render();
    }
}