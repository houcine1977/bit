
<?php
echo "Van welk getal wil je de faculteit berekenen? ";
$b = 1;
$a = (int)readline();
for ($i = 1; $i <= $a; $i++) {
    $b = $b * $i;
}
echo "De faculteit van: " . $a . " is " .  $b . PHP_EOL;

