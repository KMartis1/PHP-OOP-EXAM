<?php

namespace Marty\OopExam\CinemaModule;

class OrderProcessor implements TotalCalculatorInterface
{
    public array $Items = [];
    private $calculator;
    public float $finalPrice;

    public function addItem()
    {
        $list = [];
        array_push($list, $this);
    }

    public function getList()
    {
        return $this->list;
    }
    public function calculatePrice(): float
    {

    }
    public function __construct(TotalCalculatorInterface $calculator)
    {
        return $finalPrice + $this->calculator;
    }
}