<?php



session_start();

unset($_SESSION['error']);


$mysqli = new mysqli("localhost", "bit_academy", "bit_academy", "bobby_tables");
if ($mysqli->connect_error) {
    exit('Error connecting to database'); //Should be a message a typical user could understand in production
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli->set_charset("utf8mb4");

if (isset($_POST['submit'])) {
    $stmt = $mysqli->prepare("SELECT * FROM users WHERE username = ? AND pass = ?");
    $stmt->bind_param("si", $_POST['username'], $_POST['pass']);
    $stmt->execute();
    $result = $stmt->get_result();
    // if ($result->num_rows === 0) {
    //     exit('No rows');
    // } else {
    //     exit('correct');
    // }
    while ($row = $result->fetch_assoc()) {
        $username[] = $row['username'];
        $password[] = $row['pass'];
    }

    $stmt->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

</head>

<body>
    <form method="POST">
        <div>
            <label for="username">username</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" name="pass">
        </div>

        <?php if (isset($_POST['submit'])) { ?>
            <?php if ($result->num_rows === 0) { ?>
                <div class="alert alert-danger" role="alert">
                    A simple danger alert—check it out!
                </div>
            <?php } else { ?>
                <div class="alert alert-success" role="alert">
                    A simple success alert—check it out!
                </div>
            <?php } ?>
        <?php } ?>


        <input type="submit" name="submit" value="Inloggen">
    </form>
</body>

</html>