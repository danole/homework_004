<?php


namespace App;


class Daily extends BaseRate implements PriceInterface
{
    use GPS;
    use Driver;

    const PRICE_KM = 1;
    const PRICE_TIME = 1000;

    public function __construct($distance,$time,$age,$gpsMode="off",$driverMode="off")
    {
        echo $this->payment($distance,$time, $age,$gpsMode,$driverMode);
    }

    public function payment($distance, $time, $age,$gpsMode,$driverMode)
    {
        $koef_age = $this->checkAge($age);
        if ($time > 30) {
            $koef_time = ceil($time / 1470);
            $price = ($distance * self::PRICE_KM + $koef_time * self::PRICE_TIME) * $koef_age
                +$this->gpsPayment($time,$gpsMode)+$this->driverPayment($driverMode);
        } else {
            $price = ($distance * self::PRICE_KM)+$this->gpsPayment($time,$gpsMode)
                +$this->driverPayment($driverMode);
        }
        return $price;
    }
}