<?php
require_once (__DIR__.'/ControllerTemplate.php');
require_once (__DIR__.'/../model/Chapter.php');
require_once (__DIR__.'/../model/Comment.php');
require_once (__DIR__.'/../model/CommentRepository.php');

class ReportComment extends ControllerTemplate
{
    public function display ()
    {
       
        $commentRepository = new CommentRepository();

        if(isset($_POST['submitReportComment']))
        {
            $idReportComment = '';

            $commentDisplaytpl = new template(__DIR__.'/../templates/commentDisplay.tpl');
            
            $reportComment .= $commentDisplaytpl->render();

            $id = $idReportComment;
            $commentRepository->report($id);
        }

        header('location:/chapitre?id='.$idChapter);
        return '';
    }
    
    


}