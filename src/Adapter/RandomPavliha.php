<?php

namespace NTSchool\Dependency\Adapter;
use NTSchool\Dependency\RandaomUserInterface;

final class RandomPavliha implements RandaomUserInterface
{
    public $gen;
    public $name;
    public $email;

    public function __construct(){
        $this->gen = new \RandomUser\Generator();
    }
    public function generateUser()
    {
        $this->name =  [
            'firstName' => $this->gen->getUser()->getFirstName(),
            'lastName' => $this->gen->getUser()->getLastName()
        ];

        return $this->name;
    }
    public function generateParams(){
        $this->email = [
            'email' => $this->gen->getUser()->getEmail(),
            'phone' => $this->gen->getUser()->getPhone()
        ];
        return $this->email;
    }

}
