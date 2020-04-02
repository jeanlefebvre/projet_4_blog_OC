<?php
class Comment
{
    private $id;
    private $user;
    private $content;
    private $dateTime;
    private $report;
    private $idUser;
    private $idChapter;

    // Constructeur
    public function construct(array $data)
    {
        $this->hydrate($data);
    }

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

    public function getUserName ()
    {
        return $this->user;
    }
    public function setUserName ($user)
    {
        if (is_string($user)) {
            $this->user = $user;
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

    public function getReport ()
    {
        return $this->report;
    }
    public function setReport ($report)
    {
        if (is_string($report)) {
            $this->report = $report;
        }
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

    public function getIdChapter ()
    {
        return $this->idChapter;
    }
    public function setIdChapter ($idChapter)
    {
        if (is_string($idChapter)) {
            $this->idChapter = $idChapter;
        }
    }
}