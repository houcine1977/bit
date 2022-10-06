<?php
$id = $_GET['id'];
$conn = new mysqli('localhost', 'bit_academy', 'bit_academy', 'media');
if ($conn->connect_error) {
    die("Connection failed " . $conn->connect_error);
}
$sql = "SELECT * FROM media WHERE id =" . $id;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $titel = $row["title"];
    $rating = $row["rating"];
    $omschrijving = $row["summary"];
    $awards = $row["has_won_awards"];
    $seasons = $row["seasons"];
    $country = $row["country"];
    $lengte = $row["length_in_minutes"];
    $release = $row["released_at"];
    $youtube = $row["youtube_trailer_id"];
    $type = $row["type_media"];
} else {
    echo "Niet gevonden!";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <center>
        <form action="" method="POST">
            <h1>Media Toevoegen</h1>
            <label>Titel:</label>
            <input type="text" name="title" value="<?php echo $titel; ?>">
            <label>Rating:</label>
            <input type="number" name="rating" value="<?php echo $rating; ?>">
            <label>Omschrijving:</label>
            <input type="text" name="summary" value="<?php echo $omschrijving; ?>">
            <label>Aantal awards:</label>
            <input type="number" name="awards" value="<?php echo $awards; ?>">
            <label>Lengte in minuten</label>
            <input type="number" name="lengte" value="<?php echo $lengte; ?>">
            <label>Releasedatum (dd-mm-yyyy):</label>
            <input type="date" name="release" value="<?php echo $release; ?>">
            <label>Seizoenen:</label>
            <input type="number" name="seasons" value="<?php echo $seasons; ?>">
            <label>Land:</label>
            <select name="country">
                <option>--</option>
                <option value="UK" <?php if ($country == 'UK') {
                                        echo 'selected';
                                    } ?>>UK</option>
                <option value="NL" <?php if ($country == 'NL') {
                                        echo 'selected';
                                    } ?>>NL</option>
            </select>
            <label>Youtube trailer ID:</label>
            <input type="text" name="youtube" value="<?php echo $youtube; ?>">
            <label>Type media:</label>
            <select name="type">
                <option>--</option>
                <option value="Film" <?php if ($type == 'Film') {
                                            echo 'selected';
                                        } ?>>Film</option>
                <option value="Serie" <?php if ($type == 'Serie') {
                                            echo 'selected';
                                        } ?>>Serie</option>
            </select>
            <input type="submit" name="submit" value="Opslaan">
        </form>
    </center>
    <center>
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
        $servername = "localhost";
        $username = "bit_academy";
        $password = "bit_academy";
        $db = "media";
        $conn = new mysqli($servername, $username, $password, $db);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "UPDATE media SET title = '$titel', rating = '$rating', 
        summary = '$omschrijving', has_won_awards = '$awards', 
        seasons = '$seasons', country = '$country', 
        length_in_minutes = '$lengte', released_at = '$release', 
        youtube_trailer_id = '$youtube', type_media = '$type' WHERE id =" . $id;
        if ($conn->query($sql) === true) {
            echo "Records updated: " . $id . "-" . $titel . "-" . $rating . "-" . $omschrijving .
                "-" . $awards . "-" . $seasons . "-" . $country . "-" . $lengte . "-" . $release . "-" . $youtube . "-" . $type;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    ?>
</body>

</html>