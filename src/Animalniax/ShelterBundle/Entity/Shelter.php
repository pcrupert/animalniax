<?php

namespace Animalniax\ShelterBundle\Entity;

/**
 * Shelter.
 *
 * @author rupert
 */
class Shelter
{
    protected $id;

    protected $name;

    protected $address;

    protected $contactPerson;

    protected $contactPhone;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setContactPerson($contactPerson)
    {
        $this->contactPerson = $contactPerson;
    }

    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;
    }
}
