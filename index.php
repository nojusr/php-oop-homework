<?php

require __DIR__ . '/vendor/autoload.php';

$test = new Entities\Apartament(1345, 99);

$guest1 = new Entities\Guest("Antanas", "Zanavykas");
$startDate = new DateTime("2019-04-20");
$endDate = new DateTime("2019-04-25");
$res = new Entities\Reservation($startDate, $endDate, $guest1);

$guest3 = new Entities\Guest("Bronius", "Šimonius");
$sd3 = new DateTime("2019-05-9");
$ed3 = new DateTime("2019-05-15");
$res3 = new Entities\Reservation($sd3, $ed3, $guest3);

$guest2 = new Entities\Guest("Petras", "Kapšelis");
$sd2 = new DateTime("2019-05-8");
$ed2 = new DateTime("2019-05-14");
$res2 = new Entities\Reservation($sd2, $ed2, $guest2);




Statics\BookingManager::bookRoom($test, $res2);
Statics\BookingManager::bookRoom($test, $res3);

