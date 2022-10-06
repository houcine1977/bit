<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("Location:login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Terug naar de login pagina!</h3>
    <a href="login.php"> Klik hier</a>
</body>

</html>