<?php

require_once (__DIR__.'/ControllerTemplate.php');
require_once (__DIR__.'/../model/User.php');
require_once (__DIR__.'/../model/UserRepository.php');

class ConnexionController extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');
        $this->setDefaultContent($tpl);
  
        
        $userRepository = new UserRepository();

        if (isset($_POST['submitConnexion'])) 
        {
            $login = $_POST['login'];

            $user = $userRepository->findByLogin($login);
            if ($user instanceof User && password_verify($_POST['password'], $user->getPasswordHash())) {
                $_SESSION['connected'] = 1;
                header('location:/admin');
            } else {
                    $tpl->set('content', '<h4 class="title is-4 has-text-centered has-text-danger ">Login et/ou mot de passe incorrects</h4>');
                    return $tpl->render();
            } 
        }

        $connexiontContent = '';

        $connexionFormTpl = new template(__DIR__.'/../templates/connexion.tpl');
        $connexiontContent .= $connexionFormTpl->render();

        $tpl->set('content', $connexiontContent);

        return $tpl->render();
    }
} 

