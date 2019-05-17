<?php

namespace NTSchool\Dependency\Adapter;
use NTSchool\Dependency\RandaomUserInterface;

class StepanRandom {
    public $myFirstName = 'Stepan';
    public $myLastName = 'Kazantcev';
    public $myPhone = '555-4321';
    public $myEmail = 'Steanda96@yandex.ru';
}

final class RandomStepan implements RandaomUserInterface
{
    public $gen;
    public $name;
    public $email;

    public function __construct(){
        $this->gen = new StepanRandom();
    }
    public function generateUser()
    {
        $this->name =  [
            'firstName' => $this->gen->myFirstName,
            'lastName' => $this->gen->myLastName
        ];

        return $this->name;
    }
    public function generateParams(){
        $this->email = [
            'email' => $this->gen->myPhone,
            'phone' => $this->gen->myEmail
        ];
        return $this->email;
    }

}

