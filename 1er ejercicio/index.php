<?php

$people = [
    ['name' => 'Joseph', 'age' => 25],
    ['name' => 'Sarah', 'age' => 5],
    ['name' => 'Anne', 'age' => 18],
    ['name' => 'Pratham', 'age' => 23],
    ['name' => 'Simon', 'age' => 30],
    ['name' => 'Amir', 'age' => 28],
    ['name' => 'Sabrina', 'age' => 22],
    ['name' => 'Rena', 'age' => 24],
    ['name' => 'Meet', 'age' => 21],
    ['name' => 'Vitto', 'age' => 24],
    ['name' => 'Rachel', 'age' => 9],
    ['name' => 'Tom', 'age' => 3]

];

$age_minor = 0;
$age_adult = 0;
$the_work = [];

foreach ($people as $person) {
    $age = $person['age'];
    $name = $person['name'];

    if ($age >= 18) {
        $age_adult++;
        $mayores[] = $name; 
    } 
    else {
        $age_minor++;
        $menores[] = $name;
    }
}

foreach ($people as $person) {
    $age = $person['age'];
    $name = $person['name'];

    if ($age >= 22 && $age <= 30) {
        $the_work[] = $name;
    }
}

echo "Personas mayores de edad:<br>";
foreach ($mayores as $nombre) {
    echo "- $nombre<br>";
}

echo "<br>Personas menores de edad:<br>";
foreach ($menores as $nombre) {
    echo "- $nombre<br>";
}

echo "<br>Aptas para laborar:<br>";
foreach ($the_work as $nombre) {
    echo "- $nombre<br>";
}
