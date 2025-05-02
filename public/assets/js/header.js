const navIcons = document.querySelector(".nav-icons")
const navLinks = document.querySelector(".nav-links")
const burguer = document.createElement("button")
const imgBurguer = document.createElement("img")
imgBurguer.setAttribute("src", "/assets/img/menu.png")
imgBurguer.setAttribute("alt", "Menu")

burguer.appendChild(imgBurguer)
burguer.className = "menu-button"

navIcons.appendChild(burguer)

let openMenu = false

burguer.addEventListener("click", function () {
    if (!openMenu) {
        burguer.style.transform = "rotateZ(90deg)"
        navLinks.style.right = "0px"
    } else {
        burguer.style.transform = "rotateZ(0)"
        navLinks.style.right = "100%"
    }
    openMenu = !openMenu
})
