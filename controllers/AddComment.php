<?php
require_once (__DIR__.'/ControllerTemplate.php');
require_once (__DIR__.'/../model/CommentRepository.php');


class AddComment extends ControllerTemplate
{
    public function display ()
    {
       $commentRepository = new CommentRepository();

        if(isset($_POST['submitCommentForm']))
        {
            $user = $_POST['user'];
            $content = $_POST['commentContent']; 
            $idChapter = $_GET['id'];
            $commentRepository->create($user, $content, $idChapter);
        }
        
        header('location:/chapitre?id='.$idChapter);
        return '';
    }
} 

