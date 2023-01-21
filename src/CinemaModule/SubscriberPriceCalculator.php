<?php

namespace Marty\OopExam\CinemaModule;

abstract class SubscriberPriceCalculator implements TotalCalculatorInterface
{
    public function SubscriberPriceCalculator(): float
    {
        return (/*čia turėtų būti surenkami price iš sukurto ticket'u array ir visi jie sudedami ir padauginami is 0,9*/);
    }
}