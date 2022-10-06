<?php

include("project_connection.php");
session_start();
if (isset($_POST['submit'])) {
    $gebruikersnaam = htmlspecialchars(trim(strtolower($_POST['gebruikersnaam'])));
    $wachtwoord = md5($_POST['wachtwoord']);
    $query = "INSERT INTO project(gebruikersnaam, wachtwoord) VALUES('$gebruikersnaam', '$wachtwoord')";
    $result = mysqli_query($con, $query);
    echo "Deelnemer met succes toegevoegd!<br><br>";
    echo "Aantal deelnemers = " . mysqli_affected_rows($con);

    echo "<table>
    <tr>
    <th>Gebruikersnaam</th>
    <th>Wachtwoord</th>
    </tr>";

    echo "<tr>
    <td>$_POST[gebruikersnaam]</td>;
    <td>$_POST[wachtwoord]</td>;
    </tr>";
    echo "</table>";






    mysqli_close($con);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT</title>
</head>
<style>
    label {
        margin-right: 10px;
        margin-top: 10px;
    }

    input {
        display: block;

    }

    a {
        display: inline;
        margin-right: 10px;

    }

    td,
    th {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<body>
    <center>
        <h1>Login Scherm</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="">Gebruikersnaam</label>
            <input type="text" name="gebruikersnaam" required placeholder="Enter jouw gebruikersnaam.." id=""><br>
            <label for="">Wachtwoord</label>
            <input type="password" required placeholder="Geef jouw wachtwoord.." ;name="wachtwoord"><br>
            <input type="submit" name="submit" value="Insert"><br>
            <a href="project_insert.php">Toevoegen</a>
            <a href="project_update.php">Updaten</a>
            <a href="project_delete.php">Verwijderen</a>
            <a href="project_select.php">Selecteren</a>

        </form>
    </center>
</body>

</html>