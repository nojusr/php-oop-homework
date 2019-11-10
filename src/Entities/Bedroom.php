<?php

declare(strict_types = 1);

namespace Entities;


class Bedroom extends Room
{

    public function __construct( int $roomNumber, int $price )
    {
        
        $this->roomType = "Gold";
        $this->hasRestroom = true;
        $this->hasBalcony = true;
        $this->bedCount = 2;
        $this->extras = ["TV", "Air Conditioner", "Refridgerator", "Mini-bar", "Bathtub"];
        $this->roomNumber = $roomNumber;
        $this->price = $price;
        $this->reservations = [];
        
    }
    
}
