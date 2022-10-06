<?php

$a = array(
    'Japan' => "Tokyo",
    'Mexico' => "Mexico-Stad",
    'Verenigde Staten' => "Washington D.C.",
    'India' => "New Delhi",
    'Zuid-Korea' => "Seoul",
    'China' => "Peking",
    'Nigeria' => "Abuja",
    'Argentinie' => "Buenos Aires",
    'Egypte' => "Cairo",
    'Engeland' => "Londen"
);
$counter = 0;
foreach ($a as $land => $stad) {
    echo "Welke hoofdstad heeft  " . $land . " ? ";
    $b = readline("");
    if (in_array($b, $a, $land)) {
        $counter++;
        echo "Correct!" . PHP_EOL;     
    } else {
        echo "Helaas, " .  $b . " is niet de hoofdstad van " . $land . "." . PHP_EOL;
        echo "Het correcte antwoord is: " . $stad . PHP_EOL;
    }
}echo "Je hebt in totaal " . $counter . " van de 10 goed beantwoord.";

