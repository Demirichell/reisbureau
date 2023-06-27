<?php
include_once "../include/connect.php";
//var_dump($_SESSION);


if (isset($_POST['submit'])) {
    $sql = "INSERT INTO trips (name, price, description, path) VALUES (:name, :price, :description, :path)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':price', $_POST['price']);
    $stmt->bindParam(':description', $_POST['description']);
    $stmt->bindParam(':path', $_POST['path']);
    $stmt->execute();

    header("Location: ../admin.php");
}
