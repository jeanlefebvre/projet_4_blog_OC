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
            (:title, :media, :content)');
        $dateTime = (new DateTime())->format('Y-m-d');
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

    public function findList()
    {
        $connexion = $this->getBdd();
        $chapters = $connexion->query('SELECT id FROM `chapter`')->fetchAll(PDO::FETCH_ASSOC);
        return $chapters;
      
    }


//FIND ONE or READ ONE
    public function find ($id)
    {
        $connexion = $this->getBdd();
        $preparation = $connexion->prepare('SELECT * FROM `chapter` WHERE id= :id');
        $preparation->setFetchMode(PDO::FETCH_CLASS, 'Chapter');
        $preparation->bindParam(':id', $id, PDO::PARAM_INT);
        $preparation->execute();
        return $preparation->fetch();
    }

// UPDATE
    public function update ($id, $title, $content)
    {
        $error = null;
        try 
        {
            $connexion = $this->getBdd();
            $preparation = $connexion->prepare("UPDATE `chapter` set title = :title, content = :content WHERE id= :id");
            $preparation->bindParam(':id', $id, PDO::PARAM_INT);
            $preparation->bindParam(':title', $title, PDO::PARAM_STR);
            $preparation->bindParam(':content', $content, PDO::PARAM_STR);
            $preparation->execute();
        }
        catch(PDOException $e)
        {
            echo $error . "<br>" . $e->getMessage();
        }
    }
// DELETE
    public function delete ($id)
    {
        $error = null;
        try 
        {
            $connexion = $this->getBdd();
            $preparation = $connexion->prepare("DELETE FROM `chapter` WHERE id= :id");
            $preparation->bindParam(':id', $id, PDO::PARAM_INT);
            $preparation->execute();
        }
        catch(PDOException $e)
        {
            echo $error . "<br>" . $e->getMessage();
        }
    }
}