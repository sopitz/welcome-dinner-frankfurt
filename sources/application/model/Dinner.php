<?php

class Dinner
{
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
        $this->date = $date;
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


}
