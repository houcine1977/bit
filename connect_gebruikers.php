<?php

$host = 'localhost';
$user = 'bit_academy';
$pw = 'bit_academy';
$db = 'netland';

$con = mysqli_connect($host, $user, $pw, $db);
if ($con) {
    echo "";
} else {
    echo "Error!";
}
