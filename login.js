var overlay = document.getElementById("overlay");
var login = document.getElementById("login-box");

//zet de login overlay aan
function LoginOverlayOn() {
    overlay.style.display = "block";
    login.style.display = "block";
}

//zet de login overlay uit
function LoginOverlayOff() {
    overlay.style.display = "none";
    login.style.display = "none";
}