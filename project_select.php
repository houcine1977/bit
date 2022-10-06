<?php

include("project_connection.php");
session_start();
if (isset($_POST['submit'])) {
    $query = "SELECT * FROM project WHERE gebruikersnaam = '$_POST[gebruikersnaam]'";
    $result = mysqli_query($con, $query);

    echo "<table border = '2'>
        <tr>
        <th>Gebruikersnaam</th>
        <th>Wachtwoord</th>
        </tr>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>
        <td>$row[gebruikersnaam]</td>;
        <td>$row[wachtwoord]</td>;
        </tr>";
    }
    echo "</table>";
    echo "Aantal geseleteerde deelnemers = " . mysqli_affected_rows($con);
    mysqli_close($con);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELECT</title>
</head>
<style>
    td,
    th {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<body>
    <center>
        <h1>Lijst van de deelnemers</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="">Gebruikersnaam</label>
            <input type="text" name="gebruikersnaam"><br><br>
            <input type="submit" name="submit" value="Zoeken"><br><br>
            <a href="project_insert.php">Toevoegen</a>
            <a href="project_update.php">Updaten</a>
            <a href="project_delete.php">Verwijderen</a>
            <a href="project_select.php">Selecteren</a>

        </form>
    </center>
</body>

</html>