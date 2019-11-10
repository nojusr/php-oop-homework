<?php

declare(strict_types = 1);

namespace Entities;


class Guest
{

    protected $firstName;
    protected $lastName;
    
    public function __construct( string $firstName, string $lastName )
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        
    }

    public function __toString ()
    {
        return "Guest: ".$this->firstName." ".$this->lastName;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName( string $firstName ): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName( string $lastName ): void
    {
        $this->lastName = $lastName;
    }
    
}
