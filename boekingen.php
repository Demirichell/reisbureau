<!DOCTYPE html>
<html lang="en">

<head>
    <title> Boendemi</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/boekingen.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <nav>
        <p>Over Ons</p>
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
    <section id="bookings">
        <div class="booking-box">
            <?php
            include './include/connect.php';

            $stmt = $conn->prepare("SELECT * FROM trips;");
            $stmt->execute();
            $data = $stmt->fetchAll();

            foreach ($data as $key => $value) : ?>
                <div class="destination-label">
                    <div class="destination-label-left">
                        <p> <?php echo $value['name']; ?> </p>
                        <p> <?php echo $value['description']; ?> </p>
                    </div>
                    <div class="destination-label-right">
                        <p class="price"> <?php echo $value['price']; ?> </p>
                        <button>Boeken</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>

</html>