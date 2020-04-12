<?php

require_once ('Model.php');
require_once ('User.php');

class UserRepository extends Model
{
// CREATE
    public function create ($firstName, $lastName, $login, $mail, $avatar, $roles, $passWordHash)
    {
        $connexion = $this->getBdd();
        $preparation = $connexion->prepare ('INSERT INTO User
            (`firstName`, `lastName`, `login`, `mail`, `avatar`,`roles`, `passWordHash`)
             VALUES 
            (:firstName, :lastName, :login, :mail, :avatar,:roles, :passWordHash)')->fetch(PDO::FETCH_CLASS, 'User');
        $preparation->bindParam(':firstName', $firstName, PDO::PARAM_STR);
        $preparation->bindParam(':lastName', $lastName, PDO::PARAM_STR);
        $preparation->bindParam(':login', $login, PDO::PARAM_STR);
        $preparation->bindParam(':mail', $mail, PDO::PARAM_STR);
        $preparation->bindParam(':avatar', $avatar, PDO::PARAM_STR);
        $preparation->bindParam(':roles', $roles, PDO::PARAM_STR);
        $preparation->bindParam(':passWordHash', $passWordHash, PDO::PARAM_STR);
        $preparation->execute();
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
        $preparation = $connexion->prepare('SELECT * FROM `user` WHERE id=.:id');
        $preparation->setFetchMode(PDO::FETCH_CLASS, 'user');
        $preparation->bindParam(':id', $id, PDO::PARAM_INT);
        $preparation->execute();
        return $preparation->fetch();
    }
//FIND ONE BY LOGIN
    public function findByLogin ($login)
    {
        $connexion = $this->getBdd();
        $preparation = $connexion->prepare('SELECT * FROM `user` WHERE login=:login');
        $preparation->setFetchMode(PDO::FETCH_CLASS, 'user');
        $preparation->bindParam(':login', $login, PDO::PARAM_STR);
        $preparation->execute();
        return $preparation->fetch();
    }

// UPDATE
    public function update ($id, $firstName, $lastName, $login, $mail, $avatar, $passWordHash)
    {
        try 
        {
            $connexion = $this->getBdd();
            $preparation = $connexion->prepare("UPDATE `user` set firstName = :firstName, lastName = :lastName, login = :login, mail = :mail, avatar = :avatar, passWordHash = :passWordHash WHERE id= :id");
            $preparation->bindParam(':lastName', $lastName, PDO::PARAM_STR);
            $preparation->bindParam(':login', $login, PDO::PARAM_STR);
            $preparation->bindParam(':mail', $mail, PDO::PARAM_STR);
            $preparation->bindParam(':avatar', $avatar, PDO::PARAM_STR);
            $preparation->bindParam(':roles', $roles, PDO::PARAM_STR);
            $preparation->bindParam(':passWordHash', $passWordHash, PDO::PARAM_STR);
            $preparation->bindParam(':firstName', $firstName, PDO::PARAM_STR);
            $preparation->bindParam(':id', $id, PDO::PARAM_INT);
            $preparation->execute();
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
            $preparation = $connexion->prepare("DELETE `user` WHERE id=:id");
            $preparation->bindParam(':id', $id, PDO::PARAM_INT);
            $preparation->execute();
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}