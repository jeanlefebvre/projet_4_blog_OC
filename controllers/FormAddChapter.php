<?php
require_once (__DIR__.'/ControllerTemplate.php');

class FormAddChapter extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');
        $this->setDefaultContent($tpl);
        // appel de la bannière Admin
        $bannerAdmin = '';
        $adminChapterTpl = new template(__DIR__.'/../templates/bannerAdmin.tpl');
        $bannerAdmin .= $adminChapterTpl->render();
        $tpl->set('banner', $bannerAdmin);
        
        // appel du formulaire
        $adminChapter = '';
        $adminChapterForm = new template(__DIR__.'/../templates/adminChapterForm.tpl');
        $adminChapter .= $adminChapterForm->render();
        $tpl->set('content', $adminChapter);

        return $tpl->render();   

        $commentRepository = new CommentRepository();

        if(isset($_POST['submitChapterForm']))
        {
            $title = $_POST['title'];
            $media = $_POST['media']; 
            $content = $_POST['chapterContent'];
            $commentRepository->create($title, $media, $content);
        }
        
        header('location:/admin/chapitre');
        return '';
        
        
    }
} 

