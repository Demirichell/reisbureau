<!DOCTYPE html>
<html lang="en">

<head>
    <title> Boendemi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <nav>
        <a href="aboutus.php">
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

    <section id="location">

        <div class="headertext">
            <h3> <b>Populaire bestemmingen</b></h3>
        </div>

        <div class="populardest_img"><img src="./img/spain.jpg" alt="spain"></div>
        <div class="populardest_img"><img src="./img/portugal.jpg" alt=""></div>
        <div class="populardest_img"><img src="./img/greece.jpg" alt=""></div>
        <div class="populardest_img"><img src="./img/france.jpg" alt=""></div>

    </section>
</body>

</html>