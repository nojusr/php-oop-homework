<?php

declare(strict_types = 1);

namespace Entities;


class Reservation
{
    
    protected $startDate;
    protected $endDate;
    protected $guest;
    
    public function __construct( \DateTime $startDate, \DateTime $endDate, Guest $guest )
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }

    public function __toString ()
    {
        $output = "Reservation: Start date: ".$this->startDate->format("Y-m-d").", ";
        $output .= "End date: ".$this->endDate->format("Y-m-d").", ";
        $output .= (string)$this->guest;
        
        return $output;
    }



    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    public function setStartDate( \DateTime $startDate ): void
    {
        $this->startDate = $startDate;
    }

    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    public function setEndDate( \DateTime $endDate ): void
    {
        $this->endDate = $endDate;
    }

    public function getGuest(): Guest
    {
        return $this->guest;
    }

    public function setGuest( Guest $guest ): void
    {
        $this->guest = $guest;
    }


}
