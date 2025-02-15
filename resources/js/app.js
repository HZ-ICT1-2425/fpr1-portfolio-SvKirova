import './bootstrap';

function openMenu() {
    document.getElementById("asideMenu").style.width = "250px";
}

function closeMenu() {
    document.getElementById("asideMenu").style.width = "0";
}

window.openMenu = openMenu;
window.closeMenu = closeMenu;
