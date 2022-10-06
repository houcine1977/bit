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

$basicSQL = "SELECT * from films WHERE id=?";
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
        <?php echo $row['titel'] ?>
    </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="ruimte">
        <h1><?php echo $row['titel'] ?></h1>
        <table>
            <theader>
                <tr>
                    <th>Information</th>
                    <th>Information</th>
                </tr>
            </theader>
            <tbody>
                <tr>
                    <td>Datum van verschijnen</td>
                    <td><?php echo $row['datum_van_uitkomst'] ?></td>
                </tr>
                <tr>
                    <td>Land van herkomst</td>
                    <td><?php echo $row['land_van_herkomst'] ?></td>
                </tr>
                <tr>
                    <td>Lengte van de film</td>
                    <td><?php echo $row['duur'] ?></td>
                </tr>
            </tbody>
        </table>

        <h2>Beschrijving</h2>
        <p class="beschrijving"><?php echo $row['omschrijving'] ?></p>

        <h2>Trailer</h2>
        <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $row['id_trailer']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
            encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</body>

</html>