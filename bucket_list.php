
<?php
echo "Hoeveel actitiviteiten wil jij toevoegen? " . PHP_EOL;
$a = readline();
if (!is_numeric($a)) {
    echo "Is geen getal probeer het opnieuw! " . PHP_EOL;
    return false;
}
for ($i = 1; $i <= $a; $i++) {
    echo "Wat wil jij toevoegen aan jouw bucketlijst? " . PHP_EOL;
    $b[] = readline() . PHP_EOL;
}
echo "Op jouw bucketlijst staat: " . PHP_EOL;
foreach ($b as $d) {
    echo $d . PHP_EOL;
}
  

