<!DOCTYPE html>

<head>
	<title>Terug naar de Calculator!</title>
</head>

<?php
$first_num = $_POST['first_num'] ?? "";
$second_num = $_POST['second_num'] ?? "";
$operator = $_POST['operator'] ?? "";
$result = '';

if ($first_num != "" &&  $second_num != "" && $operator != "") {
	if (!is_numeric($first_num)) {
		echo "number 1 is not a number" . PHP_EOL;
	}

	if (!is_numeric($second_num)) {
		echo "number 2 is not a number" . PHP_EOL;
	}

	if ($second_num == 0) {
	}

	if (is_numeric($first_num) && is_numeric($second_num)) {
		switch ($operator) {
			case "Add":
				$result = $first_num + $second_num;
				break;
			case "Subtract":
				$result = $first_num - $second_num;
				break;
			case "Multiply":
				$result = $first_num * $second_num;
				break;
			case "Divide":
				if ($second_num == 0) {
					echo "number 2 mag geen nul zijn! " . PHP_EOL;
					break;
				}
				$result = $first_num / $second_num;
				break;
			case "Modulo":
				if ($second_num == 0) {
					echo "number 2 mag geen nul zijn! " . PHP_EOL;

					break;
				}
				$result = fmod($first_num, $second_num);
		}
	}
}

?>

<body>
	<div id="page-wrap">
		<h1>Calculator</h1>
		<form action="" method="post" id="quiz-form">
			<p>
				<input type="tekst" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <b>Number 1</b>
			</p>
			<p>
				<input type="tekst" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <b>Number 2</b>
			</p>
			<p>
				<input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
			</p>
			<input type="submit" name="operator" value="Add" />
			<input type="submit" name="operator" value="Subtract" />
			<input type="submit" name="operator" value="Multiply" />
			<input type="submit" name="operator" value="Divide" />
			<input type="submit" name="operator" value="Modulo" />

		</form>
	</div>
</body>

</html>