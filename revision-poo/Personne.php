<?php

class Personne
{
    private string $name;
    private string $firstname;
    private string $address;
    private string $dateOfBirth;

    public function __construct($name, $firstname, $address, $dateOfBirth)
    {
        $this->firstname = $firstname;
        $this->name = $name;
        $this->address = $address;
        $this->dateOfBirth = $dateOfBirth;
    }

    public function show()
    {
        return $this->firstname.' '.$this->name.' address: '.$this->address.'  '.$this->getAge().' years old'.PHP_EOL;
    }
    
    public function getAge()
    {
        $dob = new DateTime($this->getDateOfBirth());
 
        $now = new DateTime();
 
        $difference = $now->diff($dob);
 
        return  $difference->y;
    }


    /**
     * Get the value of name
     *
     * @return  string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of firstname
     *
     * @return  string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @param  string  $firstname
     *
     * @return  self
     */
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of address
     *
     * @return  string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @param  string  $address
     *
     * @return  self
     */
    public function setAddress(string $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of dateOfBirth
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set the value of dateOfBirth
     *
     * @return  self
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }
}
