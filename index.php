<?php

require_once 'vendor/autoload.php';
use \Marty\OopExam\module\Employee;

$employee1 = new Employee("Martynas", 800);
$employee1->setExperience(2);
echo $employee1->toString($employee1) . PHP_EOL;
echo $employee1->getExperience();