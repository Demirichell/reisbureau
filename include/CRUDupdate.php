<?php
include_once 'connect.php';

$stmt = $conn->prepare("SELECT * FROM trips WHERE id = :id");
$stmt->execute(['id' => $_GET['id']]);
$data = $stmt->fetch();

if (isset($_POST['veranderen'])) {
    $stmt = $conn->prepare("UPDATE trips SET
                    hotel = :hotel,
                    description = :description,
                    price = :price,
                    path = :path
                    WHERE id = :id
                    ");
    $stmt->bindParam(':hotel', $_POST['hotel']);
    $stmt->bindParam(':description', $_POST['description']);
    $stmt->bindParam(':price', $_POST['price']);
    $stmt->bindParam(':path', $_POST['path']);
    $stmt->bindParam(':id', $data['id']);
    $stmt->execute();
    header("location: ../admin.php");
}
