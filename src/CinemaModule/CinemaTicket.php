<?php

namespace Marty\OopExam\CinemaModule;

abstract class CinemaTicket
{
    public string $movieName;
    public string $place;
    public ?Datetime $movieTime;
    public float $price;

    public function __construct(string $movieName, string $place, Datetime $movieTime,float $price)
    {
        $this->movieName = $movieName;
        $this->place = $place;
        $this->movieTime = $movieTime;
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

}