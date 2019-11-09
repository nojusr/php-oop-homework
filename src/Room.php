<?php

declare(strict_types = 1);

namespace objects;

class Room implements ReservableInterface
{
    protected $roomType;
    protected $hasRestroom;
    protected $hasBalcony;
    protected $bedCount;
    protected $extras;
    protected $roomNumber;
    protected $price;
    protected $reservations;
    
    public void addReservation (Reservation $reservation)
    {
        
    }
    
    public void removeReservation (Reservation $reservation)
    {
        
    }
    
}
