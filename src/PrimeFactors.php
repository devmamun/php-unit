<?php

namespace App;

class PrimeFactors
{
    public function generate($number)
    {
        $factor = [];

        for ($devisor = 2; $number > 1; $devisor++) {
            for (; $number % $devisor == 0; $number /= $devisor) { 
                $factor[] = $devisor;
            }
        }
        
        return $factor;
    }
}