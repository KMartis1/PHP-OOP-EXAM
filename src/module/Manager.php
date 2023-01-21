<?php

namespace Marty\OopExam\module;

class Manager extends Employee
{
    public const EMPLOYEE_TYPE = 2;

    public int $owerTimeHours;

    public function __construct(string $name, int $salary, int $owerTimeHours)
    {
        $this->owerTimeHours = $owerTimeHours;
        parent::__construct($name, $salary);
    }

    public function calculateSalary()
    {
        return $this->salary + (($this->salary / 40 * $this->owerTimeHours) * 2);
    }
    public static function getTypeDescription(): string
    {
        return "Darbuotojo tipas - " . self::EMPLOYEE_TYPE;
    }

}