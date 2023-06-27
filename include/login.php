<?php
include_once './connect.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email=:email AND password=:password");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $value = $stmt->fetch();

    if (isset($value['email'])) {
        session_start();
        $_SESSION['user'] = array(
            'id' => $value['id']
        );
        header("location:../index.php");
    } else {
        header("location: ../index.php?error=Invalid email or password");
    }
} else {
    header("location: ../index.php");
    exit();
}
