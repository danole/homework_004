<?php


namespace App;


class Hourly extends BaseRate implements PriceInterface
{
    use GPS;
    use Driver;

    const PRICE_KM = 0;
    const PRICE_TIME = 200;

    public function __construct($time, $age, $gpsMode = "off", $driverMode = "off", $distance = 0)
    {
        echo $this->payment($time, $age, $gpsMode, $driverMode, $distance);
    }

    public function payment($time, $age, $gpsMode, $driverMode, $distance)
    {
        $koef_age = $this->checkAge($age);
        $koef_time = ceil($time / 60);
        $price = ($distance * self::PRICE_KM + $koef_time * self::PRICE_TIME) * $koef_age + $this->gpsPayment($time, $gpsMode)
            + $this->driverPayment($driverMode);
        return $price;
    }
}