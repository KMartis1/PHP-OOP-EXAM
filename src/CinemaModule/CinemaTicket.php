<?php

namespace Marty\OopExam\CinemaModule;

Class CinemaTicket
{
    public string $movieName;
    public string $place;
    public string $movieTime;
    public float $price;

    public function __construct(string $movieName, string $place, string $movieTime,float $price)
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