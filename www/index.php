<?php

require "../classes/PriceInterface.php";
require "../classes/BaseRate.php";
require "../classes/DefaultRate.php";
require "../classes/Hourly.php";
require "../classes/Daily.php";
require "../classes/Student.php";
require "../classes/GPS.php";

$object = new \App\DefaultRate();
$object2 = new \App\Hourly();
$object3 = new \App\Daily();
$object4 = new \App\Student();

$object->payment(10, 30, 22);


