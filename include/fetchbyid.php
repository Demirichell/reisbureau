<?php

include_once './connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM trips where id='$id'";
    $data = $sql;
}
