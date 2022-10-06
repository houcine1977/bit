<?php

$d;
$u;
$a = $argv[1];
$a = str_replace('"', '', $a);
$b = explode(" " , $a);

foreach ($b as $c) {
    $e = substr($c, -1);
    switch ($e) {
        case "s":
            $s = (int)$c;
            break;
        case "m":
            $m = (int)$c * 60;
            break;
        case "u":
            $u = (int)$c * 3600;
            break;
        case "d":
            $d = (int)$c * 3600 * 24;
            break;
    }
}
$seconds = $s + $m + $d + $u;
echo "$seconds seconden";

