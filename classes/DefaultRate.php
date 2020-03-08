<?php


namespace App;

use App\GPS;

class DefaultRate extends BaseRate implements PriceInterface
{
    use GPS;

    public $price_km = 10;
    public $price_time = 3;

    public function payment($distance, $time, $age)
    {
        $koef_age = $this->checkAge($age);
        $price = ($distance * $this->price_km + $time * $this->price_time) * $koef_age;
        return $price;
    }
}
