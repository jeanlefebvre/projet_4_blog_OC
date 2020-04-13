<?php
require_once (__DIR__.'/ControllerTemplate.php');
require_once (__DIR__.'/../model/Chapter.php');
require_once (__DIR__.'/../model/ChapterRepository.php');

class EditChapter extends ControllerTemplate
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

        $adminChapterEdit = '';
        $adminChapterEditTpl = new template(__DIR__.'/../templates/adminChapterEdit.tpl');
        $adminChapterEditTpl->set('idChapter', $chapter->getId());
        $adminChapterEditTpl->set('titleChapter', strip_tags($chapter->getTitle()));
        $adminChapterEditTpl->set('contentChapter', strip_tags($chapter->getContent()));

        $adminChapterEdit .= $adminChapterEditTpl->render();
        $tpl->set('content', $adminChapterEdit);
        
        return $tpl->render();
    }
}
      