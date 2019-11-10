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

    public function addReservation (Reservation $reservation)
    {
        array_push($reservations, $reservation);
    }

    public function removeReservation (Reservation $reservation)
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


    public function getRoomType(){
        return $this->roomType;
    }

    public function setRoomType($roomType){
        $this->roomType = $roomType;
    }

    public function getHasRestroom(){
        return $this->hasRestroom;
    }

    public function setHasRestroom($hasRestroom){
        $this->hasRestroom = $hasRestroom;
    }

    public function getHasBalcony(){
        return $this->hasBalcony;
    }

    public function setHasBalcony($hasBalcony){
        $this->hasBalcony = $hasBalcony;
    }

    public function getBedCount(){
        return $this->bedCount;
    }

    public function setBedCount($bedCount){
        $this->bedCount = $bedCount;
    }

    public function getExtras(){
        return $this->extras;
    }

    public function setExtras($extras){
        $this->extras = $extras;
    }

    public function getRoomNumber(){
        return $this->roomNumber;
    }

    public function setRoomNumber($roomNumber){
        $this->roomNumber = $roomNumber;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }

}
