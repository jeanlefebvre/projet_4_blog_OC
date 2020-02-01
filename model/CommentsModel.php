<?php
class CommentsModel 
{
    private $id;
    private $title;
    private $content;
    private $dateTime;
    private $report;
    private $idUser;
    private $idChapter;

    public function getId ()
    {
        return $this->id;
    }
    public function setId ($id)
    {
        $this->id = $id;
    }

    public function getTitle ()
    {
        return $this->title;
    }
    public function setTitle ($title)
    {
        $this->title = $title;
    }

    public function getContent ()
    {
        return $this->content;
    }
    public function setContent ($content)
    {
        $this->id = $content;
    }

    public function getDateTime ()
    {
        return $this->dateTime;
    }
    public function setDateTime ($dateTime)
    {
        $this->dateTime = $dateTime;
    }

    public function getReport ()
    {
        return $this->report;
    }
    public function setReport ($report)
    {
        $this->report = $report;
    }

    public function getIdUser ()
    {
        return $this->idUser;
    }
    public function setIdUser ($idUser)
    {
        $this->idUser = $idUser;
    }

    public function getIdChapter ()
    {
        return $this->idChapter;
    }
    public function setIdChapter ($idChapter)
    {
        $this->idChapter = $idChapter;
    }
}