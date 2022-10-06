<?php

session_start();
include("opdracht_connection.php");

if (isset($_POST['delete_docent'])) {
    $id = $_POST['delete_docent'];
    try {
        $query = "DELETE FROM docenten WHERE id=:id";
        $statement = $conn->prepare($query);
        $data = [':id' => $id];
        $query_execute = $statement->execute($data);
        if ($query_execute) {
            $_SESSION['message'] = "Invoer is met succes verwijderd..";
            header('Location:opdracht_index_docenten.php');
        } else {
            $_SESSION['message'] = "Verwijderen is niet gelukt, probeer het nog een keer..";
            header('Location:opdracht_index_docenten.php');
            exit(0);
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

if (isset($_POST['update_docent_btn'])) {
    $id = $_POST['id'];

    $naam = $_POST['naam'];
    $vak = $_POST['vak'];

    $blok = $_POST['blok'];
    $week = $_POST['week'];
    $type_aanbod = $_POST['type_aanbod'];
    $type_onderwijs = $_POST['type_onderwijs'];
    $opmerkingen = $_POST['opmerkingen'];

    try {
        $query = "UPDATE docenten SET  naam = :naam, vak =:vak, blok = :blok, week = :week,  type_aanbod = :type_aanbod, type_onderwijs = :type_onderwijs, opmerkingen = :opmerkingen WHERE id = :id Limit 1";
        $statement = $conn->prepare($query);
        $data = [

            ':naam' => $naam,
            ':vak' => $vak,

            ':blok' => $blok,
            ':week' => $week,
            ':type_aanbod' => $type_aanbod,
            ':type_onderwijs' => $type_onderwijs,
            ':opmerkingen' => $opmerkingen,
            ':id' => $id
        ];
        $query_execute = $statement->execute($data);
        if ($query_execute) {
            $_SESSION['message'] = "Update gelukt..";
            header('Location:opdracht_index_docenten.php');
        } else {
            $_SESSION['message'] = "Update is niet gelukt, probeer het nog een keer..";
            header('Location:opdracht_index_docenten.php');
            exit(0);
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


if (isset($_POST['save_docent_btn'])) {


    $naam = $_POST['naam'];
    $vak = $_POST['vak'];

    $blok = $_POST['blok'];
    $week = $_POST['week'];
    $type_aanbod = $_POST['type_aanbod'];
    $type_onderwijs = $_POST['type_onderwijs'];
    $opmerkingen = $_POST['opmerkingen'];


    $query = "INSERT INTO docenten(naam, vak, blok, week, type_aanbod, type_onderwijs, opmerkingen) VALUES( :naam, :vak, :blok, :week, :type_aanbod, :type_onderwijs, :opmerkingen)";

    $query_run = $conn->prepare($query);

    $data = [
        ':naam' => $naam,
        ':vak' => $vak,
        ':blok' => $blok,
        ':week' => $week,
        ':type_aanbod' => $type_aanbod,
        ':type_onderwijs' => $type_onderwijs,
        ':opmerkingen' => $opmerkingen,

    ];

    $query_execute = $query_run->execute($data);
    if ($query_execute) {
        $_SESSION['message'] = "Invoer is geregistreerd..";
        header('Location:opdracht_index_docenten.php');
    } else {
        $_SESSION['message'] = "Invoer is niet gelukt, probeer het nog een keer..";
        header('Location:opdracht_index_docenten.php');
        exit(0);
    }
}
