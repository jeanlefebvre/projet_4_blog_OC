<?php

require_once ('Model.php');
require_once ('ChaptersModel.php');

class ChaptersModelRepository extends Model
{

    
    public function findAllChapters ($id)
    {
        $this->getBdd();
        return $this->getAll('Chapter', 'id');
    }

    public function findChapter ($id)
    {
        $connexion = getBdd();
        $requete = SELECT * FROM `chapter` where id = '$id';
        $stmt = $connexion->query($requete);
        $row = $stmt->fetchAll();
        if (!empty($row)) 
        {
            return $row[0];
        }
    }

    public function readChapter ($id)
    {
        $connexion = getBdd();
        $requete = SELECT * FROM `Chapter` where id = '$id';
        $stmt = $connexion->query($requete);
        $row = $stmt->fetchAll();
        if (!empty($row)) 
        {
            return $row[0];
        }
    }

    public function createChapter ($title, $media, $content, $idUser)
    {
        try 
        {
            $connexion = getBdd();
            $sql = "INSERT INTO `chapter` (title, media, content, idUser)
                    VALUES ($title, $media, $content, $idUser)";
            $connexion->exec($sql);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function updateChapter ($title, $media, $content, $idUser)
    {
        try 
        {
            $connexion = getBdd();
            $sql = "UPDATE `chapter` set title ='$title', media ='$media', content = '$content', idUser = '$idUser' WHERE id= '$id' ";
            $stmt = $connexion->query($requete);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function deleteChapter ($id)
    {
        try 
        {
            $connexion = getBdd();
            $sql = "DELETE `chapter` WHERE id= '$id' ";
            $stmt = $connexion->query($requete);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}