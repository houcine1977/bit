<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Docenten aanbod</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<style>
    a {
        text-decoration: none;
        color: red;
    }
</style>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h3></h3>
                <div class="card">
                    <div class="card-header">
                        <h3>Aanbod van docenten
                            <a href="opdracht_index_global.php" class="btn btn-info float-end">Terug naar de homepagina</a>
                            <a href="leerling_keuze.php" class="btn btn-danger float-end">Kiezen (Voor leerlingen)</a>
                            <a href="opdracht_index_docenten.php" class="btn btn-success float-end">Naar overzicht</a>
                        </h3>
                    </div>
                    <div>
                        <div class="card-header">
                            <form action="opdracht_code_docenten.php" method="POST">

                                <div class="mb-3">
                                    <label for="">Naam</label>
                                    <input type="text" name="naam" class="form-control" required>

                                </div>

                                <div class="mb-3">
                                    <label for="">Vak</label>
                                    <select name="vak" required>
                                        <option value="">...</option>
                                        <option value="Wiskunde">Wiskunde</option>
                                        <option value="Frans">Frans</option>
                                        <option value="Nederlands">Nederlands</option>
                                        <option value="Geschiedenis">Geschiedenis</option>
                                        <option value="Aardrijskunde">Aardrijskunde</option>
                                        <option value="Duits">Duits</option>
                                        <option value="Engels">Engels</option>
                                        <option value="NS">NS</option>
                                        <option value="Biologie">Biologie</option>

                                    </select>

                                </div>

                                <div class="mb-3">
                                    <label for="">Blok</label>
                                    <select name="blok" required>
                                        <option value="">...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="3">4</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="">Week</label>
                                    <select name="week" required>
                                        <option value="">...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="3">4</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="">Type aanbod</label>
                                    <select name="type_aanbod" required>
                                        <option value="">...</option>
                                        <option value="Remedierend">Remedierend</option>
                                        <option value="Vakoverstijgend/ verdiepend">Vakoverstijgend/ verdiepend</option>
                                        <option value="Zelfstudie">Zelfstudie</option>

                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="">Type onderwijs</label>
                                    <select name="type_onderwijs" required>
                                        <option value="">...</option>
                                        <option value="Regulier">Regulier</option>
                                        <option value="TTO">TTO</option>
                                        <option value="Alle">Alle</option>

                                    </select>

                                </div>
                                <div class="mb-3">
                                    <label for="">Opmerkingen</label>
                                    <input type="text" name="opmerkingen" class="form-control" required>

                                </div>
                                <div class="mb-3"><button type="submit" name="save_docent_btn" class="btn btn-primary">Sla keuze op</button></div>
                                <div class="mb-3"><button type="submit" name="save_student_btn" class="btn btn-warning"><a href="opdracht_index_global.php">Afsluiten</a></button></div>

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