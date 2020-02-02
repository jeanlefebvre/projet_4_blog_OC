<?php

require_once ('Model.php');
require_once ('UsersModel.php');

class UsersModelRepository extends Model
{
    public function getUsers()
    {
        $this->getBdd();
        return $this->getAll('User', 'id');
    }

    public function findUser ($id)
    {
        $connexion = getBdd();
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
        $connexion = getBdd();
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
            $connexion = getBdd();
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
            $connexion = getBdd();
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
            $connexion = getBdd();
            $sql = "DELETE `user` WHERE id= '$id' ";
            $stmt = $connexion->query($requete);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}