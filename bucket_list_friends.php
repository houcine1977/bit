<?php

echo "Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL;
$a = readline();
if (!is_numeric(($a))) { 
    echo "is geen getal!";
    exit;
} else {
    for ($i = 1; $i <= $a; $i++) {
        echo "Wat is jouw naam? " . PHP_EOL;
        $b[] =  readline();
        echo "Wat is jouw droom? " . PHP_EOL;
        $c[] = readline();

        foreach ($b as $d => $e) {
            foreach ($c as $f => $g) {
            }
        }
        echo $e . " heeft dit als droom: " . $g . PHP_EOL;
    }
}

