<?php

$aantal = readline("Hoeveel vrienden zal ik vragen naar hun dromen? ");
$naam = [];

if (!is_numeric($aantal)) {
    echo "Er moet een getal worden ingevoerd" . PHP_EOL;
    exit; 
} else {
    for ($i = 1; $i <= $aantal; $i++) {
        $vriend = readline("Wat is je naam? ");
        $aantalDromen = readline("Hoeveel dromen wil je vertellen? ");

        $dromen = [];
        for ($x = 1; $x <= $aantalDromen; $x++) {
            $dromen[] = readline("Wat is je droom? ");
        }

        $naam[$vriend] = $dromen;
    }
}
foreach ($naam as $vriend => $dromen) { 
    foreach ($dromen as $droom) {
        echo "$vriend heeft de volgende droom: $droom" . PHP_EOL;   
    }
}


