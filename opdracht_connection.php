<?php

$servername = "localhost";
$username = "bit_academy";
$password = "bit_academy";
$database = "opdracht";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$database;charset=UTF8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Verbinding is niet gelukt.." . $e->getMessage();
}
