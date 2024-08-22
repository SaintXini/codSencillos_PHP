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

$ageRanges = [
    'work' => [22, 30]
];

$age_People = 18;
$aduls = [];
$menores = [];

foreach ($people as $person) {
    if ($person['age'] >= $age_People) {
        $adults[] = $person['name'];
    } else {
        $minors[] = $person['name'];
    }
}

echo "Mayores de edad:<br>";
foreach ($adults as $adult) {
    echo "- $adult<br>";
}

echo "<br>Menores de edad:<br>";
foreach ($minors as $minor) {
    echo "- $minor<br>";
}

$peopleByAgeRange = [];

foreach ($people as $person) {
    foreach ($ageRanges as $rangeName => $range) {
        if ($person['age'] >= $range[0] && ($person['age'] <= $range[1] || $range[1] === null)) {
            $peopleByAgeRange[$rangeName][] = $person['name'];
            break; 
        }
    }
}


foreach ($peopleByAgeRange as $rangeName => $names) {
    echo "<br>Aptos para laborar:<br>";
    foreach ($names as $name) {
        echo "- $name<br>";
    }
    echo "\n";
}
