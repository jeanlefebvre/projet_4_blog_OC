<?php

require_once ('UsersModel.php');

class UsersModelRepository 
{
    function getBddConnexion()
    {
        try
        {
            $pdo = new PDO('mysql:host=localhost;dbname=projet_4_oc', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
        catch(PDOException $e)
        {
            print "Error !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
        // Aller chercher avec PDO en BDD et retourner un UsersModel ou null si il n'existe pas (eventuellement jette une exception)
    public function findAllUsers ()
    {
        $connexion = getBddConnexion();
        $requete = SELECT * FROM `user`;
        $stmt = $connexion->query($requete);
        $row = $stmt->fetchAll();
        if (!empty(row)) 
        {
            return $row[0];
        }
    }

    public function findUser ($id)
    {
        $connexion = getBddConnexion();
        $requete = SELECT * FROM `user` where id = '$id';
        $stmt = $connexion->query($requete);
        $row = $stmt->fetchAll();
        if (!empty(row)) 
        {
            return $row[0];
        }
    }

    public function readUser ($id)
    {
        $connexion = getBddConnexion();
        $requete = SELECT * FROM `user` where id = '$id';
        $stmt = $connexion->query($requete);
        $row = $stmt->fetchAll();
        if (!empty(row)) 
        {
            return $row[0];
        }
    }

    public function createUser ($firstName, $lastName, $userName, $mail, $avatar, $passWord)
    {
        try 
        {
            $connexion = getBddConnexion();
            $sql = "INSERT INTO `user` (firstName, lastName, userName, mail, avatar, password)
                    VALUES ($firstName, $lastName, $userName, $mail, $avatar, $passWord)";
            $connexion->exec($sql);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function updateUser ($id, $firstName, $lastName, $userName, $mail, $avatar, $passWord)
    {
        try 
        {
            $connexion = getBddConnexion();
            $sql = "UPDATE `user` set firstName = '$firstName', lastName = '$lastName', userName = '$userName', mail = '$mail', avatar = '$avatar', password = '$passWord' WHERE id= '$id' ";
            $stmt = $connexion->query($requete);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function deleteUser ($id)
    {
        try 
        {
            $connexion = getBddConnexion();
            $sql = "DELETE `user` WHERE id= '$id' ";
            $stmt = $connexion->query($requete);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}