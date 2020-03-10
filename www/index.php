<?php

require "../classes/PriceInterface.php";
require "../classes/BaseRate.php";
require "../classes/GPS.php";
require "../classes/Driver.php";
require "../classes/DefaultRate.php";
require "../classes/Hourly.php";
require "../classes/Daily.php";
require "../classes/Student.php";

$object = new \App\DefaultRate(5, 120, 20, "on");

echo "<br>";

$object2 = new \App\Hourly(120, 25, "on", "on");

echo "<br>";

$object3 = new \App\Daily(10, 2000, 20, "on", "on");

echo "<br>";

$object4 = new \App\Student(1, 1, 20, "on");

