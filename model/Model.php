<?php

abstract class Model
{
    private static $_bdd;

    // Instancie la connexion a la bdd
    private static function setBdd()
    {
        require(__DIR__.'/../config.php');
        self::$_bdd = new PDO("mysql:host=" . $db['host'] . ";dbname=" . $db['database'] . ";charset=utf8", $db['username'], $db['password']);
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
    }

    // Récupére la connexion a la bdd et la retourne
    protected function getBdd()
    {
        if (self::$_bdd == null) {
            self::setBdd();
        } 
        return self::$_bdd;
    }
    
}
