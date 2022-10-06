<?php

$dbhost = "localhost";
$dbname = "netland";
$dbuser = "bit_academy";
$dbpass = "bit_academy";

try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbuser);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

if (!isset($_GET['id'])) {
    die("Er is geen correcte ID meegestuurd");
}

$basicSQL = "SELECT * from series WHERE id=?";
$prepared = $conn->prepare($basicSQL);
$prepared->setFetchMode(PDO::FETCH_ASSOC);

$prepared->execute([
    $_GET['id']
]);

if ($prepared->rowCount() == 0) {
    die("Er is geen verdere informatie over deze film/serie beschikbaar");
}

$row = $prepared->fetch();
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-wdth, initial-scale=1.0">
    <title>
        <?php echo $row['title'] ?>
    </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="ruimte">
        <h1><?php echo $row['title'] ?></h1>
        <table>
            <theader>
                <tr>
                    <th>Information</th>
                    <th>Information</th>
                </tr>
            </theader>
            <tbody>
                <tr>
                    <td>Awards</td>
                    <td><?php echo $row['has_won_awards'] ?></td>
                </tr>
                <tr>
                    <td>Seasons</td>
                    <td><?php echo $row['seasons'] ?></td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td><?php echo $row['country'] ?></td>
                </tr>
                <tr>
                    <td>Language</td>
                    <td><?php echo $row['language'] ?></td>
                </tr>
                <tr>
                    <td>Rating</td>
                    <td><?php echo $row['rating'] ?></td>
                </tr>
            </tbody>
        </table>

        <h2>Beschrijving</h2>
        <p class="beschrijving"><?php echo $row['description'] ?></p>
    </div>
</body>

</html>