
<?php

require_once (__DIR__.'/ControllerTemplate.php');

class ConnexionController extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');
        $this->setDefaultContent($tpl);
  
        $user = 'UserBDD';
        $password = '$2y$12$KS.nvtsUsB5mQV1KpmcHOOnwdMHyRyXOq1mKjhy030ZR1p10mxIHm';

        if (isset($_POST['submitConnexion'])) {
            if ($_POST['user'] === $user && password_verify($_POST['password'], $password)) {
                session_start();
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