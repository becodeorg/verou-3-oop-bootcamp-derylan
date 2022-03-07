<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//Case #3

require './Student.php';
require './Group.php';

$groupA = new Group(
    [
        new Student('Maria', 10),
        new Student('Raul', 8),
        new Student('Rosa', 9),
        /*$student4 = new Student('Ana', 9.8),
        $student5 = new Student('Bryan', 7.5),
        $student6 = new Student('Carla', 8.3),
        $student7 = new Student('Daniel', 7.9),
        $student8 = new Student('Erika', 9.2),
        $student9 = new Student('France', 10),
        $student10 = new Student('Gaby', 7),*/
    ]
);

var_dump($groupA->averageScore());
unset($groupA->students[0]);
var_dump($groupA->averageScore());

$groupB = new Group(
    [
        $student11 = new Student('Hector', 9.2),
        $student12 = new Student('Ivan', 10),
        $student13 = new Student('Joan', 8.5),
        $student14 = new Student('Kevin', 7.2),
        $student15 = new Student('Laura', 6.5),
        $student16 = new Student('Moira', 7.3),
        $student17 = new Student('Nando', 9.5),
        $student18 = new Student('Olivia', 10),
        $student19 = new Student('Peter', 7),
        $student20 = new Student('Queen', 8.3),
    ]
    );