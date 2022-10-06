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

function sortIsActive($column, $type)
{
    if ($type === 'series') {
        $getVar = 'sort_series';
    } else {
        $getVar = 'sort_films';
    }

    if (!isset($_GET[$getVar]) || !is_array($_GET[$getVar])) {
        return;
    }

    $sortArray = $_GET[$getVar];

    if (array_key_exists($column, $sortArray)) {
        if ($sortArray[$column] === 'asc') {
            return "&uArr;";
        }

        return "&dArr;";
    }
}
function sortUrl($column, $type)
{
    $url = "index.php?";

    $sortArray = $_GET;

    if ($type === 'series') {
        $getVar = 'sort_series';
    } else {
        $getVar = 'sort_films';
    }

    if (!isset($sortArray[$getVar]) || !is_array($sortArray[$getVar])) {
        $sortArray[$getVar] = [$column => 'asc'];
    } else {
        if (array_key_exists($column, $sortArray[$getVar])) {
            $currentDirection = $sortArray[$getVar][$column];
            $sortArray[$getVar] = [$column => $currentDirection === 'asc' ? 'desc' : 'asc'];
        } else {
            $sortArray[$getVar] = [$column => 'asc'];
        }
    }

    return $url . urldecode(http_build_query($sortArray));
}
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-wdth, initial-scale=1.0">
    <title>
        PHP Data Object(PDO)
    </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>PDO</h1>
    <h2>Oefening in ophalen van info uit een database via PDO</h2>
    <h3>Beschikbare Films</h3>
    <table>
        <theader>
            <tr>
                <th>
                    <a href="<?= sortUrl('titel', 'films') ?>">
                        <?= sortIsActive('titel', 'films') ?>
                        Titel
                    </a>
                </th>
                <th>
                    <a href="<?= sortUrl('duur', 'films') ?>">
                        <?= sortIsActive('duur', 'films') ?>
                        Duur
                    </a>
                </th>
            </tr>
        </theader>
        <tbody>
            <?php
            $basicSQL = "SELECT * from films";

            if (isset($_GET['sort_films']) && is_array($_GET['sort_films'])) {
                $basicSQL .= " ORDER BY ";
                foreach ($_GET['sort_films'] as $column => $direction) {
                    $basicSQL .= "`" . $column . "` " . $direction . " ,";
                }

                $basicSQL = rtrim($basicSQL, ',');
            }

            $recordset = $conn->query($basicSQL);
            $recordset->setFetchMode(PDO::FETCH_ASSOC);
            while ($row = $recordset->fetch()) {
                echo "<tr>";
                echo "<td><a href='detail_film.php?id=" . $row['id'] . "'>" . $row['titel'] . "</a></td>";
                echo "<td>" . $row['duur'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <h3>Beschikbare Series</h3>
    <table>
        <theader>
            <tr>
                <th>
                    <a href="<?= sortUrl('title', 'series') ?>">
                        <?= sortIsActive('title', 'series') ?>
                        Titel
                    </a>
                </th>
                <th>
                    <a href="<?= sortUrl('rating', 'series') ?>">
                        <?= sortIsActive('rating', 'series') ?>
                        Waardering
                    </a>
                </th>
            </tr>
        </theader>
        <tbody>
            <?php
            $basicSQL = "SELECT * from series";

            if (isset($_GET['sort_series']) && is_array($_GET['sort_series'])) {
                $basicSQL .= " ORDER BY ";
                foreach ($_GET['sort_series'] as $column => $direction) {
                    $basicSQL .= "`" . $column . "` " . $direction . " ,";
                }

                $basicSQL = rtrim($basicSQL, ',');
            }

            $recordset = $conn->query($basicSQL);
            $recordset->setFetchMode(PDO::FETCH_ASSOC);
            while ($row = $recordset->fetch()) {
                echo "<tr>";
                echo "<td><a href='detail_serie.php?id=" . $row['id'] . "'>" . $row['title'] . "</a></td>";
                echo "<td>" . $row['rating'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>