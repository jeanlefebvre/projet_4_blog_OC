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
            (`user`, `content`,`idChapter`)
             VALUES 
            (:user, :content, :idChapter)');
        $dateTime = (new DateTime())->format('Y-m-d');
        $preparation->bindParam(':user', $user, PDO::PARAM_STR);
        $preparation->bindParam(':content', $content, PDO::PARAM_STR);
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
        $preparation->bindParam(':id', $id, PDO::PARAM_INT);
        $preparation->execute();
        return $preparation->fetch();
    }
//FiND ALL by IdChapter
    public function findAllByIdChapter($idChapter)
    {
        $connexion = $this->getBdd();
        $preparation = $connexion->prepare('SELECT * FROM `comment` WHERE `idChapter`= :idChapter');
        $preparation->setFetchMode(PDO::FETCH_CLASS, 'Comment');
        $preparation->bindParam('idChapter', $idChapter, PDO::PARAM_INT);
        $preparation->execute();
        return $preparation->fetchAll();       
    }

// UPDATE
    public function update ($id, $user, $content, $report, $idUSer)
    {
        $error = null;
        try 
        {
            $connexion = $this->getBdd();
            $preparation = $connexion->prepare("UPDATE `comment` set user = :user, content = :content, report = :report, idUser = :idUser WHERE id= :id, idChapter = :idChapter");
            $preparation->bindParam(':id', $id, PDO::PARAM_INT);
            $preparation->bindParam(':user', $user, PDO::PARAM_STR);
            $preparation->bindParam(':content', $content, PDO::PARAM_STR);
            $preparation->bindParam(':report', $report, PDO::PARAM_INT);
            $preparation->bindParam(':idUser', $idUser, PDO::PARAM_INT);
            $preparation->execute();
        }
        catch(PDOException $e)
        {
            echo $error . "<br>" . $e->getMessage();
        }
    }
// UPDATE Incremente Report
    public function report ($id)
    {
        $connexion = $this->getBdd();
        $preparation = $connexion->prepare('UPDATE `comment` set report = report+1 WHERE id = :id');
        $preparation->bindParam(':id', $id, PDO::PARAM_INT);
        $preparation->execute();
    }

// DELETE
public function delete ($id)
    {
        $error = null;
        try 
        {
            $connexion = $this->getBdd();
            $preparation = $connexion->prepare("DELETE `comment` WHERE id= :id");
            $preparation->bindParam(':id', $id, PDO::PARAM_INT);
            $preparation->execute();
        }
        catch(PDOException $e)
        {
            echo $error . "<br>" . $e->getMessage();
        }
    }

// DELETE by ChapterId
public function deleteByChapterId ($idChapter)
    {
        $error = null;
        try 
        {
            $connexion = $this->getBdd();
            $preparation = $connexion->prepare("DELETE FROM `comment` WHERE idChapter= :idChapter");
            $preparation->bindParam(':idChapter', $idChapter, PDO::PARAM_INT);
            $preparation->execute();
        }
        catch(PDOException $e)
        {
            echo $error . "<br>" . $e->getMessage();
        }
    }

}

