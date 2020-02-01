<?php

class Router
{
    public $route;

    public $controllers = [];

    // extraire le path de l'URL pour retourner le controlleur associé  
    public function extractRouteFromGlobals() 
    {   
        try
        {
            if(isset($_GET('url')))
            {
                $ex = explode("?", $_SERVER['REQUEST_URI']);
                $this->route = $ex[0]; 
        
                //vérifier que le controleur existe sinon renvoyer un controlleur par défaut
                return $this->controllers[$this->route];
            }
            else
            {
                require_once('controllers/HomeController.php');
            }
        }
        catch(Exception $e)
        {
            $errorMsg = $e->getMessage();
            require_once('views/viewError.php');
        }
       
    }
    
    //sotcker les infos dans $controllers 
    public function addRouteAndController($routeName, $controller)
    {
        $this->controllers[$routeName]=$controller;
    }
}
