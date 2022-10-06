<?php

session_start();
include("opdracht_connection.php");

if (isset($_POST['delete_leerling'])) {
    $id = $_POST['delete_leerling'];
    try {
        $query = "DELETE FROM leerlingen WHERE id=:id";
        $statement = $conn->prepare($query);
        $data = [':id' => $id];
        $query_execute = $statement->execute($data);
        if ($query_execute) {
            $_SESSION['message'] = "Invoer is met succes verwijderd..";
            header('Location:opdracht_index.php');
        } else {
            $_SESSION['message'] = "Verwijderen is niet gelukt, probeer het nog een keer..";
            header('Location:opdracht_index.php');
            exit(0);
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

if (isset($_POST['update_student_btn'])) {
    $id = $_POST['id'];
    $leerl_num = $_POST['leerlingnum'];
    $naam = $_POST['naam'];
    $klas = $_POST['klas'];
    $blok = $_POST['blok'];
    $week = $_POST['week'];
    $keuze = $_POST['keuze_vak'];

    try {
        $query = "UPDATE leerlingen SET leerl_num =:leerl_num, naam = :naam, klas = :klas, blok = :blok, week = :week, keuze_vak = :keuze_vak WHERE id = :id Limit 1";
        $statement = $conn->prepare($query);
        $data = [
            ':leerl_num' => $leerl_num,
            ':naam' => $naam,
            ':klas' => $klas,
            ':blok' => $blok,
            ':week' => $week,
            ':keuze_vak' => $keuze,
            ':id' => $id
        ];
        $query_execute = $statement->execute($data);
        if ($query_execute) {
            $_SESSION['message'] = "Update gelukt..";
            header('Location:opdracht_index.php');
        } else {
            $_SESSION['message'] = "Update is niet gelukt, probeer het nog een keer..";
            header('Location:opdracht_index.php');
            exit(0);
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


if (isset($_POST['save_student_btn'])) {
    $leerl_num = $_POST['leerlingnum'];
    $naam = $_POST['naam'];
    $klas = $_POST['klas'];
    $blok = $_POST['blok'];
    $week = $_POST['week'];
    $keuze = $_POST['keuze_vak'];

    $query = "INSERT INTO leerlingen(leerl_num, naam, klas, blok, week, keuze_vak) VALUES(:leerl_num, :naam, :klas, :blok, :week, :keuze_vak)";

    $query_run = $conn->prepare($query);

    $data = [
        ':leerl_num' => $leerl_num,
        ':naam' => $naam,
        ':klas' => $klas,
        ':blok' => $blok,
        ':week' => $week,
        ':keuze_vak' => $keuze
    ];

    $query_execute = $query_run->execute($data);
    if ($query_execute) {
        $_SESSION['message'] = "Invoer is geregistreerd..";
        header('Location:opdracht_index.php');
    } else {
        $_SESSION['message'] = "Invoer is niet gelukt, probeer het nog een keer..";
        header('Location:opdracht_index.php');
        exit(0);
    }
}
