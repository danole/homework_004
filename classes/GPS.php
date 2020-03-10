<?php


namespace App;


trait GPS
{
    public function gpsPayment($time, $gpsMode, $gpsPrice = 15)
    {
        if ($gpsMode == "on") {
            $koef_gps = ceil($time / 60);
            $gps = $gpsPrice * $koef_gps;
        } elseif ($gpsMode == "off") {
            $gps = 0;
        }
        return $gps;
    }
}