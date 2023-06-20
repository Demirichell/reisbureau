<?php

$stmt = $conn->prepare("SELECT * FROM trip WHERE ID =:id");
$stmt->execute(['id' => $_GET['id']]);
$data = $stmt->fetch();
if (isset($_POST["veranderen"])) {

    $sql = "UPDATE trip SET
        name= :name,
        description= :description,
        price = :price, 
        path = :path
        WHERE ID =:id";


    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':description', $_POST['description']);
    $stmt->bindParam(':price', $_POST['price']);
    $stmt->bindParam(':path', $_POST['path']);
    $stmt->bindParam(':id', $data['id']);
    $stmt->execute();
    //$stmt->debugDumpParams();
    header("location: admin.php");
}
