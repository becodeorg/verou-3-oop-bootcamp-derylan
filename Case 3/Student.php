<?php

declare(strict_types=1);

class Student
{
    public string $name;
    public float $grade;

    public function __construct(string $name, float $grade)
    {
        $this->name = $name;
        $this->grade = $grade;
    }

}