
<?php
$operatie = readline("Welke operatie wil je uitvoeren? (+, -) ") ;
$getal1 = readline("Geef het eerste getal: ") ;
$getal2 = readline("Geef het tweede getal: ") ;
if ($operatie == "+") {
    echo "De uitkomst is: " . $getal1 + $getal2 . PHP_EOL ;
} else {
    echo "De uitkomst is: " . $getal1 - $getal2 . PHP_EOL ;
}
?>