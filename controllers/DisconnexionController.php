<?php

class DisconnexionController extends ControllerTemplate
{
    public function display ()
    {
        if(isset($_POST['disconnectBtn'])) {
            session_destroy();
            unset($_SESSION);
            header('Location:/');
        }
    }
}