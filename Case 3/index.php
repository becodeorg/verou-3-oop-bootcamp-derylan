<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

function pre($input)
{
    echo "<pre>";
    var_dump($input);
    echo "</pre>";
}

//Case #3

require './Student.php';
require './Group.php';

$groupA = new Group(
    [
        new Student('Maria', 10),
        new Student('Raul', 8.5),
        new Student('Rosa', 9),
        new Student('Ana', 9.8),
        new Student('Bryan', 7.5),
        new Student('Carla', 8.3),
        new Student('Daniel', 7.9),
        new Student('Erika', 9.2),
        new Student('France', 10),
        new Student('Gaby', 7),
    ]
);

echo "The average grade for Group A is: " . $groupA->averageScore() . ".<br>";

$groupB = new Group(
    [
        new Student('Hector', 9.2),
        new Student('Ivan', 10),
        new Student('Joan', 8.5),
        new Student('Kevin', 7.2),
        new Student('Laura', 6.5),
        new Student('Moira', 7.3),
        new Student('Nando', 9.5),
        new Student('Olivia', 10),
        new Student('Peter', 7),
        new Student('Queen', 8.3),
        new Student('Rog', 8.5)
    ]
    );

echo "The average grade for Group B is: " . $groupB->averageScore() . ".<br><br>";
echo "The average grade for both group is: " . ($groupA->averageScore() + $groupB->averageScore()) / 2 . ".<br>";

function moveStudent($to, $from)
{
        array_push($from->students[0]);
        unset($to->students[0]);
}

moveStudent($groupA, $groupB);

pre($groupA->students);
pre($groupB->students);

// unset($groupA->students[0]);
// var_dump($groupA->averageScore());