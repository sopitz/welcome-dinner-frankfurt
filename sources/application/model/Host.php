<?php

class Host
{
    private $id;
    private $gender;
    private $firstname;
    private $lastname;
    private $phone;
    private $mail;
    private $street;
    private $zipCode;
    private $city;
    private $languages = array();
    private $languagesnotes;
    private $welcomeDinnerOrigin;
    private $coHosts;
    private $notes;
    private $lat;
    private $long;
    private $dinner;

    public function __construct($hostData) {
        $this->setGender($hostData['gender']);
        $this->setFirstname($hostData['firstname']);
        $this->setLastname($hostData['lastname']);
        $this->setPhone($hostData['phone']);
        $this->setMail($hostData['mail']);
        $this->setStreet($hostData['street']);
        $this->setZipCode($hostData['zipCode']);
        $this->setCity($hostData['city']);
        foreach($hostData['languages'] as $language) {
            $this->setLanguages($language);
        }

        $this->setLanguagesnotes($hostData['languagesnotes']);
        $this->setWelcomeDinnerOrigin($hostData['welcomeDinnerOrigin']);
        $this->setCoHosts($hostData['coHosts']);
        $this->setNotes($hostData['notes']);
        $this->setLat($hostData['lat']);
        $this->setLong($hostData['long']);
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param mixed $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getLanguages()
    {
        return implode(", ", $this->languages);
    }

    /**
     * @param array $languages
     */
    public function setLanguages($languages)
    {
        array_push($this->languages, $languages);
    }

    /**
     * @return mixed
     */
    public function getWelcomeDinnerOrigin()
    {
        return $this->welcomeDinnerOrigin;
    }

    /**
     * @param mixed $welcomeDinnerOrigin
     */
    public function setWelcomeDinnerOrigin($welcomeDinnerOrigin)
    {
        $this->welcomeDinnerOrigin = $welcomeDinnerOrigin;
    }

    /**
     * @return mixed
     */
    public function getCoHosts()
    {
        return $this->coHosts;
    }

    /**
     * @param mixed $coHosts
     */
    public function setCoHosts($coHosts)
    {
        $this->coHosts = $coHosts;
    }

    /**
     * @return mixed
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param mixed $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * @return mixed
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param mixed $lat
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    }

    /**
     * @return mixed
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * @param mixed $long
     */
    public function setLong($long)
    {
        $this->long = $long;
    }

    /**
     * @return mixed
     */
    public function getLanguagesnotes()
    {
        return $this->languagesnotes;
    }

    /**
     * @param mixed $languagesnotes
     */
    public function setLanguagesnotes($languagesnotes)
    {
        $this->languagesnotes = $languagesnotes;
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

    /**
     * @return mixed
     */
    public function getDinner()
    {
        return $this->dinner;
    }

    /**
     * @param mixed $dinner
     */
    public function setDinner($dinner)
    {
        $this->dinner = $dinner;
    }
}
