<?php
class User
{
    //attributs de la table
    private $id;
    private $firstName;
    private $lastName;
    private $userName;
    private $mail;
    private $avatar;
    private $roles;
    private $passwordHash;


    //récupérer les données 
    public function getId ()
    {
        return $this->id;
    }
    //modification des données 
    public function setId ($id)
    {
        $id = (int)$id;

        if ($id > 0) {
            $this->id = $id;
        }
    }

    public function getFirstName ()
    {
        return $this->firstName;
    }
    public function setFirstName ($firstName)
    {
        if (is_string($firstName)) {
            $this->firstName = $firstName;
        }
    }
    
    public function getLastName ()
    {
        return $this->lastName;
    }
    public function setLastName ($lastName)
    {
        if (is_string($lastName)) {
            $this->lastName = $lastName;
        }
    }

    public function getUserName ()
    {
        return $this->userName;
    }
    public function setUserName ($userName)
    {
        if (is_string($userName)) {
            $this->userName = $userName;
        }
    }

    public function getMail ()
    {
        return $this->mail;
    }
    public function setMail ($mail)
    {
        if (is_string($mail)) {
            $this->mail = $mail;
        }
    }

    public function getAvatar ()
    {
        return $this->avatar;
    }
    public function setAvatar ($avatar)
    {
        if (is_string($avatar)) {
            $this->avatar = $avatar;
        }
    }

    public function getRoles ()
    {
        return $this->roles;
    }
    public function setRoles ($roles)
    {
        if (is_string($roles)) {
            $this->roles = $roles;
        }
    }
    public function getPasswordHash ()
    {
        return $this->passwordHash;
    }
    public function setPasswordHash ($PasswordHash)
    {
        if (is_string($PasswordHash)) {
            $this->passwordHash = $PasswordHash;
        }
    }
   
}