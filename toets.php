<?php

if (isset($_POST["submit"])) {
    $operator = $_POST["submit"];
    $number1 =  ($_POST['nm1']);
    $number2 =  ($_POST['nm2']);
    $num1err = null;
    $num2err = null;
    switch ($operator) {
        case "Add":
            if (is_numeric($number1) == false) {
                $num1err = "De eerste getal is geen getal";
                $result =  null;
                break;
            }
            if (is_numeric($number2) == false) {
                $num2err = "De tweede getal is geen getal";
                $result =  null;
                break;
            } else {
                $num1err = null;
                $num2err = null;
                $operation = "Add";
                $result =  $number1 + $number2;
                break;
            }
        case "Substract":
            if (is_numeric($number1) == false) {
                $num1err = "De eerste getal is geen getal";
                $result =  null;
                break;
            }
            if (is_numeric($number2) == false) {
                $num2err = "De tweede getal is geen getal";
                $result =  null;
                break;
            } else {
                $num1err = null;
                $num2err = null;
                $operation = "Substract";
                $result =  $number1 - $number2;
                break;
            }
            break;
        case "Multiply":
            if (is_numeric($number1) == false) {
                $num1err = "De eerste getal is geen getal";
                $result =  null;
                break;
            }
            if (is_numeric($number2) == false) {
                $num2err = "De tweede getal is geen getal";
                $result =  null;
                break;
            } else {
                $num1err = null;
                $num2err = null;
                $operation = "Multiply";
                $result = $number1 * $number2;
                break;
            }
            break;
        case "Divide":
            if (is_numeric($number1) == false) {
                $num1err = "<span style='color:red;'>De eerste getal is geen getal;</span> ";
                $result =  null;
                break;
            }
            if (is_numeric($number2) == false) {
                $num2err = "De tweede getal is geen getal";
                $result =  null;
                break;
            }
            if ($number2 == 0) {
                $num2err = "Jij mag niet / 0";
                $result =  null;
                break;
            } else {
                $num1err = null;
                $num2err = null;
                $operation = "Divide";
                $result =  $number1 / $number2;
                break;
            }
            break;
        case "Modulo":
            if (is_numeric($number1) == false) {
                $num1err = "De eerste getal is geen getal";
                $result =  null;
                break;
            }
            if (is_numeric($number2) == false) {
                $num1err = "De tweede getal is geen getal";
                $result =  null;
                break;
            }
            if ($number2 == 0) {
                $num2err = "Jij mag niet / 0";
                $result =  null;
                break;
            } else {
                $num1err = null;
                $num2err = null;
                $operation = "Modulo";

                $result =  $number1 % $number2;
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

<body>

    <h1>Calculator</h1>

    <form method="post">
        <p> <label for="nm1">Number 1</label>
            <br>
            <input type="text" id="nm1" name="nm1" value="<?php echo $number1 ?? ''; ?>">

            <?php

            if (isset($_POST["submit"])) {
                if (!is_numeric($number1)) {
                    $num1err = "<span style='color:red;'>De eerste getal is geen getal;  </span> ";
                    echo $num1err;
                }
            }
            ?>

        </p>
        <p> <label for="nm2">Number 2</label><br>

            <input type="text" id="nm2" name="nm2" value="<?php echo $number2 ?? ''; ?>">

            <?php


            if (isset($_POST["submit"])) {
                if (!is_numeric($number2)) {
                    $num2err = "<span style='color:red;'>De tweede getal is geen getal;  </span> ";
                    echo $num2err;
                }
                if (($number2 == 0 and $operator == "Divide") or ($number2 == 0 and $operator == "Modulo")) {
                    $num2err = "<span style='color:red;'>Jij mag niet / 0; </span> ";
                    echo $num2err;
                } else {
                    $num2err = null;
                    echo $num2err;
                }
            }





            ?>
        </p>

        <?php




        if (isset($operation)) {
            echo "Operator: " . $operator . "<br>";
            echo "Result: " . $result . "<br><br>";
        }



        ?>



        <input type="submit" class="button" name="submit" value="Add">
        <input type="submit" class="button" name="submit" value="Substract">
        <input type="submit" class="button" name="submit" value="Multiply">
        <input type="submit" class="button" name="submit" value="Divide">
        <input type="submit" class="button" name="submit" value="Modulo">

    </form>

    <p>


    </p>




</body>

</html>
