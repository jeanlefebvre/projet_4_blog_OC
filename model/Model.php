<?php


abstract class Model
{
    private static $_bdd;

    // Instancie la connexion a la bdd
    private static function setBdd()
    {
        require('config.php');
        self::$_bdd = new PDO("mysql:host=" . $db['host'] . ";dbname=" . $db['database'] . ";charset=utf8", $db['username'], $db['password']);
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    // Récupére la connexion a la bdd
    protected function getBdd()
    {
        if (self::$_bdd == null) {
            self::setBdd();
            return self::$_bdd;
        }
    }

    // Récupération de toutes les données d'une table
    protected function getAll($table, $obj)
    {
        $var = [];
        $req = $this->getBdd->prepare('SELECT * FROM ' . $table . ' ORDER BY id DESC');
        $req->execute();
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new $obj($data); //On envoi dans la bonne classe un tableau. Par exemple ici on envoi les données dans usersModel.php pour le traitement des données.
        }
        return $var;
        $req->closeCursor();
    }
}