<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class GroupOne 
{
    public $name;
    public $grade;

    public function __construct(string $name, float $grade)
    {
        $this->name = $name;
        $this->grade = $grade;
    }
}

$maria = new Students('Ruben', 10);
$raul = new Students('Ruben', 10);
$rosa = new Students('Ruben', 10);
$ana = new Students('Ruben', 10);
$bryan = new Students('Ruben', 10);
$carla = new Students('Ruben', 10);
$daniel = new Students('Ruben', 10);
$erika = new Students('Ruben', 10);
$france = new Students('Ruben', 10);
$gaby = new Students('Ruben', 10);

?>