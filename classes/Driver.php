<?php


namespace App;


trait Driver
{
    public function driverPayment($driverMode)
    {
        if ($driverMode == "on") {
            $driver = 100;
        } elseif ($driverMode == "off") {
            $driver = 0;
        }
        return $driver;
    }
}