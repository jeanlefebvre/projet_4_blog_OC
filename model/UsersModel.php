<?php
class UsersModel
{
    //attributs de la table
    private $id;
    private $firstName;
    private $lastName;
    private $userName;
    private $mail;
    private $avatar;
    private $roles;
    private $passWord;

    //récupérer les données 
    public function getId ()
    {
        return $this->id;
    }
    //modification des données 
    public function setId ($id)
    {
        $this->id = $id;
    }

    public function getFirstName ()
    {
        return $this->firstName;
    }
    public function setFirstName ($firstName)
    {
        $this->firstName = $firstName;
    }
    
    public function getLastName ()
    {
        return $this->lastName;
    }
    public function setLastName ($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getUserName ()
    {
        return $this->userName;
    }
    public function setUserName ($userName)
    {
        $this->userName = $userName;
    }

    public function getMail ()
    {
        return $this->mail;
    }
    public function setMail ($mail)
    {
        $this->mail = $mail;
    }

    public function getAvatar ()
    {
        return $this->avatar;
    }
    public function setAvatar ($avatar)
    {
        $this->avatar = $avatar;
    }

    public function getRoles ()
    {
        return $this->roles;
    }
    public function setRoles ($roles)
    {
        $this->roles = $roles;
    }

    public function getPassWord ()
    {
        return $this->passWord;
    }
    public function setPassWord ($passWord)
    {
        $this->passWord = $passWord;
    }
}