<?php

declare(strict_types = 1);

namespace objects;


class Bedroom extends Room
{
    
    public function __construct( int $roomNumber, int $price )
    {
        
        $this->roomType = "Diamond";
        $this->hasRestroom = true;
        $this->hasBalcony = true;
        $this->bedCount = 4;
        $this->extras = ["TV", "Air Conditioner", "Refridgerator", "Kitchen Box", "Mini-bar", "Bathtub", "Free Wi-Fi"];
        $this->roomNumber = $roomNumber;
        $this->price = $price;
        $this->reservations = [];
        
    }
    
}
