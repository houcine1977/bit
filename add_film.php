<!doctype html>
<html lang="en">

<head>
    <title>Bit Academy</title>
</head>
<style>
    body {

        background-color: steelblue;
        color: white;
        font-size: 16px;
    }

    tr,
    td {
        text-align: center;
        border: 1px solid white;
        padding: 20px;
    }

    table {
        text-align: center;
        align-content: center;
    }
</style>

<body>


    <h1>The lord of the Rings: Fellowship of the Ring</h1>
    <form action="#" method="POST">

        <input type="submit" name="terug" value="Terug"><br><br>
        <label>Titel</label>
        <input type="text" name="titel"><br><br>
        <label>Duur</label>
        <input type="text" name="duur"><br><br>
        <label>Datum van uitkomst</label>
        <input type="date" name="datum"><br><br>
        <label>Land van uitkomst</label>
        <input type="text" name="land"><br><br>
        <label>Omschrijving</label>
        <input type="text" name="omschrijving"><br><br>
        <label>Youtube trailer ID</label>
        <input type="text" name="youtube"><br><br>
        <input type="submit" name="submit" value="Opslaan">

    </form>

    <?php
    if (isset($_POST['terug'])) {
        header("Location: index.php");
        exit;
    }
    ?>
    <?php

    if (isset($_POST['submit'])) {
        $titel = $_POST["titel"];
        $duur = $_POST["duur"];
        $datum = $_POST["datum"];
        $land = $_POST["land"];
        $omschrijving = $_POST["omschrijving"];
        $youtube = $_POST["youtube"];

        try {
            $conn = new PDO("mysql:host=localhost;dbname=netland", 'bit_academy', 'bit_academy');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO  movies( title, length_in_minutes, released_at, country_of_origin, summary, youtube_trailer_id) VALUES( '$titel', '$duur',
            '$datum', '$land', '$omschrijving', '$youtube')";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            echo $stmt->rowCount() . " records inserted successfully";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    ?>
</body>

</html>