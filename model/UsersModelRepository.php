<?php

require_once ('Model.php');
require_once ('UsersModel.php');

class UsersModelRepository extends Model
{
// FIND ALL
    public function getUsers()
    {
        $connexion = $this->getBdd;
        $users = $connexion->query('SELECT * FROM `user`')->fetchAll(PDO::FETCH_CLASS, 'User');
        return $users;
      
    }
//FIND ONE
    public function findUser ($id)
    {
        $connexion = $this->getBdd;
        $user = $connexion->prepare('SELECT `id`, `firstName`, `lastName`, `userName`, `mail`, `avatar`, `roles`, `passWord` FROM `user`')->fetch(PDO::FETCH_CLASS, 'User');
        $user->bindParam(':firstName', $this->getFirstName, PDO::PARAM_STR, 60);
        $user->bindParam(':lastName', $this->getLastName, PDO::PARAM_STR, 60);
        $user->bindParam(':userName', $this->getUserName, PDO::PARAM_STR, 60);
        $user->bindParam(':mail', $this->getMail, PDO::PARAM_STR, 255);
        $user->bindParam(':avatar', $this->getAvatar, PDO::PARAM_STR, 255);
        $user->bindParam(':roles', $this->getRoles, PDO::PARAM_STR, 50);
        $user->bindParam(':passWord', $this->getPassWord, PDO::PARAM_STR, 255);
        $user->execute();
    }
// READ
    public function readUser ($id)
    {
        $connexion = getBdd();
        $requete = "SELECT * FROM `user` where id = '$id'";
        $stmt = $connexion->query($requete);
        $row = $stmt->fetchAll();
        if (!empty($row)) 
        {
            return $row[0];
        }
    }
// CREATE
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
// UPDATE
    public function updateUser ($id, $firstName, $lastName, $userName, $mail, $avatar, $passWord)
    {
        try 
        {
            $connexion = getBdd();
            $sql = "UPDATE `user` set firstName = '$firstName', lastName = '$lastName', userName = '$userName', mail = '$mail', avatar = '$avatar', password = '$passWord' WHERE id= '$id' ";
            $stmt = $connexion->query($sql);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
// DELETE
    public function deleteUser ($id)
    {
        try 
        {
            $connexion = getBdd();
            $sql = "DELETE `user` WHERE id= '$id' ";
            $stmt = $connexion->query($sql);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}