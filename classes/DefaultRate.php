<?php


namespace App;


class DefaultRate extends BaseRate implements PriceInterface
{
    use GPS;

    const PRICE_KM = 10;
    const PRICE_TIME = 3;

    public function __construct($distance,$time,$age,$gpsMode="off",$driverMode="off")
    {
        echo $this->payment($distance , $time, $age,$gpsMode,$driverMode);
    }

    public function payment($distance , $time, $age,$gpsMode,$driverMode)
    {
        $koef_age = $this->checkAge($age);
        $price = ($distance * self::PRICE_KM + $time * self::PRICE_TIME) * $koef_age+$this->gpsPayment($time,$gpsMode);
        return $price;
    }
}
