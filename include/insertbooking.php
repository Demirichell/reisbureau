<?php
include_once "../include/connect.php";
//var_dump($_SESSION);


if (isset($_POST['submit'])) {
    $sql = "INSERT INTO bookings (people, startdate, enddate, trips_id) VALUES (:people, :startdate, :enddate, :id)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':people', $_POST['people']);
    $stmt->bindParam(':startdate', $_POST['startdate']);
    $stmt->bindParam(':enddate', $_POST['enddate']);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();

    header("Location: ../index.php");
}
