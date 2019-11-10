<?php

declare(strict_types = 1);

namespace objects;


class Guest
{

    protected $firstName;
    protected $lastName;
    
    public function __construct( string $firstName, string $lastName ): void 
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        
    }


    public function getFirstName(){
        return $this->firstName;
    }

    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
    
}
