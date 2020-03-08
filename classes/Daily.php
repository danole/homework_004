<?php


namespace App;


class Daily extends BaseRate implements PriceInterface
{
    public $price_km = 1;
    public $price_time = 1000;

    public function payment($distance, $time, $age)
    {
        $koef_age = $this->checkAge($age);
        if ($time > 30) {
            $koef_time = ceil($time / 1470);
            $price = ($distance * $this->price_km + $koef_time * $this->price_time) * $koef_age;
        } else {
            $price = ($distance * $this->price_km);
        }
        return $price;
    }
}