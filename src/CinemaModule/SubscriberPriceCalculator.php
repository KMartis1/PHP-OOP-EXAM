<?php

namespace Marty\OopExam\CinemaModule;

class SubscriberPriceCalculator implements TotalCalculatorInterface
{
    public function calculatePrice(array $items): float
    {
        $sum = 0;
        foreach ($items as $CinemaTicket) {
            $sum += $CinemaTicket->getPrice();
        }
        $sum *= 0.9; // pritaikoma nuolaida krepseliui
        return $sum;
    }
}