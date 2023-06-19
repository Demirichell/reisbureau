var overlay = document.getElementById("overlay");
var login = document.getElementById("login-box");
<<<<<<< Updated upstream
=======
var register = document.getElementById("register-box");
var password = document.getElementById("password-box");
var admin = document.getElementById("admin-box");
>>>>>>> Stashed changes

//zet de login overlay aan
function LoginOverlayOn() {
    overlay.style.display = "block";
    login.style.display = "block";
}

//zet de login overlay uit
function LoginOverlayOff() {
    overlay.style.display = "none";
    login.style.display = "none";
<<<<<<< Updated upstream
}
=======
    register.style.display = "none";
    password.style.display = "none";
    admin.style.display = "none";
}

function RegisterOverlayOn() {
    login.style.display = "none"
    register.style.display = "block";
}

function PasswordOverlayOn() {
    login.style.display = "none"
    password.style.display = "block";
}

function AdminOverlayOn() {
    login.style.display = "none"
    admin.style.display = "block";
}
>>>>>>> Stashed changes
