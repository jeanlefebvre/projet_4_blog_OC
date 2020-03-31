<?php

class Router
{
    public $route;

    public $controllers = [];

    // extraire le path de l'URL pour retourner le controlleur associé  
    public function extractRouteFromGlobals() 
    {                 
        return $this->controllers[$_SERVER['PATH_INFO'] ?? '/'] ?? $this->controllers['/'];    
    }
    
    //sotcker les infos dans $controllers 
    public function addRouteAndController($routeName, $controller)
    {
        $this->controllers[$routeName]=$controller;
    }
}
