<?php

declare(strict_types=1);

class Group
{
    public array $students;

    public function __construct(array $students)
    {
        $this->students = $students;
    }

    public function averageScore()
    {
        $total = 0;
        foreach($this->students as $student){
            $total += $student->grade;
        }

        return $total / count($this->students);
    }

    public function averageTotal()
    {
        $total = 0;
        foreach($this->students as $student){
            $total += $student->grade;
        }

        return $total / count($this->students);
    }

    public function moveStudent()
    {
        foreach($this->students as $student){
            array_push($this->student);
            unset($this->student);
        }
    }
}