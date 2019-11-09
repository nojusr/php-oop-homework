<?php

declare(strict_types = 1);

namespace objects;

class Reservation
{
    
    protected $startDate;
    protected $endDate;
    protected $guest;
    
    public function __construct( DateTime $startDate, DateTime $endDate, int $guest ): void 
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }
    
}
