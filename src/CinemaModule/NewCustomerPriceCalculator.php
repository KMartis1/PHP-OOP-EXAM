<?php

namespace Marty\OopExam\CinemaModule;

abstract class NewCustomerPriceCalculator implements TotalCalculatorInterface
{
    public function NewCustomerPriceCalculator(): float
    {
        return (/*čia turėtų būti surenkami price iš sukurto ticket'u array ir visi jie sudedami ir atimama pirmo price nuolaida (iskviečiamas pirmo array elemento price * 0,2)*/);
    }

}