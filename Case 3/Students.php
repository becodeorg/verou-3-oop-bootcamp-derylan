<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//Case #3

class Groups
{
    public $groupA;
    public $groupB;
}

class Students 
{
    public $name;
    public $grade;

    public function __construct(string $name, float $grade)
    {
        $this->name = $name;
        $this->grade = $grade;
    }

    public function avrgScore()
    {
        // foreach();
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

?>