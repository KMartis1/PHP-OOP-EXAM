<?php

namespace Marty\OopExam\CinemaModule;

class OrderProcessor implements TotalCalculatorInterface
{
    public array $items = [];
    private TotalCalculatorInterface $calculator;

    public function addItem()
    {
        $items[] = $this;
    }

    public function getList()
    {
        return $this->list;
    }
    public function calculatePrice(array $items): float
    {
        return $this;
    }
    public function __construct(TotalCalculatorInterface $calculator)
    {
        return $this->calculator->calculatePrice($this->items);
    }
}