
<?php
echo "Hoeveel stappels wil je hebben? " . PHP_EOL;
$a = (int)readline();
$b = "*";
for ($i = 1; $i <= $a; $i++) {
    echo $b . PHP_EOL;
    $b .= "+";
}

