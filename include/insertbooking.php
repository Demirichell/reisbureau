<?php
include_once "../include/connect.php";
//var_dump($_SESSION);

session_start();


if (isset($_POST['submit'])) {

    $sql = "SELECT * FROM bookings WHERE user_id=:userid AND startdate BETWEEN :startdate AND :enddate OR enddate BETWEEN :startdate AND :enddate";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':startdate', $_POST['startdate']);
    $stmt->bindParam(':enddate', $_POST['enddate']);
    $stmt->bindParam(':userid', $_SESSION['user']['id']);
    $stmt->execute();
    $stmt->fetchAll();
    var_dump($sql);
    if ($sql == null) {
        $sql = "INSERT INTO bookings (people, startdate, enddate, trips_id, user_id) VALUES (:people, :startdate, :enddate, :tripid, :userid)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':people', $_POST['people']);
        $stmt->bindParam(':tripid', $_GET['id']);
        $stmt->execute();

        header("Location: ../tripinformation.php");
    }
}
