<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require './Students.php';
$groupA = new Groups(
    [
        $student1 = new Students('Maria', 10),
        $student2 = new Students('Raul', 8),
        $student3 = new Students('Rosa', 9),
        $student4 = new Students('Ana', 9.8),
        $student5 = new Students('Bryan', 7.5),
        $student6 = new Students('Carla', 8.3),
        $student7 = new Students('Daniel', 7.9),
        $student8 = new Students('Erika', 9.2),
        $student9 = new Students('France', 10),
        $student10 = new Students('Gaby', 7),
    ]
);

$groupB = new Groups(
    [
        $student11 = new Students('Hector', 9.2),
        $student12 = new Students('Ivan', 10),
        $student13 = new Students('Joan', 8.5),
        $student14 = new Students('Kevin', 7.2),
        $student15 = new Students('Laura', 6.5),
        $student16 = new Students('Moira', 7.3),
        $student17 = new Students('Nando', 9.5),
        $student18 = new Students('Olivia', 10),
        $student19 = new Students('Peter', 7),
        $student20 = new Students('Queen', 8.3),
    ]
    );

?>
