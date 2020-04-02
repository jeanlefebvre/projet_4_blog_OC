<?php

require_once (__DIR__.'/../model/Chapter.php');
require_once (__DIR__.'/../model/ChapterRepository.php');
require_once (__DIR__.'/ControllerTemplate.php');


class ChapterController extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');

        $chapterRepository = new ChapterRepository(); 
        $Chapters = $chapterRepository->findAll();

        $chapterContent = '';
        foreach($Chapters as $chapter)
        {
            $chaptertpl = new template(__DIR__.'/../templates/chapter.tpl');
            $chaptertpl->set('idChapter', $chapter->getId());
            $chaptertpl->set('titleChapter', $chapter->getTitle());
            $chaptertpl->set('mediaChapter', $chapter->getMedia());
            $chaptertpl->set('dateTimeChapter', $chapter->getDateTime());
            $chaptertpl->set('contentChapter', $chapter->getContent());

            $chapterContent .= $chaptertpl->render();
        }
        
        $this->setDefaultContent($tpl);
        $tpl->set('conceptBlog', '');
        $tpl->set('previewNovel', '');
                                        
        $tpl->set('content', $chapterContent);

        $tpl->set('commentChapter', $tpl->getFile(__DIR__.'/../templates/commentChapter.tpl'));

        $tpl->set('newsLetter', $tpl->getFile(__DIR__.'/../templates/newsLetter.tpl'));

        return $tpl->render();
    }
} 

