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
        <input type="submit" name="terug" value="Terug">

        <br><br>
        <label>Titel</label>
        <input type="text" name="titel"><br><br>
        <label>Rating</label>
        <input type="number" name="rating"><br><br>
        <label>Award</label>
        <input type="number" name="award"><br><br>
        <label>Seasons</label>
        <input type="number" name="seasons"><br><br>
        <label>Omschrijving</label>
        <input type="text" name="omschrijving"><br><br>
        <label>Country</label>
        <input type="text" name="country"><br><br>
        <label>Language</label>
        <input type="text" name="language"><br><br>
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
        $rating = $_POST["rating"];
        $award = $_POST["award"];
        $seasons = $_POST["seasons"];
        $country = $_POST["country"];
        $omschrijving = $_POST["omschrijving"];
        $language = $_POST["language"];
        try {
            $conn = new PDO("mysql:host=localhost;dbname=netland", 'bit_academy', 'bit_academy');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO series(title, rating, summary, has_won_awards, seasons, 
            country, spoken_in_language) VALUES( '$titel', '$rating', '$omschrijving', '$award', 
            '$seasons', '$country', '$language')";
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