<?php

require_once ('UsersModel.php');

class UsersModelRepository 
{
    public function findOneById ($id) 
    {
        // Aller cherche r avec PDO en BDD et retourner un UsersModel ou null si il n'existe pas (eventuellement jette une exception)

        $fakeUser = new UsersModel();
        $fakeUser->setFirstName('Trump');
        
        return $fakeUser;
    }

    public function findAllUsers ($id)
    {

    }

    public function findUser ($id)
    {

    }

    public function readUser ($id)
    {

    }

    public function createUser ($fistName, $lastName, $userName, $mail, $avatar, $passWord)
    {

    }

    public function updateUser ($id, $fistName, $lastName, $userName, $mail, $avatar, $passWord)
    {

    }

    public function deleteUser ($id)
    {

    }
}