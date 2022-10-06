<?php

echo "Het albumoverzicht: " . PHP_EOL;
$a = ['Citizen of Glass' => 4.5, 
'Night' => 9, 
'New Eyes' => 5, 
'Strange Trails' => 10
];
foreach ($a as $key => $value) {
    echo $key . " kost €" . $value . PHP_EOL;
}
echo "Het totaalbedrag van alle albums is  €" . array_sum($a) . PHP_EOL;
echo "De gemiddelde prijs van alle albums is  €" .  array_sum($a) / count($a) . PHP_EOL;
