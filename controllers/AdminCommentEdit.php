<?php
require_once (__DIR__.'/ControllerTemplate.php');
require_once (__DIR__.'/../model/Comment.php');
require_once (__DIR__.'/../model/CommentRepository.php');

class AdminCommentEdit extends ControllerTemplate
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

        $adminCommentEdit = '';
        $adminCommentEditTpl = new template(__DIR__.'/../templates/adminCommentEdit.tpl');
        $adminCommentEditTpl->set('idComment', $comment->getId());
        $adminCommentEditTpl->set('contentComment', strip_tags($comment->getContent()));

        $adminCommentEdit .= $adminCommentEditTpl->render();
        $tpl->set('content', $adminCommentEdit);
        
        return $tpl->render();
    }
}
      