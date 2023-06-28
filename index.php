<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Boendemi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
        <div class="options">
            <div class="searchoptions"><span class="material-symbols-outlined">
                    sunny
                </span>Bestemmingen </div>
            <div class="searchoptions"><span class="material-symbols-outlined">
                    calendar_month
                </span>Vertrekdatum</div>
            <div class="searchoptions"><span class="material-symbols-outlined">
                    schedule
                </span>Duur</div>
            <div class="searchoptions"> <span class="material-symbols-outlined">
                    flight
                </span>Vervoer</div>
            <div class="searchbar">Search</div>
        </div>
        <img src="img/travelmap.jpg" alt="">
    </section>
    <section id="icons">
        <div class="iconssection"><img class="imgicon" src="./img/ice-cream.png" alt=""> </div>
        <div class="iconssection"><img class="imgicon" src="./img/beach-ball.png" alt=""></div>
        <div class="iconssection"><img class="imgicon" src="./img/sunny.png" alt=""></div>
        <div class="iconssection"><img class="imgicon" src="./img/flamingo.png" alt=""></div>
    </section>

    <section id="destinations">

        <div class="headertext">
            <h3> <b>Onze bestemmingen</b></h3>
        </div>
        <div class="card-box">
            <?php
            include './include/connect.php';

            $stmt = $conn->prepare("SELECT * FROM trips;");
            $stmt->execute();
            $data = $stmt->fetchAll();

            foreach ($data as $key => $value) : ?>
                <a href="tripinformation.php?id=<?php echo $value['id'] ?>">
                    <div class="card">
                        <img src="<?php echo $value['path']; ?>" class="card-img-top" alt="Destination">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value['hotel']; ?> </h5>
                            <p class="card-text"><?php echo $value['description'] = substr($value['description'], 0, strpos($value['description'], " ", 60)), '...'; ?></p>
                            <p class="card-price">€<?php echo $value['price']; ?></p>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </section>
</body>

</html>