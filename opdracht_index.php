<?php
session_start();
include("opdracht_connection.php");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">


                <?php
                if (isset($_SESSION['message'])) : ?>
                    <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
                <?php
                    unset($_SESSION['message']);
                endif; ?>
                <div class="card">
                    <div class="card-header">
                        <h3>Overzicht van inschrijvingen van LEERLINGEN
                            <a href="leerling_keuze.php" class="btn btn-danger float-end">Kiezen (Voor leerlingen) </a>
                            <a href="docenten_aanbod.php" class="btn btn-success float-end">Aanbod (Voor docenten)</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Leerlingnumr</th>
                                    <th>Naam</th>
                                    <th>Klas</th>
                                    <th>Blok</th>
                                    <th>Week</th>
                                    <th>Keuze vak</th>
                                    <th>Bewerken</th>
                                    <th>Verwijderen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM leerlingen";
                                $statement = $conn->prepare($query);
                                $statement->execute();
                                $statement->setFetchMode(PDO::FETCH_ASSOC);

                                $result = $statement->fetchAll();
                                if ($result) {
                                    foreach ($result as $row) {
                                ?>
                                        <tr>
                                            <td><?= $row['id']; ?></td>
                                            <td><?= $row['leerl_num']; ?></td>
                                            <td><?= $row['naam']; ?></td>
                                            <td><?= $row['klas']; ?></td>
                                            <td><?= $row['blok']; ?></td>
                                            <td><?= $row['week']; ?></td>
                                            <td><?= $row['keuze_vak']; ?></td>
                                            <td><a href="leerlingen_bewerken.php?id=<?= $row['id']; ?>" class="btn btn-primary">Bewerken</a></td>
                                            <td>
                                                <form action="opdracht_code_leerlingen.php" method="POST">
                                                    <button type="submit" name="delete_leerling" value="<?= $row['id']; ?>" class="btn btn-danger">Verwijderen</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="7"> Geen invoer gevonden.. </td>
                                    </tr>
                                <?php
                                }
                                ?>
                                <tr>
                                    <th>
                                    <td></td>
                                    </th>
                                </tr>
                            </tbody>

                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>