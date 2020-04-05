<?php

require_once ('Model.php');
require_once ('Comment.php');

class CommentRepository extends Model
{
// CREATE
    public function create ($user, $content, $idChapter)
    {
        $connexion = $this->getBdd();
        $preparation = $connexion->prepare ('INSERT INTO Comment
            (`user`, `content`, `dateTime`,`idChapter`)
             VALUES 
            (:user, :content, :dateTime, :idChapter)');
        $dateTime = (new DateTime())->format('Y-m-d');
        $preparation->bindParam(':user', $user, PDO::PARAM_STR);
        $preparation->bindParam(':content', $content, PDO::PARAM_STR);
        $preparation->bindParam(':dateTime', $dateTime, PDO::PARAM_STR);
        $preparation->bindParam(':idChapter', $idChapter, PDO::PARAM_STR);
        $preparation->execute();
    }
    
// FIND ALL or READ ALL
    public function findAll()
    {
        $connexion = $this->getBdd();
        $comment = $connexion->query('SELECT * FROM `comment`')->fetchAll(PDO::FETCH_CLASS, 'Comment');
        return $comment;
      
    }
//FIND ONE or READ ONE
    public function find ($id)
    {
        $connexion = $this->getBdd();
        $preparation = $connexion->prepare('SELECT * FROM `comment` WHERE id = :id');
        $preparation->setFetchMode(PDO::FETCH_CLASS, 'comment');
        $comment->bindParam(':id', $id, PDO::PARAM_INT);
        $comment->execute();
        return $preparation->fetch();
    }
//FiND ALL by IdChapter
    public function findAllByIdChapter($idChapter)
    {
        $connexion = $this->getBdd();
        $comment = $connexion->query('SELECT * FROM `comment` WHERE `idChapter`='.$idChapter)->fetchAll(PDO::FETCH_CLASS, 'Comment');
        return($comment);
       
    }

// UPDATE
    public function update ($id, $user, $media, $content, $dateTime, $idUSer)
    {
        try 
        {
            $connexion = $this->getBdd();
            $sql = "UPDATE `comment` set user = '$user', content = '$content', dateTime = '$dateTime', report = '$report', idUser = '$idUser' WHERE id= '$id', idChapter = '$idChapter' ";
            $stmt = $connexion->query($sql);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
// Incremente Report
    public function report ($id)
    {
        $connexion = $this->getBdd();
        $preparation = $connexion->prepare('UPDATE `comment` set report = report+1 WHERE id = :id');
        $preparation->execute();
    }

// DELETE
    public function delete ($id)
    {
        try 
        {
            $connexion = $this->getBdd();
            $sql = "DELETE `comment` WHERE id= '$id' ";
            $stmt = $connexion->query($sql);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}