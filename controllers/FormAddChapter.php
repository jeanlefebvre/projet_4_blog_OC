<?php
require_once (__DIR__.'/ControllerTemplate.php');
require_once (__DIR__.'/../model/ChapterRepository.php');

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
        
    }
} 

