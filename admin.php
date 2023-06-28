<?php
session_start();
if (isset($_SESSION['admin'])) :
?>

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
        <link rel="stylesheet" href="./css/login.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <script defer src="login.js"></script>
    </head>

    <body>
        <?php include_once 'header.php';

        include './include/connect.php';

        $stmt = $conn->prepare("SELECT * FROM trips");
        $stmt->execute();
        $data = $stmt->fetchAll();

        foreach ($data as $key => $value) : ?>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $value['hotel']; ?> </h5>
                    <p class="card-text"><?php echo $value['price']; ?></p>
                    <p class="card-text"><?php echo $value['description']; ?></p>
                    <a onclick="myFunction()" href="./include/delete.php?id=<?php echo $value['id']; ?>">delete</a>
                    <button><a href="insert.php">insert</a></button>
                    <a href="edit.php?id=<?php echo $value['id'] ?>"> edit</a>
                </div>

            <?php endforeach; ?>
            </div>

            </div>

    </body>

    </html>
<?php else :
    header("location: index.php");
endif; ?>