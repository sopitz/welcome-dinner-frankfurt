<?php

class Dinner
{
    private $id;
    private $date;
    private $hostId;

    public function __construct($dinnerData) {
        $this->setDate($dinnerData['date']);
        $this->setHostId($dinnerData['hostId']);
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $parsedDate = DateTime::createFromFormat('D, d. M Y', $date);
        $this->date = date_format($parsedDate, 'Y-m-d');;
    }

    /**
     * @return mixed
     */
    public function getHostId()
    {
        return $this->hostId;
    }

    /**
     * @param mixed $hostId
     */
    public function setHostId($hostId)
    {
        $this->hostId = $hostId;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


}
