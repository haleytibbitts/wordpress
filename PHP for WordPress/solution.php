<?php

// CHALLENGE #1
// $results = array();

// $results[] = 9 + 2 * 5 - 11;
// $results[] = 18 / ((3 * 6) - 9) * 3;
// $results[] = 3 * ((24 / 2) - (3 * 4) + (2 * 6));

// print_r($results);

// echo $results[0] . "\n";
// echo $results[1] . "\n";
// echo $results[2] . "\n";


// CHALLENGE #2
// $tmnt = array(
//     'Leo' => array('bandana' => 'blue', 'weapon' => 'swords', 'role' => 'leader'),
//     'Raph' => array('bandana' => 'red', 'weapon' => 'sai', 'role' => 'hot shot'),
//     'Mikey' => array('bandana' => 'orange', 'weapon' => 'nunchucks', 'role' => 'fun one'),
//     'Don' => array('bandana' => 'purple', 'weapon' => 'staff', 'role' => 'nerd'),
// );

// foreach($tmnt as $turtle => $traits) {
//     echo "<h2>$turtle:</h2>";
//     echo "<ul>";
//     foreach ($traits as $type => $trait) {
//             echo "<li>$type: $trait</li>";
//     };
//     echo "</ul>";
// };

// CHALLENGE #3
function compare($num1, $num2) {
    if ($num1 > $num2) {
        echo $num1;
    } else {
        echo $num2;
    };
};

compare(1, 2);
compare(3, 1);
compare(-3, 1);


?>