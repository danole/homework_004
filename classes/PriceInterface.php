<?php

namespace App;


interface PriceInterface
{
    public function payment($distance, $time, $age, $gpsMode, $driverMode);
}
