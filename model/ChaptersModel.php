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
        $id = (int)$id;

        if ($id > 0) {
            $this->id = $id;
        }
    }

    public function getTitle ()
    {
        return $this->title;
    }
    public function setTitle ($title)
    {
        if (is_string($title)) {
            $this->title = $title;
        }
    }

    public function getMedia ()
    {
        return $this->media;
    }
    public function setMedia ($media)
    {
        if (is_string($media)) {
            $this->media = $media;
        }
    }

    public function getContent ()
    {
        return $this->content;
    }
    public function setContent ($content)
    {
        if (is_string($content)) {
            $this->content = $content;
        }
    }

    public function getDateTime ()
    {
        return $this->dateTime;
    }
    public function setDateTime ($dateTime)
    {
        $this->dateTime = date('d/m/Y', strtotime($dateTime));
    }

    public function getIdUser ()
    {
        return $this->idUser;
    }
    public function setIdUser ($idUser)
    {
        if (is_string($idUser)) {
            $this->idUser = $idUser;
        }
    }
}