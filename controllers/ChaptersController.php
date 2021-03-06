<?php
require_once (__DIR__.'/../model/Chapter.php');
require_once (__DIR__.'/../model/ChapterRepository.php');
require_once (__DIR__.'/ControllerTemplate.php');

class ChaptersController extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');
        $this->setDefaultContent($tpl);
        
        $chapterRepository = new ChapterRepository(); 
        $Chapters = $chapterRepository->findAll();

        $chapterContent = '';
        foreach($Chapters as $chapter)
        {
            $chaptertpl = new template(__DIR__.'/../templates/chapter.tpl');
            $chaptertpl->set('idChapter', $chapter->getId());
            $chaptertpl->set('titleChapter', strip_tags($chapter->getTitle()));
            $chaptertpl->set('mediaChapter', $chapter->getMedia());
            $chaptertpl->set('dateTimeChapter', $chapter->getDateTime());
            $chaptertpl->set('contentChapter', strip_tags($chapter->getContent()));
            $chapterContent .= $chaptertpl->render();
        }
        
        
        $tpl->set('conceptBlog', '');
        $tpl->set('previewNovel', '');
                                        
        $tpl->set('content', $chapterContent);

        $tpl->set('newsLetter', $tpl->getFile(__DIR__.'/../templates/newsLetter.tpl'));

        return $tpl->render();
    }
} 

