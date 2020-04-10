<?php

require_once ('Model.php');
require_once ('Chapter.php');

class ChapterRepository extends Model
{
// CREATE
    public function create ($title, $media, $content)
    {
        $connexion = $this->getBdd();
        $preparation = $connexion->prepare ('INSERT INTO Chapter
            (`title`, `media`, `content`)
             VALUES 
            (:title, :media, :content)')->fetch(PDO::FETCH_CLASS, 'Chapter');
        $preparation->bindParam(':title', $title, PDO::PARAM_STR);
        $preparation->bindParam(':media', $media, PDO::PARAM_STR);
        $preparation->bindParam(':content', $content, PDO::PARAM_STR);
        $preparation->execute();
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
        $preparation = $connexion->prepare('SELECT * FROM `chapter` WHERE id='.$id);
        $preparation->setFetchMode(PDO::FETCH_CLASS, 'Chapter');
        $preparation->bindParam(':id', $id, PDO::PARAM_INT);
        $preparation->execute();
        return $preparation->fetch();
    }

// UPDATE
    public function update ($id, $title, $media, $content)
    {
        try 
        {
            $connexion = $this->getBdd();
            $sql = "UPDATE `chapter` set title = '$title', media = '$media', content = '$content', idUser = '$idUser' WHERE id= '$id' ";
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