<?php


$host = 'localhost';
$db = 'bobby_tables';
$user = 'bit_academy';
$pass = 'bit_academy';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$pdo = new PDO($dsn, $user, $pass, $options);

session_start();

unset($_SESSION['error']);


$mysqli = new mysqli("localhost", "bit_academy", "bit_academy", "bobby_tables");
if ($mysqli->connect_error) {
    exit('Error connecting to database'); //Should be a message a typical user could understand in production
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli->set_charset("utf8mb4");

$stmt = $mysqli->prepare("SELECT username, password FROM users WHERE username = ? and password = ?");
$stmt->bind_param("si", $_POST['uersname'], $_POST['password']);

$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows === 0) exit('No rows');
$stmt->bind_result($idRow, $usernameRow, $passwordRow);
while ($stmt->fetch()) {

    $usernames[] = $nameRow;
    $passwords[] = $ageRow;
}

$stmt->close();

$_SESSION['error'] = "Gebruikersnaam of wachtwoord is ongeldig.";


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
    <form method="POST">
        <div>
            <label for="username">Gebruikersnaam</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Wachtwoord</label>
            <input type="text" name="password" id="password">
        </div>
        <?php if (isset($_SESSION['error'])) { ?>
            <div style="color: red;"><?= $_SESSION['error']; ?></div>
        <?php } ?>
        <input type="submit" value="Inloggen">
    </form>
</body>

</html>