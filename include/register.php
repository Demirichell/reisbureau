<?php
include_once './connect.php';

function register($email, $password, $firstname, $lastname, $phone)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO users (email, password, firstname, lastname, phone) VALUES ( :email, :password, :firstname, :lastname, :phone)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':phone', $phone);
    $stmt->execute();
    return true;
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];

    $registered = register($email, $password, $firstname, $lastname, $phone);

    if ($registered == true) {
        header("location: ../index.php");
    }
}
