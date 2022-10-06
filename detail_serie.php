<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    html {
        font-family: Tahoma, Geneva, sans-serif;
        padding: 10px;
    }

    table {
        border-collapse: collapse;
        width: 500px;
    }

    th {
        background-color: #54585d;
        border: 1px solid #54585d;
    }

    th:hover {
        background-color: #64686e;
    }

    th a {
        display: block;
        text-decoration: none;
        padding: 10px;
        color: #ffffff;
        font-weight: bold;
        font-size: 13px;
    }

    th a i {
        margin-left: 5px;
        color: rgba(255, 255, 255, 0.4);
    }

    td {
        padding: 10px;
        color: #636363;
        border: 1px solid #dddfe1;
    }

    tr {
        background-color: #ffffff;
    }

    tr .highlight {
        background-color: #f9fafb;
    }

    .trs {
        color: red;
    }

    .net1 a {
        font-size: 18px;
        margin: 20px;
        font-weight: bold;
    }
</style>

<body>
    <center>
        <h1>Paneel</h1>
        <h3>Details</h3>

        <?php

        $id = $_GET['id'];



        $conn = new PDO("mysql:host=localhost;dbname=netland", 'bit_academy', 'bit_academy');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $results = $conn->query('SELECT * FROM series WHERE id=' . $id);
        echo "<table>";
        echo "<tr class='trs'>";
        echo "<td>Titel</td>";
        echo "<td>Rating</td>";
        echo "<td>Awards</td>";
        echo "<td>Seasons</td>";
        echo "<td>Country</td>";
        echo "<td>Language</td>";
        echo "</tr>";
        foreach ($results as $row) {
            echo "<tr>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['rating'] . "</td>";
            echo "<td>" . $row['has_won_awards'] . "</td>";
            echo "<td>" . $row['seasons'] . "</td>";
            echo "<td>" . $row['country'] . "</td>";
            echo "<td>" . $row['spoken_in_language'] . "</td>";
            echo "</tr>";
        }
        echo "</table></br>";
        echo "<h3>Omschrijving</h3></br>";
        echo $row['summary'];
        ?>
        <br><br><br>
        <div class="net1">
            <a href="index.php">Index</a>
            <a href="add_film.php">Insert</a>
        </div>
    </center>










</body>

</html>