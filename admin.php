<!DOCTYPE html>
<html lang="en">

<head>
    <title> Boendemi</title>
    <script src="myFunction.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <nav>
        <a href="./aboutus.php">
            <p>Over Ons</p>
        </a>
        <p>Contact</p>
        <p>Log in</p>
    </nav>
    <header>
        <div class="header-left">
            <img class="logo" src="./img/boendemi.png" alt="">
        </div>
        <div class="header-right">
            <form class="searchform" action="/action_page.php">
                <label for="gsearch"></label>
                <input type="search" id="gsearch" name="gsearch">
                <input type="submit">
            </form>
        </div>
    </header>

    <?php
    include './include/connect.php';



    $stmt = $conn->prepare("SELECT * FROM trips;");
    $stmt->execute();
    $data = $stmt->fetchAll();

    foreach ($data as $key => $value) : ?>
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $value['name']; ?> </h5>
                <p class="card-text"><?php echo $value['price']; ?></p>
                <p class="card-text"><?php echo $value['description']; ?></p>
                <a onclick="myFunction()" href="./include/delete.php?id=<?php echo $value['id']; ?>">delete</a>
                <button><a href="insert.php">insert</a></button>
                <a href="edit.php"> edit</a>
            </div>

        <?php endforeach; ?>
        </div>

        </div>

</body>

</html>