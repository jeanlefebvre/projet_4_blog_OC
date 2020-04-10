<?php
require_once (__DIR__.'/ControllerTemplate.php');


class AdminController extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');
        $this->setDefaultContent($tpl);

        $bannerAdmin = '';

        $adminTpl = new template(__DIR__.'/../templates/bannerAdmin.tpl');
        $bannerAdmin .= $adminTpl->render();

        $tpl->set('banner', $bannerAdmin);

        $adminContent = '';

        $adminTpl = new template(__DIR__.'/../templates/admin.tpl');
        $adminContent .= $adminTpl->render();

        $tpl->set('content', $adminContent);



        return $tpl->render();
    }
} 

