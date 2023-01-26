<?php

namespace Marty\OopExam\CinemaModule;

class StandardPriceCalculator implements TotalCalculatorInterface
{
    public function calculatePrice(array $items): float
    {
        $sum = 0;
        foreach ($items as $CinemaTicket) {
            $sum += $CinemaTicket->getPrice();
        }
        return $sum;
    }
}