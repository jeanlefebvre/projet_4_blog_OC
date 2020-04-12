<?php
require_once (__DIR__.'/ControllerTemplate.php');
require_once (__DIR__.'/../model/ChapterRepository.php');


class AddChapter extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');
        $this->setDefaultContent($tpl);

        $bannerAdmin = '';
        $adminChapterTpl = new template(__DIR__.'/../templates/bannerAdmin.tpl');
        $bannerAdmin .= $adminChapterTpl->render();
        $tpl->set('banner', $bannerAdmin);

        $addedChapter = '';
        $addedChapterTpl = new template(__DIR__.'/../templates/addedChapter.tpl');
        $addedChapter .= $addedChapterTpl->render();
        $tpl->set('content', $addedChapter);

        $adminContent = '';

        $adminTpl = new template(__DIR__.'/../templates/admin.tpl');
        $adminContent .= $adminTpl->render();

        $tpl->set('content', $adminContent);

        return $tpl->render();

        $chapterRepository = new ChapterRepository();

        if(isset($_POST['submitChapterForm']) && !empty($_POST['chapterContent']))
        {
            $title = $_POST['title'];
            $media = $_POST['media']; 
            $content = $_POST['chapterContent'];
            $commentRepository->create($title, $media, $content);
        }
        
    }
} 

