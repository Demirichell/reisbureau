    <nav>
        <a href="./aboutus.php">
            <p>Over Ons</p>
        </a>
        <a href="contact.php">
            <p>Contact</p>
        </a>
        <!-- LOGIN SECTIE -->
        <!-- knop die login overlay aanzet -->
        <button onclick="LoginOverlayOn()">Log in</button>
        <!-- overlay die de achtergrond verduisterd en een login schermpje tevoorschijn haalt -->
        <div onclick="LoginOverlayOff()" id="overlay"></div>
        <!-- login box overlay -->
        <div id="login-box">
            <div class="login-box-header">
                <h3>Inloggen</h3>
            </div>
            <div class="login-box-content">
                <form class="login-form" action="./include/login.php" method="post">
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email"><br>
                    <label for="password">Wachtwoord</label><br>
                    <input type="password" id="password" name="password"><br>
                    <a onclick="PasswordOverlayOn()">Wachtwoord vergeten?</a><br>
                    Nog geen account? <a onclick=" RegisterOverlayOn()">Registreer hier!</a>
                    <div class="login-btn-box">
                        <input type="submit" value="Login" name="submit">
                        <a onclick="AdminOverlayOn()">Inloggen voor beheerders</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- admin login -->
        <div id="admin-box">
            <div class="login-box-header">
                <h3>Inloggen voor beheerders</h3>
            </div>
            <div class="login-box-content">
                <form class="admin-form" action="./include/admin_login.php" method="post">
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email"><br>
                    <label for="password">Wachtwoord</label><br>
                    <input type="password" id="password" name="password"><br>
                    <a onclick="PasswordOverlayOn()">Wachtwoord vergeten?</a><br>
                    <div class="login-btn-box">
                        <input type="submit" value="Login" name="submit">
                    </div>
                </form>
            </div>
        </div>
        <!-- registreer box overlay -->
        <div id="register-box">
            <div class="login-box-header">
                <h3>Registreren</h3>
            </div>
            <div class="login-box-content">
                <form class="register-form" action="./include/register.php" method="post">
                    <label for="firstname">Voornaam</label><br>
                    <input type="text" id="firstname" name="firstname"><br>
                    <label for="lastname">Achternaam</label><br>
                    <input type="text" id="lastname" name="lastname"><br>
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email"><br>
                    <label for="password">Wachtwoord</label><br>
                    <input type="password" id="password" name="password"><br>
                    <label for="phone">Telefoonnummer</label><br>
                    <input type="number" id="phone" name="phone"><br>
                    <span onclick="">Terug naar inloggen</span>
                    <input type="submit" value="Registreren" name="submit">
                </form>
            </div>
        </div>
        <!-- wachtwoord vergeten -->
        <div id="password-box">
            <div class="login-box-header">
                <h3>Wachtwoord vergeten?</h3>
            </div>
            <div class="login-box-content">
                <form class="password-form" method="post">
                    <label for="email">Email</label><br>
                    <div class="login-btn-box">
                        <input type="submit" value="Login" name="submit">
                    </div>
                </form>
            </div>
        </div>
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