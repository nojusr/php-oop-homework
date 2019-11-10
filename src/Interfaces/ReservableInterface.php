<?php

declare(strict_types = 1);

namespace Interfaces;


interface ReservableInterface
{
    
    public function addReservation (\Entities\Reservation $reservation);
    public function removeReservation (\Entities\Reservation $reservation);
    
}
