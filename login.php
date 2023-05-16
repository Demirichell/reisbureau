<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/login.css">'
    <script defer src="login.js"></script>
</head>

<body>
    <!-- knop die login overlay aanzet -->
    <button onclick="LoginOverlayOn()">Log in</button>
    <!-- overlay die de achtergrond verduisterd en een login schermpje tevoorschijn haalt -->
    <div onclick="LoginOverlayOff()" id="overlay">
    </div>
    <div id="login-box">
        <div class="login-box-header">
            <h3>Inloggen</h3>
        </div>
        <div class="login-box-content">
            <form class="login-form">
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email"><br>
                <label for="password">Wachtwoord</label><br>
                <input type="password" id="password" name="password"><br>
                <a href="">Wachtwoord vergeten?</a><br>
                Nog geen account? <span>Registreer hier!</span>
                <div class="login-btn-box">
                    <input class="login-btn" type="submit" value="Login">
                    <a href="">Inloggen voor beheerders</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>