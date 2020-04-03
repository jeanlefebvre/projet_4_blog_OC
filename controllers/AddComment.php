<?php
require_once (__DIR__.'/ControllerTemplate.php');


class AddComment extends ControllerTemplate
{
    public function display ()
    {
        
        
        header('location:'.$_SERVER["HTTP_REFERER"] ?? '/chapitres');
        return '';
    }
} 

