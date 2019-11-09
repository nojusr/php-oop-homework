<?php

declare(strict_types = 1);

namespace objects;

interface ReservableInterface
{
    
    public void addReservation (Reservation $reservation);
    public void removeReservation (Reservation $reservation);
    
}
