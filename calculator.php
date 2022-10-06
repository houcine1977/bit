<?php

if (isset($_POST["submit"])) {
    $getal1 = $_POST["number1"];
    $getal2 = $_POST["number2"];
    $operator = $_POST["submit"];
    $getal11 = "";
    $getal22 = "";
    switch ($operator) {
        case ("Add"):
            if (!is_numeric($getal1)) {
                $getal11 = "<h2>Dit moet een getal zijn!</h2>";
                $result = "";
                break;
            } if (!is_numeric($getal2)) {
                $getal22 = "<h2>Dit moet een getal zijn!</h2>";
                $result = "";
                break;
            } else {
                $getal11 = "";
                $getal22 = "";
                $result = $getal1 + $getal2;
                break;
            }
            break;
        case ("Substract"):
            if (!is_numeric($getal1)) {
                $getal11 = "<h2>Dit moet een getal zijn!</h2>";
                $result = "";
                break;
            }
            if (!is_numeric($getal2)) {
                $getal22 = "<h2>Dit moet een getal zijn!<h2>";
                $result = "";
                break;
            } else {
                $getal11 = "";
                $getal22 = "";
                $result = $getal1 - $getal2;
                break;
            }
            break;
        case ("Multiply"):
            if (!is_numeric($getal1)) {
                $getal11 = "<h2>Dit moet een getal zijn!<h2>";
                $result = "";
                break;
            }
            if (!is_numeric($getal2)) {
                $getal22 = "<h2>Dit moet een getal zijn!</h2>";
                $result = "";
                break;
            } else {
                $getal11 = "";
                $getal22 = "";
                $result = $getal1 * $getal2;
                break;
            }
            break;
        case ("Divide"):
            if (!is_numeric($getal1)) {
                $getal11 = "<h2>Dit moet een getal zijn!</h2>";
                $result = "";
                break;
            }
            if (!is_numeric($getal2)) {
                $getal22 = "<h2>Dit moet een getal zijn!</h2>";
                $result = "";
                break;
            }
            if ($getal2 == 0) {
                $getal22 = "<h2>Mag geen 0 zijn!</h2>";
                $result = "";
                break;
            } else {
                $getal11 = "";
                $getal22 = "";
                $result = $getal1 / $getal2;
                break;
            }
            break;
        case ("Modulo"):
            if (!is_numeric($getal1)) {
                $getal11 = "<h2>Dit moet een getal zijn!</h2>";
                $result = "";
                break;
            }
            if (!is_numeric($getal2)) {
                $getal22 = "<h2>Dit moet een getal zijn!</h2>";
                $result = "";
                break;
            }
            if ($getal2 == 0) {
                $getal22 = "Mag geen 0 zijn!";
                $result = "";
                break;
            } else {
                $getal11 = "";
                $getal22 = "";
                $result = fmod($getal1, $getal2);
                break;
            }
            break;
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Calculator</title>
</head>
<style>
    h2{
        color: red;
        font-size: 16px;
    }
</style>
<body>
    <h1>Nieuwe rekenmachine</h1>
    <form action="" method="post">
        <p>
            <label> Number 1</label>
            <input type = "text" id = "number1" name = "number1" value = "<?php echo $getal1 ?? ''; ?>">
            <?php 
            if (isset($_POST["submit"])) {
                if (!is_numeric($getal1)) {
                    echo "<h2>Getal 1 moet een getal zijn!</h2><br>";
                }
            }
            ?>
        </p>
        <p>
            <label>Number 2</label>
            <input type = "text" id = "number2"  name = "number2" value = "<?php echo $getal2 ?? ''; ?>"><br>
            <?php
            if (isset($_POST["submit"])) {
                if (!is_numeric($getal2)) {
                    echo "<h2>Getal 2 moet een getal zijn!</h2><br>"; 
                }
                if (($getal2 == 0 and $operator == "Modulo") or ($getal2 == 0 and $operator == "Divide")) {
                    echo "<h2>Getal 2 mag geen 0 zijn!</h2><br>";
                } else {
                    $getal22 = "";
                    echo $getal22;
                }
            }
            ?>
            <?php
            if (isset($operator)) {
                echo "Operator: " . $operator . "<br>";
                echo "Result: " . $result . "<br>";
            }
            ?>
        </p>
    <input type = "submit" name= "submit" value = "Add">
    <input type = "submit" name= "submit" value = "Substract">
    <input type = "submit" name= "submit" value = "Multiply">
    <input type = "submit" name= "submit" value = "Divide">
    <input type = "submit" name= "submit" value = "Modulo">
</form>
</body>

</html>
