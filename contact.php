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
        <h1>Contact us</h1>
        <?php if (!empty($msg)) {
            echo "<h2>$msg</h2>";
        } ?>
        <form method="post" action="./include/contactemail.php">
            <label for="name">Name: <input type="text" name="name" id="name"></label><br>
            <label for="subject">Subject: <input type="text" name="subject" id="subject"></label><br>
            <label for="message">Message: <textarea name="message" id="message" rows="8" cols="20"></textarea></label><br>
            <input type="submit" value="Send">
        </form>
        </div>
</body>

</html>