<?php
require_once (__DIR__.'/../model/Chapter.php');
require_once (__DIR__.'/../model/ChapterRepository.php');
require_once (__DIR__.'/ControllerTemplate.php');

class AdminChapter extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');
        $this->setDefaultContent($tpl);
        // appel de la bannière Admin
        $bannerAdmin = '';
        $adminChapterTpl = new template(__DIR__.'/../templates/bannerAdmin.tpl');
        $bannerAdmin .= $adminChapterTpl->render();
        
        $adminChapter = '';

        $tpl->set('banner', $bannerAdmin);
        
        $adminChapterBtnCreateTpl = new template(__DIR__.'/../templates/adminChapterBtnCreate.tpl');
        $adminChapter .= $adminChapterBtnCreateTpl->render();
 
        $chapterRepository = new ChapterRepository(); 
        $Chapters = $chapterRepository->findAll();

        foreach($Chapters as $chapter)
        {
            $adminChaptertpl = new template(__DIR__.'/../templates/adminDisplayChapters.tpl');
            $adminChaptertpl->set('idChapter', $chapter->getId());
            $adminChaptertpl->set('titleChapter', strip_tags($chapter->getTitle()));
            $adminChaptertpl->set('dateTimeChapter', $chapter->getDateTime());
            $adminChaptertpl->set('contentChapter', strip_tags($chapter->getContent()));
            $adminChapter .= $adminChaptertpl->render();
        }
        $tpl->set('content', $adminChapter);

        return $tpl->render();

        
    }
} 

