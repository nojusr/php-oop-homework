<?php

declare(strict_types = 1);

namespace objects;


class Reservation
{
    
    protected $startDate;
    protected $endDate;
    protected $guest;
    
    public function __construct( DateTime $startDate, DateTime $endDate, Guest $guest ): void 
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }


    public function getStartDate(){
        return $this->startDate;
    }

    public function setStartDate($startDate){
        $this->startDate = $startDate;
    }

    public function getEndDate(){
        return $this->endDate;
    }

    public function setEndDate($endDate){
        $this->endDate = $endDate;
    }

    public function getGuest(){
        return $this->guest;
    }

    public function setGuest($guest){
        $this->guest = $guest;
    }


}
