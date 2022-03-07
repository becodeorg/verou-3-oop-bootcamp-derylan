<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//Case #3

class Students 
{
    public $name;
    public $grade;

    public function __construct(string $name, float $grade)
    {
        $this->name = $name;
        $this->grade = $grade;
    }
}

// class GroupOne 
// {
//     public $name;
//     public $grade;

//     public function __construct(string $name, float $grade)
//     {
//         $this->name = $name;
//         $this->grade = $grade;
//     }
// }

class Groups
{
    public array $groups;

    public function __construct( array $groups)
    {
        $this->groups = $groups;
    }

    public function averageScore()
    {
        foreach($groups as $student);
    }
}

?>