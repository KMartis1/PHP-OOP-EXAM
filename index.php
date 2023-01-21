<?php

require_once 'vendor/autoload.php';
use \Marty\OopExam\module\Employee;
use \Marty\OopExam\module\Intern;
use \Marty\OopExam\module\Manager;
use \Marty\OopExam\CinemaModule\CinemaTicket;

$Intern1 = new Intern("Jonas", 500);
$Manager1 = new Manager("Kazys", 1500,5);
var_dump($Intern1) . PHP_EOL;
echo ("------------------------") . PHP_EOL;
var_dump($Manager1) . PHP_EOL;
echo ("------------------------") . PHP_EOL;
echo $Intern1->calculateSalary() . PHP_EOL;
echo $Manager1->calculateSalary() . PHP_EOL;
echo $Intern1->getTypeDescription() . PHP_EOL;
echo $Manager1->getTypeDescription() . PHP_EOL;
$Intern2 = clone $Intern1;
echo $Intern2->getId();

//$ticket1 = new CinemaTicket("Obuoliaut", "Kaunas", '2023-01-25', 10);
//$ticket2 = new CinemaTicket("Obuoliaut", "Kaunas", "2023-01-25", 14);
//$ticket3 = new CinemaTicket("Obuoliaut", "Kaunas", "2023-01-25", 8);
//
//var_dump($ticket1);