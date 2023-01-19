<?php

namespace Marty\OopExam\module;

class Employee
{
    public const EMPLOYEE_TYPE = 1;
    public string $name;
    protected int $salary;
    protected int $experience;
    private int $id;

    public function __construct(string $name, int $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->id = rand();
    }

    public function getExperience()
    {
        return $this->experience;
    }
    public function setExperience(string $experience)
    {
        $this->experience = $experience;
    }

    public function getId()
    {
        return $this->id;
    }

    public function calculateSalary()
    {
        return $this->salary;
    }

    public function toString()
    {
        return "Darbuotojas {$this->id}: {$this->name} - {$this->salary} EUR";
    }

    public function __clone()
    {
        $this->id = 0;
    }

    public static function getTypeDescription(): string
    {
        return "Darbuotojo tipas - " . self::EMPLOYEE_TYPE;
    }
}