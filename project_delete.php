<?php

include("project_connection.php");
session_start();
if (isset($_POST['submit'])) {
    $query = "DELETE FROM project WHERE gebruikersnaam = '$_POST[gebruikersnaam]'";
    $result = mysqli_query($con, $query);
    echo "Deelnemer met succes verwijderd uit de database!";
    mysqli_close($con);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE</title>
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
</style>

<body>
    <center>
        <h1>Login Scherm</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="">Gebruikersnaam</label>
            <input type="text" name="gebruikersnaam" id=""><br>
            <input type="submit" name="submit" value="Verwijderen"><br>
            <a href="project_insert.php">Toevoegen</a>
            <a href="project_update.php">Updaten</a>
            <a href="project_delete.php">Verwijderen</a>
            <a href="project_select.php">Selecteren</a>

        </form>
    </center>
</body>

</html>