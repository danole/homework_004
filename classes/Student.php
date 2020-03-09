<?php


namespace App;


class Student  extends BaseRate implements PriceInterface
{
    use GPS;

    const PRICE_KM = 4;
    const PRICE_TIME = 1;

    public function __construct($distance,$time,$age,$gpsMode="off",$driverMode="off")
    {
        echo $this->payment($distance,$time, $age,$gpsMode,$driverMode);
    }

    public function payment($distance,$time,$age,$gpsMode,$driverMode)
    {
        if ($age<=25){
        $koef_age=$this->checkAge($age);
        $price = ($distance *self::PRICE_KM +$time*self::PRICE_TIME)*$koef_age+$this->gpsPayment($time,$gpsMode);
        }else {
            $price = "Вы не можете выбрать тариф студенческий, так как вам больше 25 лет";
        }
        return $price;
    }

}