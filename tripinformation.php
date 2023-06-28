<?php
session_start();
?>

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
    <?php
    include './include/connect.php';

    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM trips WHERE id='$id'");
    $stmt->execute();
    $data = $stmt->fetch();
    ?>
    <div class="booking-box">
        <div class="flexbox-left">
            <div class="large-card">
                <img src="<?php echo $data['path']; ?>" class="large-card-img-top" alt="Destination">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $data['name']; ?> </h5>
                    <p class="card-text"><?php echo $data['description'] ?></p>
                    <p class="card-price">€<?php echo $data['price']; ?></p>
                </div>
            </div>
        </div>

        <?php
        if (isset($_SESSION['user']) || isset($_SESSION['admin'])) :
        ?>
            <div class="flexbox-right">
                <form class="booking-form" action='./include/insertbooking.php?id=<?php echo $data['id'] ?>' method="post">
                    <label for="people">People</label><br>
                    <input type="number" id="people" name="people" min="1" max="5" required><br>
                    <label for="startdate">Date of departure</label><br>
                    <input type="date" id="startdate" name="startdate" required><br>
                    <label for="enddate">Date of return</label><br>
                    <input type="date" id="enddate" name="enddate" required><br>
                    <input class="addbutton" type="submit" value="Boeken" name="submit">
                </form>
            </div>
        <?php endif; ?>

</body>

</html>