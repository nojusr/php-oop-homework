<?php

require __DIR__ . '/vendor/autoload.php';

$test = new objects\Apartament(1345, 99);
$guest1 = new objects\Guest("Antanas", "Zanavykas");

$startDate = new DateTime("2019-04-20");
$endDate = new DateTime("2019-04-25");

$res = new objects\Reservation($startDate, $endDate, $guest1);

$test->addReservation($res);

echo $test;
