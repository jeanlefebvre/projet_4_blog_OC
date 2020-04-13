<?php
require_once (__DIR__.'/ControllerTemplate.php');
require_once (__DIR__.'/../model/Chapter.php');
require_once (__DIR__.'/../model/ChapterRepository.php');

class EditedChapter extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');
        $this->setDefaultContent($tpl);

        $bannerAdmin = '';
        $adminTpl = new template(__DIR__.'/../templates/bannerAdmin.tpl');
        $bannerAdmin .= $adminTpl->render();
        $tpl->set('banner', $bannerAdmin);

        $editedChapter = '';
        $editedChapterTpl = new template(__DIR__.'/../templates/adminChapterEdited.tpl');
        $editedChapter .= $editedChapterTpl->render();

        $tpl->set('content', $editedChapter);
        
        if(isset($_POST['submitEditChapterForm'])) 
        {
            $chapterRepository = new ChapterRepository();

            $id = $_POST['idChapter'];
            $title = $_POST['title'];
            $content = $_POST['chapterContent'];
            $chapterRepository->update($id, $title, $content);
        }
        return $tpl->render();
    }
}