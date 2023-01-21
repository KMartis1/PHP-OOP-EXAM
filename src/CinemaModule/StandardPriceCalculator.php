<?php

namespace Marty\OopExam\CinemaModule;

abstract class StandardPriceCalculator implements TotalCalculatorInterface
{
    public function StandardPriceCalculator(): float
    {
        return (/*čia turėtų būti surenkami price iš sukurto ticket'u array ir visi jie sudedami*/);
    }
}