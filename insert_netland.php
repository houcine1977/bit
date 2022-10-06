<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc ument</title>
</head>

<style>
    body {
        background-color: gray;
    }

    input,
    select {
        display: block;
        margin: 20px;
        width: 300px;
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
    <form action="" method="POST">
        <center>
            <h1>Media Toevoegen</h1>
            <label>Titel:</label>
            <input type="text" name="title">

            <label>Rating:</label>
            <input type="number" name="rating">

            <label>Omschrijving:</label>
            <input type="text" name="summary">

            <label>Aantal awards:</label>
            <input type="number" name="awards">

            <label>Lengte in minuten</label>
            <input type="number" name="lengte">

            <label>Releasedatum (dd-mm-yyyy):</label>
            <input type="date" name="release">

            <label>Seizoenen:</label>
            <input type="number" name="seasons">

            <label>Land:</label>
            <select name="country">
                <option value="">...</option>
                <option value="UK">UK</option>
                <option value="NL">NL</option>
            </select>

            <label>Youtube trailer ID:</label>
            <input type="text" name="youtube">

            <label>Type media:</label>
            <select name="type">
                <option value="">...</option>
                <option value="Film">Film</option>
                <option value="Serie">Serie</option>
            </select>
            <input type="submit" name="submit" value="Opslaan">
        </center>

    </form>
    <center>
        <button onclick="my()">Annuleren</button>
        <a href="index_media.php">Terug</a>
    </center>

    <?php
    if (isset($_POST['terug'])) {
        header("Location: index_media.php");
        exit;
    }
    ?>

    <?php
    if (isset($_POST['submit'])) {
        $titel = $_POST["title"];
        $rating = $_POST["rating"];
        $omschrijving = $_POST["summary"];
        $awards = $_POST["awards"];
        $seasons = $_POST["seasons"];
        $country = $_POST["country"];
        $lengte = $_POST["lengte"];
        $release = $_POST["release"];
        $youtube = $_POST["youtube"];
        $type = $_POST["type"];
        try {
            $conn = new PDO("mysql:host=localhost;dbname=media", 'bit_academy', 'bit_academy');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO media(title, rating, summary, 
            has_won_awards, seasons, country, length_in_minutes, 
            released_at,  youtube_trailer_id, type_media) VALUES('$titel', '$rating', 
            '$omschrijving', '$awards', '$seasons', '$country', '$lengte', '$release', 
            '$youtube', '$type')";

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