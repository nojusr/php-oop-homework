<?php

declare(strict_types = 1);

namespace Statics;

class BookingManager
{
    
    public static function bookRoom (\Entities\Room $room, \Entities\Reservation $res): void
    {
        // for the record, i think it would make more sense to handle 
        // the booking date intersection check inside the Room class because
        // then you wouldn't have to pull out all of the reservations
        // from the room object
        
        $roomReservations = $room->getReservations();
        
        $resSD = $res->getStartDate();
        $resED = $res->getStartDate();
        
        
        foreach ( $roomReservations as $roomRes ) {
            
            $roomResSD = $roomRes->getStartDate();
            $roomResED = $roomRes->getEndDate();
            
            // doesn't cover all cases but it's good enough for an exercise
            if ($roomResSD < $resED && $resSD < $roomResED) {
                throw new \Exceptions\ReservationException();
            }

        }
        
        
        $room->addReservation($res);
        
        $guest = $res->getGuest();
        
        // success, adding room
        
        echo "Room <strong>".$room->getRoomNumber()."</strong> ";
        echo "successfully booked for <strong>";
        echo $guest->getFirstName()." ".$guest->getLastName()."</strong>";
        echo "from <time>".$resSD->format("Y-m-d")."</time> to";
        echo "<time>".$resED->format("Y-m-d")."</time>!\n";
        
        
        
    }
    
    
}
