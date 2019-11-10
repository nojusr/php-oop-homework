<?php

declare(strict_types = 1);

namespace objects;


interface ReservableInterface
{
    
    public function addReservation (Reservation $reservation);
    public function removeReservation (Reservation $reservation);
    
}
