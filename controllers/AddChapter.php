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
        

        $adminContent = '';

        $adminTpl = new template(__DIR__.'/../templates/admin.tpl');
        $adminContent .= $adminTpl->render();

        $tpl->set('content', $addedChapter . $adminContent);

        

        $chapterRepository = new ChapterRepository();
        if(isset($_POST['submitChapterForm']) && !empty($_POST['chapterContent']))
        {
            $title = $_POST['title'];
            $uploaddir = __DIR__.'/../public/media/';
            $uploadfile = $uploaddir . basename($_FILES['image']['name']);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {  
                $media = '/media/' .  basename($_FILES['image']['name']);
                $content = $_POST['chapterContent'];
                $chapterRepository->create($title, $media, $content);
            // ici le telechargement est ok.
            } else {
                header('location:/admin/chapter/creation');
            // ici le telechargement est en erreur
            }
        }
        return $tpl->render();
    }
} 

