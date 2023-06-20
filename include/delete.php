<?php
include_once "./connect.php";

$id = intval($_GET['id']);

//var_dump($id);
$sql = "DELETE FROM trips WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);
header("Location: ../admin.php");
