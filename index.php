<?php

require __DIR__ . '/vendor/autoload.php';

$test = new objects\Apartament(1345, 99);

$guest1 = new objects\Guest("Antanas", "Zanavykas");
$startDate = new DateTime("2019-04-20");
$endDate = new DateTime("2019-04-25");
$res = new objects\Reservation($startDate, $endDate, $guest1);

$guest3 = new objects\Guest("Bronius", "Šimonius");
$sd3 = new DateTime("2019-05-9");
$ed3 = new DateTime("2019-05-15");
$res3 = new objects\Reservation($sd3, $ed3, $guest3);

$guest2 = new objects\Guest("Petras", "Kapšelis");
$sd2 = new DateTime("2019-05-14");
$ed2 = new DateTime("2019-05-30");
$res2 = new objects\Reservation($sd2, $ed2, $guest2);

objects\BookingManager::bookRoom($test, $res);

