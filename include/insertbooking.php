<?php
include_once "../include/connect.php";
//var_dump($_SESSION);

session_start();


if (isset($_POST['submit'])) {

    $sql = "SELECT * FROM bookings WHERE startdate >= :startdate AND startdate <= :enddate
    OR :enddate >= enddate AND :startdate <= enddate";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':startdate', $_POST['startdate']);
    $stmt->bindParam(':enddate', $_POST['enddate']);
    $stmt->bindParam(':userid', $_SESSION['user']['id']);
    $stmt->execute();
    $data = $stmt->fetchAll();
    var_dump($data);
    if ($data == null) {
        $sql = "INSERT INTO bookings (people, startdate, enddate, trips_id, user_id) VALUES (:people, :startdate, :enddate, :tripid, :userid)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':people', $_POST['people']);
        $stmt->bindParam(':tripid', $_GET['id']);
        $stmt->bindParam(':startdate', $_POST['startdate']);
        $stmt->bindParam(':enddate', $_POST['enddate']);
        $stmt->bindParam(':userid', $_SESSION['user']['id']);
        $stmt->execute();

        header("Location: ../index.php?booked=1");
    } else {
        header("Location: ../index.php?booked=0");
    }
}
