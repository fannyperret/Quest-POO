<?php



class Personne {

    public $lastName = "Perret";
    public $firstName = "Fanny";
    public $address = "11 Rue des Reves";
    public $birthday = "08-01-1991";

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
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
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
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
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    public function getDateBirth() {

        return $this->birthday;
    }

    public function age()
    {

        $from = new DateTime($this->birthday);
        $to = new DateTime('today');
        $age = $from->diff($to)->y;
        return $age;
    }

}