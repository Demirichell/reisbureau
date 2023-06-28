<?php
include_once "../include/connect.php";
//var_dump($_SESSION);


if (isset($_POST['submit'])) {
    $sql = "INSERT INTO trips (hotel, price, description, path) VALUES (:hotel, :price, :description, :path)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':hotel', $_POST['hotel']);
    $stmt->bindParam(':price', $_POST['price']);
    $stmt->bindParam(':description', $_POST['description']);
    $stmt->bindParam(':path', $_POST['path']);
    $stmt->execute();

    header("Location: ../admin.php");
}
