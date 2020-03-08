<?php


namespace App;


class Student  extends BaseRate implements PriceInterface
{
    public $price_km = 4;
    public $price_time = 1;

    public function payment($time,$age,$distance)
    {
        if ($age<=25){
        $koef_age=$this->checkAge($age);
        $price = ($distance * $this->price_km +$time*$this->price_time)*$koef_age;
        }else {
            $price = "Вы не можете выбрать тариф студенческий, так как вам больше 25 лет";
        }
        return $price;
    }

}