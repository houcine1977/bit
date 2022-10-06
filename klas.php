<?php

echo "Wie zit er nu in de klas? " . PHP_EOL;
$a = readline();
$a = explode(' ', $a);
foreach ($a as $b) {
    echo $b . PHP_EOL;
}

