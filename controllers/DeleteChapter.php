<?php
require_once (__DIR__.'/ControllerTemplate.php');
require_once (__DIR__.'/../model/Chapter.php');
require_once (__DIR__.'/../model/ChapterRepository.php');

class DeleteChapter extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');
        $this->setDefaultContent($tpl);

        $bannerAdmin = '';
        $adminTpl = new template(__DIR__.'/../templates/bannerAdmin.tpl');
        $bannerAdmin .= $adminTpl->render();
        $tpl->set('banner', $bannerAdmin);

        $chapterRepository = new ChapterRepository();

        $id = $_GET['id'] ?? 0;
        $chapter = $chapterRepository->find($id);

        $deleteChapter = '';
        $deleteChapterTpl = new template(__DIR__.'/../templates/adminChapterDelete.tpl');
        $deleteChapterTpl->set('idChapter', $chapter->getId());
       
        $deleteChapter .= $deleteChapterTpl->render();
        $tpl->set('content', $deleteChapter);


        return $tpl->render();
    }
}
      