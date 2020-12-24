<?php

namespace App\Taxes;

class Calculator
{
    public function calcul(float $prix): float
    {
        //100=>20: 120
        return $prix * (20 / 100);
    }
}
