<center>
    <?php

    include('connect.php');
    if (isset($_POST["submit"])) {
        $username = htmlspecialchars(strtolower(trim($_POST["username"])));
        $email = htmlspecialchars(strtolower(trim($_POST["email"])));
        htmlspecialchars(strtolower(trim($_POST["username"])));
        $wachtwoord = htmlspecialchars(strtolower(trim($_POST["wachtwoord"])));

        $query = "INSERT INTO gebruikers(username, email, wachtwoord) VALUES('$username', '$email', '$wachtwoord')";
        if (mysqli_query($con, $query)) {
            echo "Dag! Je hebt met succes de inschrijving afgerond. Je kan nu inloggen: <a href = 'login.php'>Klik hier om in te loggen!</a>";
        }
    }



    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit</title>
    </head>

    <style>
        body {
            background-color: gray;
        }



        tr,
        td {
            text-align: center;
            border: 1px solid white;
            padding: 10px;
        }

        table {
            text-align: center;
            align-content: center;
        }

        label {
            font-size: 16px;
            font-weight: bold;
            margin-right: 40px;
        }
    </style>

    <body>
        <h1>Registratie Daschboard</h1><br>
        <form action="" method="POST">
            <label for="name">Username</label>
            <input type="text" name="username" placeholder="enter your name" required><br><br>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="enter your email" required><br><br>
            <label for="password">Wachtwoord</label>
            <input type="password" name="wachtwoord" placeholder="enter een wachtwoord" required><br><br>
            <input type="submit" name="submit" value="SingUp"><br><br>

        </form>

        <a href="login.php">Klik hier om in te loggen!</a>
    </body>

    </html>
</center>