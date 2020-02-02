<?php

require_once ('Model.php');
require_once ('CommentsModel.php');

class CommentsModelRepository 
{
    public function findAllComments ($id)
    {
        $this->getBdd();
        return $this->getAll('content', 'id');
    }

    public function findComment ($id)
    {
        $connexion = getBdd();
        $requete = SELECT * FROM `content` where id = '$id';
        $stmt = $connexion->query($requete);
        $row = $stmt->fetchAll();
        if (!empty(row)) 
        {
            return $row[0];
        }
    }

    public function readComment ($id)
    {
        $connexion = getBdd();
        $requete = SELECT * FROM `content` where id = '$id';
        $stmt = $connexion->query($requete);
        $row = $stmt->fetchAll();
        if (!empty(row)) 
        {
            return $row[0];
        }
    }

    public function createComment ($title, $content, $report, $idUser, $idChapter)
    {
        try 
        {
            $connexion = getBdd();
            $sql = "INSERT INTO `chapter` (title, content, report, idUser)
                    VALUES ($title, $content, $report, $idUser)";
            $connexion->exec($sql);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function updateComment ($title, $content, $report, $idUser, $idChapter)
    {
        try 
        {
            $connexion = getBdd();
            $sql = "UPDATE `content` set title = '$title', content = '$content', report = '$report', idUSer = '$idUser' WHERE id= '$id' ";
            $stmt = $connexion->query($requete);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function deleteComment ($id)
    {
        try 
        {
            $connexion = getBdd();
            $sql = "DELETE `content` WHERE id= '$id' ";
            $stmt = $connexion->query($requete);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}