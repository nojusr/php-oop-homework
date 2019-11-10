<?php

declare(strict_types = 1);

namespace Exceptions;


class ReservationException extends \Exception
{

    public function __construct($message = "a reservation already exists in that period", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

}
