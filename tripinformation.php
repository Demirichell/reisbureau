<!DOCTYPE html>
<html lang="en">

<head>
    <title> Boendemi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/boekingen.css">
    <script defer src="login.js"></script>

</head>

<body>
    <?php include_once 'header.php'; ?>
    <section id="banner">
        <?php
        include_once './connect.php';

        $stmt = $conn->prepare("SELECT * FROM trips WHERE id = :id");
        $stmt->bindParam(':id', $_GET['id']);
        $stmt->execute();
        $data = $stmt->fetch();
        ?>
        <div class="card">
            <img src="<?php echo $data['path']; ?>" class="card-img-top" alt="Destination">
            <div class="card-body">
                <h5 class="card-title"><?php echo $data['name']; ?> </h5>
                <p class="card-text"><?php echo $data['description'] = substr($data['description'], 0, strpos($value['description'], " ", 60)), '...'; ?></p>
                <p class="card-price">€<?php echo $data['price']; ?></p>
            </div>
        </div>
        </a>


</body>

</html>