<!DOCTYPE html>
<html lang="en">

<head>
    <title> Boendemi</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/contact.css">

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

    <section id="banner">
        <?php
        $Msg = "";
        if (isset($_GET['error'])) {
            $Msg = " Please Fill in the Blanks ";
            echo '<div class="blanks">' . $Msg . '</div>';
        }

        if (isset($_GET['success'])) {
            $Msg = " Your Message Has Been Sent ";
            echo '<div class="succes">' . $Msg . '</div>';
        }

        ?>
        <div class="succes">1</div>
        <div class="blanks">1</div>
        <div class="contact">
            <form action="./include/contactemail.php" method="post">
                <input type="text" name="UserName" placeholder="UserName">
                <input type="email" name="Email" placeholder="Email">
                <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                <textarea name="msg" placeholder="Write The Message"></textarea>
                <button class="btn btn-success" name="btn-send"> Send </button>
            </form>
        </div>

    </section>
</body>

</html>