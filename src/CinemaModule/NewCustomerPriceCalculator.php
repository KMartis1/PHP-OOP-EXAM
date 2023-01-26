<?php

namespace Marty\OopExam\CinemaModule;

class NewCustomerPriceCalculator implements TotalCalculatorInterface
{
    public function calculatePrice(array $items): float
    {
        $sum = 0;
        foreach ($items as $CinemaTicket) {
            $sum += $CinemaTicket->getPrice();
        }
        $sum -= ($items[0] * 0.2); //is bendros sumos atimima pirmo bilieto is array nuolaidos suma.
        return $sum;
    }
}