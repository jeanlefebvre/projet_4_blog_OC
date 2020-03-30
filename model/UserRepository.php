<?php

require_once ('Model.php');
require_once ('User.php');

class UserRepository extends Model
{
// CREATE
    public function create ($firstName, $lastName, $userName, $mail, $avatar, $roles, $passWord)
    {
        $connexion = $this->getBdd();
        $user = $connexion->prepare ('INSERT INTO User
            (`firstName`, `lastName`, `userName`, `mail`, `avatar`,`roles`, `passWord`)
             VALUES 
            (:firstName, :lastName, :userName, :mail, :avatar,:roles, :passWord)')->fetch(PDO::FETCH_CLASS, 'User');
        $user->bindParam(':firstName', $firstName, PDO::PARAM_STR);
        $user->bindParam(':lastName', $lastName, PDO::PARAM_STR);
        $user->bindParam(':userName', $userName, PDO::PARAM_STR);
        $user->bindParam(':mail', $mail, PDO::PARAM_STR);
        $user->bindParam(':avatar', $avatar, PDO::PARAM_STR);
        $user->bindParam(':roles', $roles, PDO::PARAM_STR);
        $user->bindParam(':passWord', $passWord, PDO::PARAM_STR);
        $user->execute();
    }
    
// FIND ALL or READ ALL
    public function findAll()
    {
        $connexion = $this->getBdd();
        $users = $connexion->query('SELECT * FROM `user`')->fetchAll(PDO::FETCH_CLASS, 'User');
        return $users;
      
    }
//FIND ONE or READ ONE
    public function find ($id)
    {
        $connexion = $this->getBdd();
        $user = $connexion->prepare('SELECT * FROM `user` WHERE id='.$id);
        $user->bindParam(':id', $id, PDO::PARAM_INT);
        $user->execute();
    }
// UPDATE
    public function update ($id, $firstName, $lastName, $userName, $mail, $avatar, $passWord)
    {
        try 
        {
            $connexion = $this->getBdd();
            $sql = "UPDATE `user` set firstName = '$firstName', lastName = '$lastName', userName = '$userName', mail = '$mail', avatar = '$avatar', password = '$passWord' WHERE id= '$id' ";
            $stmt = $connexion->query($sql);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
// DELETE
    public function delete ($id)
    {
        try 
        {
            $connexion = $this->getBdd();
            $sql = "DELETE `user` WHERE id= '$id' ";
            $stmt = $connexion->query($sql);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}