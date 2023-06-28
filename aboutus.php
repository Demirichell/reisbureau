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
    <link rel="stylesheet" href="./css/aboutus.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <?php include_once 'header.php'; ?>
    <section id="banner">
        <section id="aboutuscontent">
            <div class="contentleft">
                <h2> Over ons</h2>
                <h4>Welkom bij ons reisbureau! Wij zijn Bo en Demi, twee enthousiaste en avontuurlijke 21-jarigen die gepassioneerd zijn over reizen en het creëren van onvergetelijke ervaringen voor onze klanten. Als jonge reisexperts begrijpen we de behoeften en verlangens van onze generatie als het gaat om reizen. We geloven dat het ontdekken van nieuwe bestemmingen en culturen de sleutel is tot persoonlijke groei en levensverrijkende ervaringen.
                    Daarom streven we ernaar om reiservaringen te creëren die perfect aansluiten bij de interesses en verwachtingen van onze klanten. <br>
                    Onze filosofie is gebaseerd op het idee dat reizen niet alleen gaat om het bezoeken van toeristische attracties, maar ook om het beleven van authentieke momenten en het onderdompelen in de lokale cultuur.
                </h4>
                <div class="aboutusavatar">
                    <div class="contenavatar"> <img class="avatar" src="./img/avataaarsBo.png" alt=""></div>
                    <div class="bottemavatar">
                        <h4>Bo Leenders</h4><br>
                        <p></p>
                    </div>
                </div>
                <div class="aboutusavatar">
                    <div class="contenavatar"> <img class="avatar" src="./img/avataaarsDemi.png" alt=""></div>
                    <div class="bottemavatar">
                        <h4> Demi de Groot</h4>
                    </div>
                </div>

            </div>

            <div class="contentright">
                <div class="waaromons">
                    <h5> waarom ons?</h5>

                    <p> <span class="material-symbols-outlined">
                            done
                        </span>laagste prijs garantie </p>
                    <p> <span class="material-symbols-outlined">
                            done
                        </span> Verzekerd op vakantie</p>
                    <p> <span class="material-symbols-outlined">
                            done
                        </span> Uit passie voor reizen </p>
                    <p> <span class="material-symbols-outlined">
                            done
                        </span> Beoordeeld door echte experts </p>
                    <p> <span class="material-symbols-outlined">
                            done
                        </span> Zonder zorgen op reis </p>
                    <p> <span class="material-symbols-outlined">
                            done
                        </span> Beste uit de test</p>
                    <p> <span class="material-symbols-outlined">
                            done
                        </span> Ik weet even niet wat ik hier moet neerzetten </p>
                </div>

                <div class="contact">
                    <h5> Contact?</h5>
                    <a href="contact.php"> <button>Contact</button></a>

                </div>
            </div>

</body>

</html>