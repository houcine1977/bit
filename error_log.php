<!doctype html>
<html lang="en">

<head>
    <title>Mijn site</title>
</head>

<body>
<h1>Error_log</h1>
<form action="" method="post">
    <label for="getal">Getal</label>
    <input type="text" id="getal" name="getal">
</form>
<?php


$a = "";
function countDown($a)
{
    $a = $_POST["getal"];
    if ($a >= 0 && $a <= 10) {
        echo "Is goed!";
    } else {
        throw new Exception("Is niet goed!");
    }
}
try {
    countDown($a);
} catch (Exception $e) {
    error_log("Getal was niet tussen de 0 en 10", 3, "errors.log");
}

?>   

    

</body>

</html>