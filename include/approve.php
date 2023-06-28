<?php
include_once 'connect.php';

$stmt = $conn->prepare("SELECT * FROM bookings WHERE id = :id");

$stmt->execute([':id' => $_GET['id']]);
$data = $stmt->fetch();

if (isset($_POST['submit'])) {
    if ($data['confirm'] == 0) {
        $confirm = "1";
    } else {
        $confirm = "0";
    }
    $stmt = $conn->prepare("UPDATE bookings SET
                    confirm = :confirm WHERE id = :id
                    ");
    $stmt->bindParam(':confirm', $confirm);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();

    header("location: ../adminbookings.php");
}
