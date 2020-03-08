<?php


namespace App;


class Hourly extends BaseRate implements PriceInterface
{
    public $price_km = 0;
    public $price_time = 200;

    public function payment($time,$age,$distance=0)
    {
        $koef_age=$this->checkAge($age);
        $koef_time=ceil($time/60);
        $price = ($distance * $this->price_km +$koef_time*$this->price_time)*$koef_age;
        return $price;
    }
}