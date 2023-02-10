(() => {
const mobileMenu = document.querySelector(".mobile-btn");
const hamburgerIcon = document.querySelector(".hamburger-icon");
const navMob = document.querySelector(".nav-menu");
let open = false;

const change = () => {
    if (!open) {
    hamburgerIcon.classList.add("active");
    navMob.classList.add("active");
    } else {
    hamburgerIcon.classList.remove("active");
    navMob.classList.remove("active");
    }
    open = !open;
};

mobileMenu.addEventListener("click", change);

})();