<?php

if (!isset($argv[1])) {
    echo "Geen wisselgeld" . PHP_EOL;
    exit;
} 
$input = ($argv[1]);

try {
    if (is_null($input)) {
        throw new Exception("Verkeerd aantal argumenten");
    }
    if (!is_numeric($input) || $input == " ") {
        throw new Exception("Input moet een valide getal zijn");
    }

    if ($input < 0) {
        throw new Exception("Input moet een positief getal zijn");
    }
    if ($input == 0) {
        throw new Exception("Geen wisselgeld");
    }


    define("GELDEENHEDEN", [
            50,
            20,
            10,
            5,
            2,
            1,
            0.50,
            0.20,
            0.10,
            0.05,
            0.02,
            0.01
        ]);
    $input = round($input += 0.02, 2, PHP_ROUND_HALF_UP);
    $euros = array(50,20,10,5,2,1);
    $centen = array(50,20,10,5);
    $geld = intval($input);
    $cent = $input - $geld;
    $cent = intval(round($cent * 100));
    function berekening($input, $euros)
    {
        foreach ($euros as $value) {
            $wissel = floor($input / $value);
        
            if ($wissel >= 1) {
                $input = $input - ($value * $wissel);
                echo $wissel . " x " . $value . " euro" . PHP_EOL;
            }
        }
    }

    berekening($input, $euros);
    function berekening1($centen, $cent)
    {
        foreach ($centen as $value) {
            $rest = floor($cent / $value);
            if ($rest >= 1) {
                $cent = $cent - ($value * $rest);
                echo $rest . " x " . $value . " cent" . PHP_EOL;
            }
        }
    }
    berekening1($centen, $cent);
    function berekening2($waarde, $value)
    {
        foreach (GELDEENHEDEN as $value) {
            $waarde = round($waarde, 2);
            $bereken = floor($waarde / $value);
            $waarde = $waarde - ($bereken * $value);
            berekening2($bereken, $value);
        }
    }
} catch (Exception  $exeption) {
    echo "Error Opgevangen: " . $exeption -> getMessage();
}

