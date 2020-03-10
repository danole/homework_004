<?php

namespace App;

abstract class BaseRate
{
    public function checkAge($age)
    {
        if ($age < 18 || $age > 65) {
            echo "Ваш возраст не подходит";
            exit();
        } elseif ($age >= 18 && $age <= 21) {
            $koef_age = 1.1;
        } else {
            $koef_age = 1;
        }
        return $koef_age;
    }
}