<?php
require_once (__DIR__.'/ControllerTemplate.php');
require_once (__DIR__.'/../model/Chapter.php');
require_once (__DIR__.'/../model/Comment.php');
require_once (__DIR__.'/../model/CommentRepository.php');

class ReportComment extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');
        $this->setDefaultContent($tpl);

        $report = '';

        $reportTpl = new template(__DIR__.'/../templates/reportAdded.tpl');
        $report .= $reportTpl->render();

        $tpl->set('content', $report);

        return $tpl->render();

        $tpl->set('content', $report);
        
        if(isset($_POST['reportComment']))
        {
            $commentRepository = new CommentRepository();

            $id = $_POST['idComment']; /*idComment */;
            $commentRepository->report($id);
        }

    }
    
    


}