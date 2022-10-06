
<?php

$i = 1;
$a = 1;
$b = 1;  
echo "Hoe hoog moet de faculteit minimaal zijn? ";    
$c = (int)readline(); 
while ($b <= $c) {
    $b = $b * $i;
    $i++;
}echo "De faculteit van " . ($i - 1) . " is " . $b . PHP_EOL ;



    
