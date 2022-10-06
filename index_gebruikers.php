<center>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <style>
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
    </style>

    <body>
        <h1>Gegevens van gebruikers</h1>
        <?php
        $conn = new mysqli('localhost', 'bit_academy', 'bit_academy', 'netland');
        $sql = "SELECT * FROM gebruikers;";
        $results = $conn->query($sql);
        echo "<table>";
        echo "<tr>";
        echo "<td>Username</td>";
        echo "<td>Wachtwoord</td>";
        echo "</tr>";
        foreach ($results as $row) {
            echo "<tr>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['wachtwoord'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        ?>
        <a href="insert.php">Insert</a>
    </body>

    </html>
</center>