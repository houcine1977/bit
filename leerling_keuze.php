<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Leerlingen keuze</title>
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
                        <h3>Keuzes van leerlingen
                            <a href="opdracht_index_global.php" class="btn btn-info float-end">Terug naar de homepagina</a>
                            <a href="docenten_aanbod.php" class="btn btn-success float-end">Aanbod (Voor docenten)</a>
                            <a href="opdracht_index.php" class="btn btn-danger float-end">Naar overzicht</a>

                        </h3>
                    </div>
                    <div>
                        <div class="card-header">
                            <form action="opdracht_code_leerlingen.php" method="POST">
                                <div class="mb-3">
                                    <label for="">Leerlingnumr</label>
                                    <input type="number" name="leerlingnum" class="form-control" required>

                                </div>
                                <div class="mb-3">
                                    <label for="">Naam</label>
                                    <input type="text" name="naam" class="form-control" required>

                                </div>
                                <div class="mb-3">
                                    <label for="">Klas</label>
                                    <input type="text" name="klas" class="form-control" required>

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
                                    <label for="">Keuze vak</label>
                                    <select name="keuze_vak" required>
                                        <option value="">...</option>
                                        <option value="Nederlands">Nederlands</option>
                                        <option value="Frans">Frans</option>
                                        <option value="Duits">Duits</option>
                                        <option value="Engels">Engels</option>
                                        <option value="Geschiedenis">Geschiedenis</option>
                                        <option value="Aardrijskunde">Aardrijskunde</option>
                                        <option value="NS">NS</option>
                                        <option value="Biologie">Biologie</option>
                                        <option value="Wiskunde">Wiskunde</option>
                                    </select>


                                </div>
                                <div class="mb-3"><button type="submit" name="save_student_btn" class="btn btn-primary">Sla keuze op</button>



                                </div>
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