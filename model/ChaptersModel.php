<?php
class ChaptersModel 
{
    private $id;
    private $title;
    private $media;
    private $content;
    private $dateTime;
    private $idUser;

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

    public function getMedia ()
    {
        return $this->media;
    }
    public function setMedia ($media)
    {
        $this->media = $media;
    }

    public function getContent ()
    {
        return $this->content;
    }
    public function setContent ($content)
    {
        $this->content = $content;
    }

    public function getDateTime ()
    {
        return $this->dateTime;
    }
    public function setDateTime ($dateTime)
    {
        $this->dateTime = $dateTime;
    }

    public function getIdUser ()
    {
        return $this->idUser;
    }
    public function setIdUser ($idUser)
    {
        $this->idUser = $idUser;
    }
}