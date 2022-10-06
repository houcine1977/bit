<?php

echo "Hoeveel landen ga je toevoegen? " . PHP_EOL;
$a = (int)readline();


for ($i = 1; $i <= $a; $i++) {
    echo "Welk land wil je toevoegen? " . PHP_EOL;
    $b[] = readline();
    echo "Wat is de hoofdstad van " . PHP_EOL;
    $c[] = readline();
}


foreach ($b as $key => $value) {
    echo $b[$key] . " " . $c[$key] . PHP_EOL;
}
