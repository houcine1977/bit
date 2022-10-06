<?php

session_start();

unset($_SESSION['error']);
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database;charset=UTF8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Verbinding is niet gelukt.." . $e->getMessage();
}

if (isset($_POST['submit'])) {
    $stmt = $mysqli->prepare("SELECT * FROM users WHERE username = ? AND pass = ?");
    $stmt->bind_param("si", $_POST['username'], $_POST['pass']);
    $stmt->execute();
    $result = $stmt->get_result();

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