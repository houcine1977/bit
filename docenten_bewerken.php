<?php
include("opdracht_connection.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bewerken & updaten van aanbod van docenten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h3></h3>
                <div class="card">
                    <div class="card-header">
                        <h3>Bewerken & updaten van aanbod van docenten
                            <a href="opdracht_index.php" class="btn btn-info float-end">Terug naar de homepagina</a>
                            <a href="docenten_aanbod.php" class="btn btn-success float-end">Kiezen (Voor leerlingen)</a>
                        </h3>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $query = "SELECT * FROM docenten WHERE id = :id Limit 1 ";
                            $statement =  $conn->prepare($query);
                            $data = [
                                ':id' => $id
                            ];
                            $statement->execute($data);
                            $result = $statement->Fetch(PDO::FETCH_ASSOC);
                        }

                        ?>

                        <form action="opdracht_code_docenten.php" method="POST">

                            <input type="hidden" name="id" value="<?= $result['id']; ?>" class="form-control">

                            <div class="mb-3">
                                <label for="">Naam</label>
                                <input type="text" name="naam" class="form-control" value="<?= $result['naam']; ?>">

                            </div>


                            <div class="mb-3">
                                <label for="">Vak</label>
                                <select name="vak">
                                    <option>--</option>
                                    <option value="Wiskunde" <?php if ($result['vak'] == 'Wiskunde') {
                                                                    echo 'selected';
                                                                } ?>>Wiskunde</option>


                                    <option value="Frans" <?php if ($result['vak'] == 'Frans') {
                                                                echo 'selected';
                                                            } ?>>Frans</option>


                                    <option value="Nederlands" <?php if ($result['vak'] == 'Nederlands') {
                                                                    echo 'selected';
                                                                } ?>>Nederlands</option>

                                    <option value="Geschiedenis" <?php if ($result['vak'] == 'Geschiedenis') {
                                                                        echo 'selected';
                                                                    } ?>>Geschiedenis</option>
                                    <option value="Aardrijskunde" <?php if ($result['vak'] == 'Aardrijskunde') {
                                                                        echo 'selected';
                                                                    } ?>>Aardrijskunde</option>


                                    <option value="Duits" <?php if ($result['vak'] == 'Duits') {
                                                                echo 'selected';
                                                            } ?>>Duits</option>


                                    <option value="Engels" <?php if ($result['vak'] == 'Engels') {
                                                                echo 'selected';
                                                            } ?>>Engels</option>

                                    <option value="NS" <?php if ($result['vak'] == 'NS') {
                                                            echo 'selected';
                                                        } ?>>NS</option>
                                    <option value="Biologie" <?php if ($result['vak'] == 'Biologie') {
                                                                    echo 'selected';
                                                                } ?>>Biologie</option>

                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="">Blok</label>
                                <select name="blok">
                                    <option>--</option>
                                    <option value="1" <?php if ($result['blok'] == '1') {
                                                            echo 'selected';
                                                        } ?>>1</option>


                                    <option value="2" <?php if ($result['blok'] == '2') {
                                                            echo 'selected';
                                                        } ?>>2</option>


                                    <option value="3" <?php if ($result['blok'] == '3') {
                                                            echo 'selected';
                                                        } ?>>3</option>

                                    <option value="4" <?php if ($result['blok'] == '4') {
                                                            echo 'selected';
                                                        } ?>>4</option>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Week</label>
                                <select name="week">
                                    <option>--</option>
                                    <option value="1" <?php if ($result['week'] == '1') {
                                                            echo 'selected';
                                                        } ?>>1</option>


                                    <option value="2" <?php if ($result['week'] == '2') {
                                                            echo 'selected';
                                                        } ?>>2</option>


                                    <option value="3" <?php if ($result['week'] == '3') {
                                                            echo 'selected';
                                                        } ?>>3</option>

                                    <option value="4" <?php if ($result['week'] == '4') {
                                                            echo 'selected';
                                                        } ?>>4</option>

                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="">Type aanbod</label>
                                <select name="type_aanbod">
                                    <option>--</option>
                                    <option value="Remedierend" <?php if ($result['type_aanbod'] == 'Remedierend') {
                                                                    echo 'selected';
                                                                } ?>>Remedierend</option>


                                    <option value="Vakoverstijgend/ verdiepend" <?php if ($result['type_aanbod'] == 'Remedierend') {
                                                                                    echo 'selected';
                                                                                } ?>>Vakoverstijgend/ verdiepend</option>


                                    <option value="Zelfstudie" <?php if ($result['type_aanbod'] == 'Zelfstudie') {
                                                                    echo 'selected';
                                                                } ?>>Zelfstudie</option>

                                </select>
                            </div>




                            <div class="mb-3">
                                <label for="">Type onderwijs</label>
                                <select name="type_onderwijs">
                                    <option>--</option>
                                    <option value="Regulier" <?php if ($result['type_onderwijs'] == 'Regulier') {
                                                                    echo 'selected';
                                                                } ?>>Regulier</option>


                                    <option value="TTO" <?php if ($result['type_onderwijs'] == 'TTO') {
                                                            echo 'selected';
                                                        } ?>>TTO</option>


                                    <option value="Alle" <?php if ($result['type_onderwijs'] == 'Alle') {
                                                                echo 'selected';
                                                            } ?>>Alle</option>

                                </select>

                            </div>



                            <div class="mb-3">
                                <label for="">Opmerkingen</label>
                                <input type="text" name="opmerkingen" class="form-control" value="<?= $result['opmerkingen']; ?>">

                            </div>
                            <div class="mb-3"><button type="submit" name="update_docent_btn" class="btn btn-primary">Updaten</button></div>

                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>