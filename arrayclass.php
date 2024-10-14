<?php

$students = [
    [
        "name" => "michael",
        "surname" => "jackson",
        "grades" => [
            "math" => 1,
            "science" => 1,
            "french" => 1,
            "religion" => 10
        ]
    ],
    [
        "name" => "simone",
        "surname" => "cartone",
        "grades" => [
            "math" => 2,
            "science" => 1,
            "french" => 2,
            "religion" => 10
        ]
    ],
    [
        "name" => "harry",
        "surname" => "potter",
        "grades" => [
            "math" => 3,
            "science" => 1,
            "french" => 2,
            "religion" => 10
        ]
    ]
];

print_r($students);

// sintax normale 
foreach($students as $student) {
    $init = 0;
    $grades = $student['grades'];

    echo "name and surname: " . $student['name'] . " " . $student['surname'] . "\n";
// utilizzo mat perche altrimenti dobbiamo richiamre tutte le materie, mentre cosi non c'e bisogno esempio 
// stutend['surname'] .. etc...

// ottima sintassi, $mat => si puo fare perche essendo assciativo c'e' la possibilita mentre in student nonrmale no perche  e'un array conta 0 1  2 
    foreach($grades as $mat => $grade) {
        echo "grade in $mat: $grade\n";
        $init += $grade;
    }
// avg contato 
    $average = $init / count($grades);
    echo "avg grade: . $average";
}

?>

/* ARRAY IN versione in js cambaito [] in {} e : anziche =>
const students = [
    {
        name: "michael",
        surname: "jackson",
        grades: {
            math: 1,
            science: 1,
            french: 1,
            religion: 10
        }
    },
    {
        name: "simone",
        surname: "cartone",
        grades: {
            math: 2,
            science: 1,
            french: 2,
            religion: 10
        }
    },
    {
        name: "harry",
        surname: "potter",
        grades: {
            math: 3,
            science: 1,
            french: 2,
            religion: 10
        }
    }
];
*/
