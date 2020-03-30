<?php

require_once (__DIR__.'/../templateEngine/template.php');


class ControllerTemplate
{
    public function display ()
    {
        // Initialize object
        $tpl = new template('../template/main.tpl');

        // Set {xxx} as a xxx.tpl files
        $tpl->set('header', $tpl->getFile('../template/header.tpl'));
        $tpl->set('banner', $tpl->getFile('../template/banner.tpl'));
        $tpl->set('conceptBlog', $tpl->getFile('../template/conceptBlog.tpl'));
        $tpl->set('previewNovel', $tpl->getFile('../template/previewNovel.tpl'));
        $tpl->set('newsLetter', $tpl->getFile('../template/newsLetter.tpl'));
        $tpl->set('footer', $tpl->getFile('../template/footer.tpl'));

        // Render the template
        $tpl->render();
    }
  
}