<?php

namespace fanny;

class User
{
    /** @var string */
    private $lastName;
    private $firstName;
    private $address;
    private $birthDay;
    /*
        $this->setLastName($lastName);
        $this->setFirstName($firstName);
        $this->setAddress($address);
        $this->setBirthDay($birthDay);
     /*
       /**
        * @return string
        */
    public function getLastName()
    {
        return $this->lastName;
    }
    /**
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * @param string $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * @return string
     */
    public function getBirthDay()
    {
        return $this->birthDay;
    }
    /**
     * @param string $birthDay
     * @return User
     */
    public function setBirthDay($birthDay)
    {
        $this->birthDay = $birthDay;
        return $this;
    }
}
