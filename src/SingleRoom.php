<?php

declare(strict_types = 1);

namespace objects;

class SingleRoom extends Room
{
    
    public function __construct( int $roomNumber, int $price )
    {
        
        $this->roomType = "Standard";
        $this->hasRestroom = true;
        $this->hasBalcony = false;
        $this->bedCount = 1;
        $this->extras = ["TV", "Air Conditioner"];
        $this->roomNumber = $roomNumber;
        $this->price = $price;
        $this->reservations = [];
        
    }
    
}
