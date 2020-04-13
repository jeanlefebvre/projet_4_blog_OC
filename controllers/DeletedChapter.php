<?php
require_once (__DIR__.'/ControllerTemplate.php');
require_once (__DIR__.'/../model/Chapter.php');
require_once (__DIR__.'/../model/ChapterRepository.php');
require_once (__DIR__.'/../model/CommentRepository.php');

class DeletedChapter extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');
        $this->setDefaultContent($tpl);

        $bannerAdmin = '';
        $adminTpl = new template(__DIR__.'/../templates/bannerAdmin.tpl');
        $bannerAdmin .= $adminTpl->render();
        $tpl->set('banner', $bannerAdmin);

        $deletedChapter = '';
        $deletedChapterTpl = new template(__DIR__.'/../templates/adminChapterDeleted.tpl');
        $deletedChapter .= $deletedChapterTpl->render();

        $tpl->set('content', $deletedChapter);

        if(isset($_POST['deletedChapterBtn'])) 
        {
               
        $chapterRepository = new ChapterRepository();
        $commentRepository = new CommentRepository();
        $idChapter = $_POST["idChapter"] ?? 0;
        $chapterRepository->delete($idChapter);
        $commentRepository->deleteByChapterId($idChapter);
        }
        
        return $tpl->render();
    }
}
      