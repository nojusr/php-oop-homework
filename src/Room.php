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

    public function __construct()
    {
        
        $this->roomType = "";
        $this->hasRestroom = false;
        $this->hasBalcony = false;
        $this->bedCount = -1;
        $this->extras = [];
        $this->roomNumber = -1;
        $this->price = -1;
        $this->reservations = [];
        
    }

    public function __toString ()
    {
        $output = "";
        $output .= "Room no.".$this->roomNumber."\n";
        $output .= "Room type: ".$this->roomType."\n";
        $output .= "Traits: ";
        
        if ( $this->hasRestroom ) {
            $output .= "has a restroom, ";
        } else {
            $output .= "doesn't have a restroom, ";
        }
        
        if ( $this->hasBalcony ) {
            $output .= "has a balcony\n";
        } else {
            $output .= "doesn't have a balcony\n";
        }
        
        $output .= "Beds: ".$this->bedCount."\n";
        $output .= "Extras: ";
        
        foreach ( $this->extras as $extra ) {
            $output .= $extra.", ";
        }
        
        $output .= "\n";
        
        $output .= "Price: ".$this->price."\n";
        
        $output .= "Reservations: \n";
        
        foreach ( $this->reservations as $res ) {
            $output .= (string) $res."\n";
        }
        
        return $output;
    }

    public function addReservation (Reservation $reservation): void
    {
        array_push($this->reservations, $reservation);
    }

    public function removeReservation (Reservation $reservation): void
    {
        foreach($reservations as $index => $res)
        {
            if ($res == $reservation)
            {
                unset($reservations[$index]);
                return;
            }
        }
    }


    public function getRoomType(): string
    {
        return $this->roomType;
    }

    public function setRoomType( string $roomType ): void
    {
        $this->roomType = $roomType;
    }

    public function getHasRestroom(): bool
    {
        return $this->hasRestroom;
    }

    public function setHasRestroom( bool $hasRestroom ): void
    {
        $this->hasRestroom = $hasRestroom;
    }

    public function getHasBalcony(): bool
    {
        return $this->hasBalcony;
    }

    public function setHasBalcony( bool $hasBalcony ): void
    {
        $this->hasBalcony = $hasBalcony;
    }

    public function getBedCount(): int
    {
        return $this->bedCount;
    }

    public function setBedCount( int $bedCount ): void
    {
        $this->bedCount = $bedCount;
    }

    public function getExtras(): array
    {
        return $this->extras;
    }

    public function setExtras( array $extras ): void
    {
        $this->extras = $extras;
    }

    public function getRoomNumber(): int
    {
        return $this->roomNumber;
    }

    public function setRoomNumber( int $roomNumber ): void
    {
        $this->roomNumber = $roomNumber;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice( int $price ): void
    {
        $this->price = $price;
    }

}
