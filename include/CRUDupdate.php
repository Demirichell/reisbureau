<?php
include_once './include/connect.php';

$stmt = $conn->prepare("SELECT * FROM trips WHERE id = :id");

$stmt->execute(['id' => $_GET['id']]);
$data = $stmt->fetch();

if (isset($_POST['editsubmit'])) {
    $stmt = $conn->prepare("UPDATE trips SET
                    name = :name,
                    description = :description,
                    price = :price,
                    path = :path
                    WHERE id = :id
                    ");
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':description', $_POST['description']);
    $stmt->bindParam(':price', $_POST['price']);
    $stmt->bindParam(':img', $_POST['image']);
    $stmt->bindParam(':id', $data['id']);
    $stmt->execute();
}
