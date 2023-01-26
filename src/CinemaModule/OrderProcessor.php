<?php

namespace Marty\OopExam\CinemaModule;

class OrderProcessor implements TotalCalculatorInterface
{
    public array $items = [];
    private $calculator;
    public float $finalPrice;

    public function addItem()
    {
        $items = [];
        array_push($items, $this);
    }

    public function getList()
    {
        return $this->list;
    }
    public function calculatePrice(): void
    {

    }
    public function __construct(TotalCalculatorInterface $calculator)
    {
        return $this->calculator;
    }
}