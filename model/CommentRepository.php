<?php

require_once ('Model.php');
require_once ('Comment.php');

class CommentRepository extends Model
{
// CREATE
    public function create ($title, $content, $dateTime, $report, $idUser, $idChapter)
    {
        $connexion = $this->getBdd();
        $comment = $connexion->prepare ('INSERT INTO Comment
            (`title`, `content`, `dateTime`, `report`, `idUser`, `idChapter`)
             VALUES 
            (:title, :content, :dateTime, :report, :idUser, :idChapter)')->fetch(PDO::FETCH_CLASS, 'Comment');
        $comment->bindParam(':title', $title, PDO::PARAM_STR);
        $comment->bindParam(':content', $content, PDO::PARAM_STR);
        $comment->bindParam(':dateTime', $dateTime, PDO::PARAM_STR);
        $comment->bindParam(':report', $media, PDO::PARAM_STR);
        $comment->bindParam(':idUser', $idUser, PDO::PARAM_STR);
        $comment->bindParam(':idChapter', $idUser, PDO::PARAM_STR);
        $comment->execute();
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
        $comment = $connexion->prepare('SELECT * FROM `comment` WHERE id='.$id);
        $comment->bindParam(':id', $id, PDO::PARAM_INT);
        $comment->execute();
    }
// UPDATE
    public function update ($id, $title, $media, $content, $dateTime, $idUSer)
    {
        try 
        {
            $connexion = $this->getBdd();
            $sql = "UPDATE `comment` set title = '$title', content = '$content', dateTime = '$dateTime', report = '$report', idUser = '$idUser' WHERE id= '$id', idChapter = '$idChapter' ";
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
            $sql = "DELETE `comment` WHERE id= '$id' ";
            $stmt = $connexion->query($sql);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}