<?php

require_once ('Model.php');
require_once ('Chapter.php');

class ChapterRepository extends Model
{
// CREATE
    public function create ($title, $media, $content, $dateTime, $idUser)
    {
        $connexion = $this->getBdd();
        $chapter = $connexion->prepare ('INSERT INTO Chapter
            (`title`, `media`, `content`, `dateTime`, `idUser`)
             VALUES 
            (:title, :media, :content, :dateTime, :idUser)')->fetch(PDO::FETCH_CLASS, 'Chapter');
        $chapter->bindParam(':title', $title, PDO::PARAM_STR);
        $chapter->bindParam(':media', $media, PDO::PARAM_STR);
        $chapter->bindParam(':content', $content, PDO::PARAM_STR);
        $chapter->bindParam(':dateTime', $dateTime, PDO::PARAM_STR);
        $chapter->bindParam(':idUser', $idUser, PDO::PARAM_STR);
        $chapter->execute();
    }
    
// FIND ALL or READ ALL
    public function findAll()
    {
        $connexion = $this->getBdd();
        $chapters = $connexion->query('SELECT * FROM `chapter`')->fetchAll(PDO::FETCH_CLASS, 'Chapter');
        return $chapters;
      
    }
//FIND ONE or READ ONE
    public function find ($id)
    {
        $connexion = $this->getBdd();
        $chapter = $connexion->prepare('SELECT * FROM `chapter` WHERE id='.$id);
        $chapter->bindParam(':id', $id, PDO::PARAM_INT);
        $chapter->execute();
    }

// UPDATE
    public function update ($id, $title, $media, $content, $dateTime, $idUSer)
    {
        try 
        {
            $connexion = $this->getBdd();
            $sql = "UPDATE `chapter` set title = '$title', media = '$media', content = '$content', dateTime = '$dateTime', idUser = '$idUser' WHERE id= '$id' ";
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
            $sql = "DELETE `chapter` WHERE id= '$id' ";
            $stmt = $connexion->query($sql);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}