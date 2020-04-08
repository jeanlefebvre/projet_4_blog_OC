
<?php

require_once (__DIR__.'/ControllerTemplate.php');

class ConnexionController extends ControllerTemplate
{
    public function display ()
    {
        $tpl = new template(__DIR__.'/../templates/main.tpl');
        $this->setDefaultContent($tpl);


        function connected ():bool {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
                $_SESSION['connected'] = 1;
                header('location:/admin');
            }
        }
  
        $password = '$2y$12$EE3ECByorejakwzISrWrD.J.jwsi/BJVvviTDByR6qkwoYjT1PPki';

        if (isset($_POST['submitConnexion'])) {
            if ($_POST['user'] === 'userBDD' && password_verify($_POST['password'], $password)) {
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