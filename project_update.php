<?php

include("project_connection.php");
session_start();
if (isset($_POST['submit'])) {
    $query = "UPDATE project set wachtwoord = '$_POST[wachtwoord]' WHERE gebruikersnaam = '$_POST[gebruikersnaam]'";
    $result = mysqli_query($con, $query);
    echo "Gegevens zijn met succes aangepast!";
    mysqli_close($con);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>
<style>
    label {
        display: block;
        margin-top: 10px;
    }
</style>

<body>
    <center>
        <h1>Gegevens van de deelnemers updaten</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="">Gebruikersnaam</label>
            <input type="text" name="gebruikersnaam" id=""><br>
            <label for="">Wachtwoord</label>
            <input type="password" name="wachtwoord"><br><br>
            <input type="submit" name="submit" value="Updaten"><br>
            <a href="project_insert.php">Toevoegen</a>
            <a href="project_update.php">Updaten</a>
            <a href="project_delete.php">Verwijderen</a>
            <a href="project_select.php">Selecteren</a>

        </form>
    </center>
</body>

</html>