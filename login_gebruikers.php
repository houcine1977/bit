<center>
    <?php

    include("connect.php");
    session_start();
    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $wachtwoord = $_POST["wachtwoord"];
        $query = "SELECT * FROM gebruikers WHERE username = '$username' && wachtwoord = '$wachtwoord' ";
        if (mysqli_num_rows(mysqli_query($con, $query)) > 0) {
            $_SESSION['username'] = $username;
            header("Location: index.php");
        } else {
            header("Location: login.php");
            echo "Invalide gebruikersnaam/ wachtwoord combinatie!";
            exit();
        }
    }

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
        input {
            width: 200px;
            margin-left: 20px;
        }

        label {
            font-size: 16px;
            font-weight: bold;
        }
    </style>

    <body>


        <h1>Netland Admin Panel</h1>
        <form action="" method="POST">
            <label for="username">Username</label>
            <input type="text" placeholder="username" name="username"><br><br>
            <label for="wachtwoord">Wachtwoord</label>
            <input type="password" placeholder="wachtwoord" name="wachtwoord"><br><br>
            <input type="submit" name="submit" value="Login"><br><br>


        </form>
        <a href="insert.php">Klik hier om te registreren!</a>

    </body>

    </html>
</center>