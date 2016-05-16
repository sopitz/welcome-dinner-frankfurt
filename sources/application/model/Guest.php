<?php

class Guest
{
    private $id;
    private $gender;
    private $firstname;
    private $lastname;
    private $age;
    private $phone;
    private $mail;
    private $street;
    private $zipCode;
    private $city;
    private $country;
    private $languages = array();
    private $foodspecials = array();
    private $foodspecialsnotes;
    private $welcomeDinnerOrigin;
    private $bringalongs;
    private $notes;
    private $lat;
    private $long;
    private $guestDinner;

    public function __construct($guestData) {
        $this->setGender($guestData['gender']);
        $this->setFirstname($guestData['firstname']);
        $this->setLastname($guestData['lastname']);
        $this->setAge($guestData['age']);
        $this->setPhone($guestData['phone']);
        $this->setMail($guestData['mail']);
        $this->setStreet($guestData['street']);
        $this->setZipCode($guestData['zipCode']);
        $this->setCity($guestData['city']);
        $this->setCountry($guestData['country']);
        foreach($guestData['languages'] as $language) {
            $this->setLanguages($language);
        }
        foreach($guestData['foodspecials'] as $foodspecial) {
            $this->setFoodspecials($foodspecial);
        }


        $this->setFoodspecialsnotes($guestData['foodspecialsnotes']);
        $this->setWelcomeDinnerOrigin($guestData['welcomeDinnerOrigin']);
        $this->setBringalongs($guestData['bringalongs']);
        $this->setNotes($guestData['notes']);
        $this->setLat($guestData['lat']);
        $this->setLong($guestData['long']);
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

    public function getLanguagesArray() {
        return $this->languages;
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
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return array
     */
    public function getFoodspecials()
    {
        return implode(", ", $this->foodspecials);
    }

    public function getFoodspecialsArray()
    {
        return $this->foodspecials;
    }

    /**
     * @param array $foodspecials
     */
    public function setFoodspecials($foodspecials)
    {
        array_push($this->foodspecials, $foodspecials);
    }

    /**
     * @return mixed
     */
    public function getFoodspecialsnotes()
    {
        return $this->foodspecialsnotes;
    }

    /**
     * @param mixed $foodspecialsnotes
     */
    public function setFoodspecialsnotes($foodspecialsnotes)
    {
        $this->foodspecialsnotes = $foodspecialsnotes;
    }

    /**
     * @return mixed
     */
    public function getBringalongs()
    {
        return $this->bringalongs;
    }

    /**
     * @param mixed $bringalongs
     */
    public function setBringalongs($bringalongs)
    {
        $this->bringalongs = $bringalongs;
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
    public function getGuestDinner()
    {
        return $this->guestDinner;
    }

    /**
     * @param mixed $guestDinner
     */
    public function setGuestDinner($guestDinner)
    {
        $this->guestDinner = $guestDinner;
    }
}
